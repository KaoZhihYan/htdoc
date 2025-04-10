<?php
session_start();
if(isset($_SESSION["check"])&&$_SESSION["check"]==1){


$uName=$_GET["uName"];
$uPassword=$_GET["uPassword"];
$uEmail=$_GET["uEmail"];
$uColor=$_GET["uColor"];
$uAge=$_GET["uAge"];
$uBirth=$_GET["uBirth"];
$uLike=$_GET["uLike"];
$uSecret=$_GET["uSecret"];
$uGender=$_GET["uGender"];
$uCity=$_GET["uCity"];
$uInterest=$_GET["uInterest"];
$uComment=$_GET["uComment"];


echo "Your name is:".$uName;echo "<br>";
echo "Your passord is:".$uPassword;echo "<br>";
echo "Your email is:".$uEmail;echo "<br>";
echo "Your color is:".$uColor;echo "<br>";
echo "Your age is:".$uAge;echo "<br>";
echo "Your birthday is:".$uBirth;echo "<br>";
echo "Your like is:".$uLike;echo "<br>";
echo "Your secret is:".$uSecret;echo "<br>";
echo "Your gender is:".$uGender;echo "<br>";
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
}echo "<br>";
echo "Your comments:".nl2br($uComment);"<br>";
}else if(isset($_SESSION["check"])&&$_SESSION["check"]==0){
    $uName=$_GET["uName"];
    $uPassword=$_GET["uPassword"];
    $uEmail=$_GET["uEmail"];
    $uGrade=$_GET["uGrade"];

    echo "Your name is:".$uName;echo "<br>";
    echo "Your passord is:".$uPassword;echo "<br>";
    echo "Your email is:".$uEmail;echo "<br>";
    echo "Your grade is:";
    switch($uGrade){
        case"大二":
            echo "大二<br>";
            break;
        case"大三":
            echo "大三<br>";
            break;
        case "大四":
            echo "大四<br>";
            break;
    }

}else{
    echo"Illegal user!";
    header("Refresh:2;url='login.php'");
}
?>