<?php
    header('Content-Type: text/html; charset=UTF-8');
    if ( !preg_match("/".$_SERVER['HTTP_HOST']."/i", $_SERVER['HTTP_REFERER']) ){
        echo "<script>
            alert('잘못된 접근입니다.');
            history.go(-1);
        </script>";
    exit;
    }

    session_start();
    include "../lib/dbconn.php";

    $mode = "modify";
    $table = "member";
?>
<!DOCTYPE HTML>
<html lang="ko">
    <head>
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-1BG698FW5Y"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-1BG698FW5Y');
        </script>
        <meta charset="UTF-8" http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
        <meta property="og:url" content="http://www.ahn0.com">
        <meta property="og:title" content="AHN0">
        <meta property="og:type" content="website">
        <meta property="og:image" content="../start_img.png">
        <meta property="og:description" content="UI/UX designer">
        <meta name="description" content="AHN0">
        <link rel="apple-touch-icon" sizes="57x57" href="../favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="../favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="../favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="../favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="../favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="../favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="../favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="../favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="../favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="../favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
        <link rel="manifest" href="../favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="../favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <title>Ahn0</title>
        <link rel="stylesheet" href="../css/common.css" type="text/css">
        <link rel="stylesheet" href="../css/common_sub.css" type="text/css">
        <link rel="stylesheet" href="../css/sub_page.css" type="text/css">
        <link rel="stylesheet" href="../css/font.css" type="text/css">

        <link rel="shortcut icon" href="ahn0.dothome.co.kr/favicon.ico" type="image/x-icon" />
        <link rel="icon" href="ahn0.dothome.co.kr/favicon.ico" type="image/x-icon" />

    </head>
    <?php

        $userid=$_SESSION['userid'];

        $sql = "select * from member where id='$userid'";

        $hp = $row['hp'];
        $email = $row['email'];

        $result = mysqli_query($conn,$sql);

        $row = mysqli_fetch_array($result);

    ?>
    <body>
    <?php
    if(!isset($_SESSION['userid'])){
    ?><?php
    }else{
    ?>
        <div id="wrap">
            <?
            include ("../php/header.php");
            ?>
            
            <div id="modify_container">
                <div id="content">
                    <div class="member_title">
                        <div class="h3">
                            <p>
                                <span>
                                    MY PAGE
                                </span>
                            </p>
                        </div>
                        <div class="text_area">
                            <div class="modify_nav h5">
                                <div>
                                    <a href="#">DASHBOARD</a>
                                </div>
                                <div>
                                    <a href="member_modify.php">회원정보 수정</a>
                                </div>
                                <div>
                                    <a href="password_modify.php" class="nav_action">비밀번호 변경</a>
                                </div>
                                <div>
                                    <a href="../contact/write.php">1:1 문의하기</a>
                                </div>
                                <?php 
                                    if($_SESSION['useremail']==$item_id || $_SESSION['userlevel']==99)
                                    {
                                ?>
                                <div>
                                    <a href="../contact/list.php">CONTACT LIST</a>
                                </div>
                                <?php
                                    }else{
                                        /*$_SESSION['userid']="guest";
                                        print "[권한없음]";*/
                                    }
                                ?>
                                <div>
                                    <a href="logout.php">LOG OUT</a>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="content_area">
                        <div class="content_inner">
                            <form name="modify_form" method="post" id="account" action="pass_modify.php?mode=modify"> 
                                <div id="form_join">
                                    <div id="form_insert">
                                        <div class="form_title">
                                            <p class="h3">
                                                <span>
                                                    회원정보수정
                                                </span>
                                            </p>
                                        </div>
                                        <div id="form_area">
                                            <ul>
                                                <li class="id_form">
                                                    <label class="h5" for="id">아이디</label>
                                                    <div class="form_fixed">
                                                        <p>
                                                            <span><?= $row['id'] ?></span>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="name_form">
                                                    <label class="h5" for="name">이름</label>
                                                    <div class="form_fixed">
                                                        <p>
                                                            <span><?= $row['name'] ?></span>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="pass_form">
                                                    <label class="h5" for="pass">비밀번호</label>
                                                    <input type="password" id="pass" name="pass" title="비밀번호입력" placeholder="띄어쓰기 없는 영문, 숫자, 특수문자로만 8~20자" maxlength="20" minlength="8" autocomplete="off" >
                                                </li>
                                                <li class="pass_chkform">
                                                    <label class="h5" for="pass_confirm">비밀번호 확인</label>
                                                    <input type="password" id="pass_confirm" name="pass_confirm" maxlength="20" minlength="8" >
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div id="button">
                                    <div class="form_btn">
                                        <input type="reset" value="취소">
                                    </div>
                                    <div class="form_btn">
                                        <input type="button" value="저장" onclick="check_modify()">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="../script/jQuery/jquery-3.6.0.min.js"></script>
        <script src="../script/javascript/common.js"></script>
        <script>
            function check_modify(){

                var mem_frm = document.getElementById('account');
                var mem_pw = mem_frm.elements["pass"].value;
                var mem_pw2 = mem_frm.elements["pass_confirm"].value;

                var reg_pw=/^(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[$`~!@$!%*#^?&\\(\\)\-_=+]).{8,20}$/;

                if(!reg_pw.test(mem_pw)){
                    alert("비밀번호가 올바르게 입력되었는지 확인해주세요.");
                    mem_frm.elements["pass"].focus();
                }

                else if (!mem_pw2){
                    alert("비밀번호를 확인을 입력해주세요.");
                    mem_frm.elements["pass_confirm"].focus();
                }
                else if (mem_pw!=mem_pw2)
                {
                    alert("비밀번호가 일치하지 않습니다.")
                    mem_frm.elements["pass_confirm"].focus();
                }else{
                    mem_frm.submit();
                }

            }
        </script>
    <?php
    }
    ?>
    </body>
</html>
