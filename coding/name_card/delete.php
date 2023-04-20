<?php
session_start();
$table=$_GET['table'];
$num=$_GET['num'];

include "lib/dbconn.php";

$sql="select * from $table where num=$num";
$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($result);
$copied_name =$row['name_save']; //파일명

  if($copied_name){
    $image_name = $_SERVER['DOCUMENT_ROOT'] ."image/".$copied_name;
		unlink($image_name); // 파일삭제

    $file_ext = strtolower(substr(strrchr($copied_name, "."), 1)); 
    $fileNameWithoutExt = substr($copied_name, 0, strrpos($copied_name, "."));

    $image_name_thumb = $_SERVER['DOCUMENT_ROOT'] ."image/".$copied_name.$fileNameWithoutExt."_thumb.jpg";
    unlink($image_name_thumb);
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
location.href='name_list.php?table=$table&mode=&page=1';
      </script>";
?>