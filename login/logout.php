<?php
    session_start();

    unset($_SESSION['userid']);
    unset($_SESSION['username']);
    unset($_SESSION['usernick']);
    unset($_SESSION['userlevel']);

    /*세션 변수 배열 리셋*/
    $_SESSION=array();

    /*세션 모든 값 파괴*/

    session_destroy();
    /*페이지이동*/

    echo("
    <script>
        location.href = '../login/login_form.php?page=1'; 
    </script>
    ");

?>
