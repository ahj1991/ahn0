<?php
    header('Content-Type: text/html; charset=UTF-8');
    /*
    if ( !preg_match("/".$_SERVER['HTTP_HOST']."/i", $_SERVER['HTTP_REFERER']) ){
        echo "<script>
            alert('잘못된 접근입니다.');
        </script>";
    exit;
    }*/

    session_start();
    $mode=$_GET['mode'];
    $table="member";
    include "../lib/dbconn.php";

/*  
    include "../member/password.php";
    // 회원가입 insert.php
    //비밀번호 암호화 복호화 시작
    // 회원가입 화면에서 입력받은 비밀번호를 가져옵니다
    $id     = $_REQUEST['id'];
    $passwd  = $_REQUEST['pass']; //GET,POST방식 구분하지 않고 받기

    // 비밀번호를 암호화 합니다 
    $encrypted_passwd  = password_hash($passwd, PASSWORD_DEFAULT);
*/

    $userid=$_SESSION['userid'];
    $name = $_SESSION['username'];

    $company = $_POST['company'];
    $hp = $_POST['hp'];
    $email = $_POST['email'];

    $post = $_POST['post'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];

    $regist_day = date("Y-m-d (H:i)");
    
    if($mode=="modify"){
        $query = "update $table set name='$name', hp='$hp', email = '$email', company = '$company', post = '$post', address1 = '$address1', address2 = '$address2' where id='$userid'";
        
        echo "
        <script>
            alert('회원정보가 수정되었습니다.');
        </script>
    ";
        
    }else{
        echo "
        <script>
            alert('회원정보 수정을 실패하였습니다.');
        </script>
    ";
    }
    
    mysqli_query($conn,$query);
    mysqli_close($conn);
    /*location.href ='success.php';*/
    echo "
        <script>
            history.go(-1);
        </script>
    ";

?>