<?php

$uName=$_GET["uName"];
$uPassword=$_GET["uPassword"];
$uEmail=$_GET["uEmail"];
$uColor=$_GET["uColor"];
$uNum=$_GET["uAge"];
$uBirth=$_GET["uBirth"];
$uLike=$_GET["uLike"];
$uSecret=$_GET["uSecret"];
$uGender=$_GET["uGender"];
$uCity=$_GET["uCity"];
$uInterest=$_GET["uInterest"];
$uComment=$_GET["uComment"];


echo "Your name is:".$uName;"<br>";
echo "Your passord is:".$uPassword;"<br>";
echo "Your email is:".$uEmail;"<br>";
echo "Your color is:".$uColor;"<br>";
echo "Your age is:".$uAge;"<br>";
echo "Your birthday is:".$uBirth;"<br>";
echo "Your like is:".$uLike;"<br>";
echo "Your secret is:".$uSecret;"<br>";
echo "Your gender is:".$uGender;"<br>";
echo "Your city is:";
switch($uCity){
    case "taipei":
        echo "taipei<br>";
        break;
    case "taichung":
        echo "taichung<br>";
        break;
    case "kaosiung":
        echo "kaosiung<br>";
        break;
}
echo "Your interest(s) is:";
$x=count($uInterest);
if($x==0){
}else{
    for($i=0;$i<$x;$i++){
        if($i==$x-1){
            echo $uInterest[$i];
        }else{
            echo $uInterest[$i].",";
        }
    }
}"<br>";
echo "Your comments:".nl2br($uComment);"<br>"

?>