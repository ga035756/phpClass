<?php 
// $str = " 
//             aaa
//                     bbb
//  cccc
//  ";
 
//  echo $str;
 
//  $a=20;
//  $b=10;

//  echo $a.$b;

// $str = "  he\tllo\t \n";
// echo ltrim($str);
// echo rtrim($str);
// echo trim($str);
// 去空白

// echo strlen($str). "<p>";

// echo "<pre>[".$str."]</pre>";
// echo mb_strlen($str);
//字串長度表示

// $str ="a,b,c";
// echo "<pre>";
// print_r($str);
// print_r(explode(",",$str)); //分割字串
// echo "</pre>";

// $str = "&lt;a      &nbsp;&nbsp&nbsp&nbsp&nbsp      c&gt;";
// $str1 = "<a \n       c>";
// $str1 = htmlspecialchars($str1);
// $str1 = str_replace(" ","&nbsp;",$str1);

//&nbsp 有效空白 
// echo $str;
// echo htmlspecialchars($str1);
// echo $str1;
// echo nl2br($str1);


// $str="hello你好";
// echo substr($str,2,6);
// echo mb_substr($str,2,4);

// $a="hello";
// $b="ahello";
// var_dump($a==$b);
// $a="4";$b="5";
// var_dump(strcmp($a,$b));

//ascll 
// $a="A";$b="a";
// var_dump(strcasecmp($a,$b));

// $str = "this is a simple demo";
// $str = "我今天下雨沒帶雨傘天";
// echo strstr($str,"a");
// var_dump(strstr($str,"aaa")); //查看有無此字元 列出以後字串
// var_dump(strpos($str,"a")); //索引位置  中文加上mb
// var_dump(mb_strpos($str,"天",7));

$str = "今天天氣是雨天,天氣很不好";

echo nl2br("第一個").mb_strpos($str,"天");
echo nl2br("\n第2個").mb_strpos($str,"天", mb_strpos($str,"天")+1);
echo nl2br("\n第3個").mb_strpos($str,"天", mb_strpos($str,"天", mb_strpos($str,"天")+1)+1);
echo nl2br("\n第4個").mb_strpos($str,"天",mb_strpos($str,"天", mb_strpos($str,"天", mb_strpos($str,"天")+1)+1)+1);
echo "<br>";
$pos=-1;
while($pos !== false){
$pos = mb_strpos($str,"天",$pos +1);
echo $pos."<br>";
}













?>