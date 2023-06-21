<?php
class Image
{
    public $width = 0;
    public $height = 0;
    public $thumb = null;
    public $origin = null;
    public $css_object_fit = 'fill';
    private $x;
    private $y;
    function __construct($url)
    {
        $this->url = $url;
        list($this->width, $this->height) = getimagesize($url);
    }

    function resize($x, $y, $mode)
    {
        $this->x = $x;
        $this->y = $y;
        $ratio = $this->width / $this->height;
        switch ($mode) {
            case 'fill':
                $this->css_object_fit = 'fill';
                $newwidth = $x;
                $newheight = $y;
                break;
            case 'aspectfill':
                $this->css_object_fit = 'cover';
                if ($y > $x) {
                    $newwidth = $x;
                    $newheight = (int) ($newwidth / $ratio);
                } else {
                    $newheight = $y;
                    $newwidth = (int) ($newheight * $ratio);

                }
                break;
            case 'aspectfit':
                $this->css_object_fit = 'contain';
                if ($y > $x) {
                    $newheight = $y;
                    $newwidth = (int) ($newheight * $ratio);

                } else {
                    $newwidth = $x;
                    $newheight = (int) ($newwidth / $ratio);
                }
                break;
            default:
                # code...
                break;
        }
        $gc = imagecreatetruecolor($newwidth, $newheight);
        $origin = imagecreatefromjpeg($this->url);
        imagecopyresized(
            $gc,
            $origin,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight, $this->width, $this->height
        );
        ob_start();
        imagejpeg($gc);
        $this->thumb = ob_get_contents();
        ob_end_clean();

        ob_start();
        imagejpeg($origin);
        $this->origin = ob_get_contents();
        ob_end_clean();
        // die();
        // echo $newwidth . "<br>";
        // echo $newheight;
    }

    function getImageSrc($type)
    {
        switch ($type) {
            case 'origin':
                $mime_type = (new finfo(FILEINFO_MIME_TYPE))->buffer($this->origin);
                $base64 = base64_encode($this->origin);
                $src = "data:{$mime_type};base64,{$base64}";
                break;
            case 'thumb':
                $mime_type = (new finfo(FILEINFO_MIME_TYPE))->buffer($this->thumb);
                $base64 = base64_encode($this->thumb);
                $src = "data:{$mime_type};base64,{$base64}";
                break;
        }
        return [$src, $this->width . 'px', $this->height . 'px', $this->css_object_fit];
    }
}

$image = new Image('https://images.pexels.com/photos/2286895/pexels-photo-2286895.jpeg?h=1000&w=1500&fit=crop&markalign=center%2Cmiddle&txt=pexels.com&txtalign=center&txtsize=60&txtclr=eeffffff&txtfont=Avenir-Heavy&txtshad=10&mark=https%3A%2F%2Fassets.imgix.net%2F~text%3Ftxtclr%3Dfff%26txtsize%3D120%26txtpad%3D20%26bg%3D80000000%26txtfont%3DAvenir-Heavy%26txtalign%3Dcenter%26w%3D1300%26txt%3D%25E5%2585%258D%25E8%25B4%25B9%25E7%25B4%25A0%25E6%259D%2590%25E5%259B%25BE%25E7%2589%2587');
echo $image->width . '<br>';
echo $image->height . '<br>';

$thumb = $image->resize(200, 200, 'aspectfit');
//fill , aspectfill , aspectfit  , don't use fill ,that will turn
// $src = $image->getImageSrc('thumb'); //origin , thumb
list($src, $css_width, $css_height, $css_object_fit) = $image->getImageSrc('thumb');
// die($css_object_fit);
?>

<html>
<style>
    .image {
        object-fit:
            <?= $css_object_fit ?>
        ;
         /* object-position: 50% 50%; */

        width: 300px;
        height: 300px;
        border: solid 2px red;
    }
</style>

<body>
    <img class="image" src="<?= $src ?>">
</body>

</html>