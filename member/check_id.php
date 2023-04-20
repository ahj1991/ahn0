<?php
  header('Content-Type: text/html; charset=UTF-8');

    include "../lib/dbconn.php";
    
    $id=$_POST['id'];
    $sql = "select count(*) from member where id='$id'";
    $result = mysqli_query($conn,$sql);
    $rows = mysqli_num_rows($result);

    if($rows > 0){
        $data = mysqli_fetch_array($result);
    }

    if($data[0] == 0){ echo "0"; }

    else{ echo "사용중인 아이디입니다."; }

    /*
    $sql = "select * from member where id='$id'";
    $id =$_GET['id'];
    if(!$id){
      print "아이디를 입력하세요.";
    }
    else
    {

      include "../lib/dbconn.php";

      $sql = "select * from member where id='$id'";
      $result = mysqli_query($conn,$sql);
      $num_record = mysqli_num_rows($result);

      if($num_record){
          print "중복된 아이디입니다.";
      }
      else
        {  
          print "사용가능한 아이디입니다.";
        }  

    mysqli_close($conn);
    } */
?>