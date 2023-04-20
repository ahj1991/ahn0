<?php

//DB 불러오는 SET1
$servername = "localhost";
$username = "ahn0";
$password = "Guswjd0393!";

$conn = new mysqli($servername, $username, $password);

//DB 불러오는 SET2
//$conn =mysqli_connect('localhost','ahn0','Guswjd0393!');
mysqli_select_db($conn,'ahn0');


//이건 언어 안깨지게 하는 것 SET1, SET2 둘중 하나를 쓰더라도 있어야함.
mysqli_set_charset($conn,"utf8");

?>