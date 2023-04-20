<?php
session_start();
$table=$_GET['table'];
$num=$_GET['num'];

include "../lib/dbconn.php";

$sql="select * from $table where num=$num";
$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($result);
$copied_name =$row['userfile']; //파일명

  if($copied_name){
            $image_name="../uplaods/".$copied_name;
			unlink($image_name); // 파일삭제
  }

  $sql="delete from $table where num=$num";
  mysqli_query($conn,$sql);
  $sql = "ALTER TABLE $table AUTO_INCREMENT=1;";
  mysqli_query($conn,$sql);
  $sql = "SET @COUNT = 0;";
  mysqli_query($conn,$sql);
  $sql = "UPDATE $table SET num = @COUNT:=@COUNT+1;";
  mysqli_query($conn,$sql);
  
  mysqli_close($conn);

print "<script>
location.href='list.php?table=$table&mode=&page=1';
      </script>";
?>