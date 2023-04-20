<?php
$db_host = "localhost";
$db_user = "searchm";
$db_passwd = "Tjcldpa3112!";
$db_name = "searchm";

//$servername = "localhost";
//$username = "searchm";
//$password = "Tjcldpa3112!";

$conn = mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
if (mysqli_connect_errno($conn)){
    echo "실패다 이눔아". mysqli_connect_errno();
 } else { echo"성공ㅋ";
 }

//mysqli_select_db($conn,'searchm');
//mysqli_set_charset($conn,"utf8");
?>