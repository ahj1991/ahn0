<?php
    session_start();
    include "../member/password.php";
?>
<meta charset="utf-8">
<?php
    $table='member';
    $ip = $_SERVER['REMOTE_ADDR'];
    // 접속한 사용자의 ip 주소 불러오기
    $port = $_SERVER['SERVER_PORT'];
    // 사용되고 있는 포트 불러오기
    $agent = $_SERVER['HTTP_USER_AGENT'];
    // 접속자의 사용자 환경값 가져오기
    $regist_day = date("Y-m-d (H:i)");
    $id= $_POST['id'];

    if(!$id){
        print "<script>
            window.alert('아이디를 입력하세요.');
            history.go(-1);
            </script>";
        exit;
    }
    $pass= $_POST['pass'];
    if(!$pass){
        print "<script>
            window.alert('비밀번호를 입력하세요.');
            history.go(-1);
            </script>";
        exit;
    }

    include "../lib/dbconn.php";
    
    
    $sql = "select * from $table where id='$id'";
    $result = mysqli_query($conn,$sql);
    $num_match =mysqli_num_rows($result);

    if(!$num_match)
    {
     // 아이디 등록하세요
        print "<script>
            window.alert('등록되지 않은 ID입니다.');
            history.go(-1);
            </script>";
            exit;
    }
    else
    {
    // 아이디 사용자 session 정보 할당
    $row = mysqli_fetch_array($result);    
    
    $db_passwd = $row['pass'];
    if ( password_verify($pass, $db_passwd)) 
    {           
        
        // session 정보 할당
        $userid=$row['id'];
        $userpass=$row['pass'];
        $username=$row['name'];
        $usernick=$row['nick'];
        $usercompany=$row['company'];
        $userlevel=$row['level'];
        $useremail=$row['email'];
        $userhomepage=$row['homepage'];
        $userprofile=$row['profile'];

        $_SESSION['userid']=$userid; //세션변수값으로 대입
        $_SESSION['username']=$username;
        $_SESSION['usernick']=$usernick; 
        $_SESSION['usercompany']=$usercompany; 
        $_SESSION['userlevel']=$userlevel; 
        $_SESSION['useremail']=$useremail;
        $_SESSION['userhomepage']=$userhomepage;
        $_SESSION['userprofile']=$userprofile;
        
        echo("<script>
            location.href ='../sub/main.php?page=1';
        </script>");
    }
    else{
        print "<script>
            window.alert('비밀번호가 잘못되었습니다.');
            history.go(-1);
            </script>";
            exit;
    }

    }
?>






