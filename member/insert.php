<meta charset="utf-8"/>
<?php
    include "../member/password.php";
    $id     = $_REQUEST['id'];
    $passwd  = $_REQUEST['pass'];

    $encrypted_passwd  = password_hash($passwd, PASSWORD_DEFAULT);  

    $name = $_POST['name'];
    $hp = $_POST['hp'];
    $email = $_POST['email'];

    $regist_day = date("Y-m-d (H:i)");
    $ip= $_SERVER['REMOTE_ADDR'];
    include "../lib/dbconn.php";

    mysqli_set_charset($conn,"utf8");

    $sql = "select * from member where id='$id'";
    mysqli_query($conn,$sql);

    $result = mysqli_query($conn,$sql);

    $exist_id = mysqli_num_rows($result); // 레코드 갯수반환

    if($exist_id){ // id가 일치하는 레코드가 있으면
        print " <script>
                window.alert('사용중인 아이디입니다.');
                history.go(-1)
                </script> ";
        exit;
    }
        else
    {

        $sql = "insert into member(id,pass,name,hp,email,regist_day,level) ";
        $sql .= "values('$id','$encrypted_passwd','$name','$hp','$email','$regist_day', 9)";
        mysqli_query($conn,$sql);

    }
        mysqli_close($conn);

        print "회원가입이 완료되었습니다.";
        print "<script>location.href='../index.php';</script>";

?>