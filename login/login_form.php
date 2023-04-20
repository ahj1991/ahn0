<?php
    session_start();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
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
        <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <title>Log In｜Ahn0</title>
        <link rel="stylesheet" href="../css/common.css" type="text/css">
        <link rel="stylesheet" href="../css/common_sub.css" type="text/css">
        <link rel="stylesheet" href="../css/sub_page.css" type="text/css">
        <link rel="stylesheet" href="../css/font.css" type="text/css">

        <link rel="shortcut icon" href="ahj1991.dothome.co.kr/favicon.ico" type="image/x-icon" />
        <link rel="icon" href="ahj1991.dothome.co.kr/favicon.ico" type="image/x-icon" />

    </head>
    <body>
        <div id="wrap">
            <?
                include("../php/header.php");
            ?>
            <div id="login_area">
                <div id="login_form">
                    <div class="form_box">
                        <div id="form_title">
                            <h1>
                                <p style="width:60px; margin:0 auto;">
                                    <span><img src="../common/logo/ahn0_bn.png" alt="Ahn0"></span>
                                </p>
                            </h1>

                        </div>
                        <form name="member_form" method="post" action="../login/login.php"> 
                            <div id="sign_area">
                                <div id="sign_input">
                                    <ul>
                                        <li><input type="text" name="id" id="userId" class="login_input" placeholder="ID" maxlength="20" onkeydown="focus()" onchange="input_chk()" minlength="4"></li>
                                        <li><input type="password" name="pass" id="userpass" class="login_input" placeholder="Password" onkeydown="focus()" onchange="input_chk()" maxlength="25" minlength="4"></li>
                                    </ul>
                                </div>
                                <div id="chk_box">
                                    <input type="checkbox" id="idSaveCheck">
                                    <label for="idSaveCheck">
                                        <span>아이디 저장</span>
                                    </label>
                                </div>
                                <div id="btn_area">
                                    <div id="sign_btn">
                                        <input type="submit" value="로그인" id="sign">
                                    </div>
                                    <!--<div id="cancel_btn">
                                        <input type="button" value="" id="cancel" onclick="reset_form()">
                                    </div>-->
                                </div>
                                <p>
                                    <span><a href="../member/member_form.php">아직 ID가 없으신가요? </a></span>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="../script/jQuery/jquery-3.6.0.min.js"></script>
        <script src="../script/javascript/common.js"></script>

        <script>
            $(document).ready(function(){
                var userInputId = getCookie("userInputId");//저장된 쿠기값 가져오기 https://rh-cp.tistory.com/69
                $("input[name='id']").val(userInputId); 
                
                if($("input[name='id']").val() != ""){ // 그 전에 ID를 저장해서 처음 페이지 로딩
                                                    // 아이디 저장하기 체크되어있을 시,
                    $("#idSaveCheck").attr("checked", true); // ID 저장하기를 체크 상태로 두기.
                }
                
                $("#idSaveCheck").change(function(){ // 체크박스에 변화가 발생시
                    if($("#idSaveCheck").is(":checked")){ // ID 저장하기 체크했을 때,
                        var userInputId = $("input[name='id']").val();
                        setCookie("userInputId", userInputId, 7); // 7일 동안 쿠키 보관
                    }else{ // ID 저장하기 체크 해제 시,
                        deleteCookie("userInputId");
                    }
                });
                
                // ID 저장하기를 체크한 상태에서 ID를 입력하는 경우, 이럴 때도 쿠키 저장.
                $("input[name='id']").keyup(function(){ // ID 입력 칸에 ID를 입력할 때,
                    if($("#idSaveCheck").is(":checked")){ // ID 저장하기를 체크한 상태라면,
                        var userInputId = $("input[name='id']").val();
                        setCookie("userInputId", userInputId, 7); // 7일 동안 쿠키 보관
                    }
                });
            });
            
            function setCookie(cookieName, value, exdays){
                var exdate = new Date();
                exdate.setDate(exdate.getDate() + exdays);
                var cookieValue = escape(value) + ((exdays==null) ? "" : "; expires=" + exdate.toGMTString());
                document.cookie = cookieName + "=" + cookieValue;
            }
            
            function deleteCookie(cookieName){
                var expireDate = new Date();
                expireDate.setDate(expireDate.getDate() - 1);
                document.cookie = cookieName + "= " + "; expires=" + expireDate.toGMTString();
            }
            
            function getCookie(cookieName) {
                cookieName = cookieName + '=';
                var cookieData = document.cookie;
                var start = cookieData.indexOf(cookieName);
                var cookieValue = '';
                if(start != -1){
                    start += cookieName.length;
                    var end = cookieData.indexOf(';', start);
                    if(end == -1)end = cookieData.length;
                    cookieValue = cookieData.substring(start, end);
                }
                return unescape(cookieValue);
            }
        </script>
    </body>
</html>