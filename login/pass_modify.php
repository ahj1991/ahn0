<?php
    header('Content-Type: text/html; charset=UTF-8');

    session_start();
    $mode=$_GET['mode'];
    $table="member";

    include "../member/password.php";
    include "../lib/dbconn.php";

    $passwd  = $_REQUEST['pass']; //GET,POST방식 구분하지 않고 받기

    // 비밀번호를 암호화 합니다 
    $encrypted_passwd = password_hash($passwd, PASSWORD_DEFAULT);
    $userid=$_SESSION['userid'];

    $regist_day = date("Y-m-d (H:i)");

    if($mode=="modify"){
        $query = "update $table set pass='$encrypted_passwd' where id='$userid'";
        
        echo "
        <script>
            alert('비밀번호가 수정되었습니다.');
        </script>
    ";
        
    }else{
        echo "
        <script>
            alert('비밀번호 수정을 실패하였습니다.');
        </script>
    ";
    }

    mysqli_query($conn,$query);
    mysqli_close($conn);

echo"
    <script>       
        history.go(-1);
    </script>
    ";
?>