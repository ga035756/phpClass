<?php
// require_once('DB.php');
// class User
// {
//     private $token = null;
//     public $nextPage = null;
//     public $cname = null;
//     public $image = null;
//     function __construct($uid, $pwd)
//     {
//         DB::select('select * from userinfo where uid = ? and pwd = ? ', function ($rows) {
//             $this->token = $rows[0]['token'];
//             $this->nextPage = $rows[0]['result'];

//             setcookie('token', $this->getToken(), time() + 120);
//             setcookie('welcome', $this->nextPage, time() + 120);

//         }, [$uid, $pwd]);

//         if ($this->token != null) {
//             DB::select('select * form userinfo where token = ?', function ($rows) {
//                 $this->cname = $rows[0]['cname'];
//                 $this->image = $rows[0]['image'];
//             }, $this->token);
//             $_SESSION['user'] = serialize($this);
//         }


//     }
//     function redirect()
//     {
//         header("location: {$this->nextPage}");
//     }
//     //deprecated
//     function login($uid, $pwd, $complete)
//     {
//         DB::select('call login(?, ?)', function ($rows) {
//             $this->token = $rows[0]['token'];
//             $this->nextPage = $rows[0]['result'];
//         }, [$uid, $pwd]);
//         $complete = ($this->result);
//     }
//     function getToken()
//     {
//         return $this->token;
//     }
// }
require_once('DB.php');


class User
{
    private $token = null;
    public $nextPage = null;
    public $cname = null;
    public $image = null;
    public $src = null;


    function __construct($uid, $pwd)
    {
        DB::select('call login(?, ?)', function ($rows) {
            $this->token = $rows[0]['token'];
            $this->nextPage = $rows[0]['result'];


            setcookie('token', $this->getToken(), time() + 120);
            setcookie('welcome', $this->nextPage, time() + 120);

        }, [$uid, $pwd]);


        if ($this->token != null) {
            DB::select('select * from UserInfo where token = ?', function ($rows) {
                $this->cname = $rows[0]['cname'];
                $this->image = $rows[0]['image'];
                if ($this->image == null) {
                    $this->image = file_get_contents('https://img.freepik.com/free-vector/head-profile-with-gears_98292-387.jpg');
                }
                $mime_type = (new finfo(FILEINFO_MIME_TYPE))->buffer($this->image);
                $image_base64 = base64_encode($this->image);
                $this->src = "data:{$mime_type};base64,{$image_base64}";
            }, [$this->token]);
            $_SESSION['user'] = serialize($this);
        }
    }


    function redirect()
    {
        header("location: {$this->nextPage}");
    }


    // deprecated
    // function login($uid, $pwd, $complete)
    // {
    //     DB::select('call login(?, ?)', function ($rows) {
    //         $this->token = $rows[0]['token'];
    //         $this->nextPage = $rows[0]['result'];
    //     }, [$uid, $pwd]);


    //     $complete($this->result);
    // }
    static function logout($token)
    {

        session_destroy();
        setcookie('token', '', -1);
        setcookie('welcome', '', -1);

        DB::call('call logout(?)', [$token]);
        header('location: login.php');
    }


    function getToken()
    {
        return $this->token;
    }
}