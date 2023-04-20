<?php
    session_start();
    include_once('../php/session.php');
?>
<!DOCTYPE HTML>
<html lang="ko">
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
        <title>Ahn0</title>
        <link rel="stylesheet" href="../css/common.css" type="text/css">
        <link rel="stylesheet" href="../css/index.css" type="text/css">

        <link rel="shortcut icon" href="ahj1991.dothome.co.kr/favicon.ico" type="image/x-icon" />
        <link rel="icon" href="ahj1991.dothome.co.kr/favicon.ico" type="image/x-icon" />
        
        <style>

            @media all and (max-width:767px){

                .content_nav{width: 98%}
                #form_join{width: 98%}

                #form_area ul li{height: 80px}
                #form_area ul li label{width: 98%;margin:0 0 0 5px}

                #form_area .address_form li:nth-child(2){margin:0}
                #form_area .address_form li:nth-child(2) input[type=text]{width: 47.7%;margin:0 5px 0 0}
                #form_area ul li input[type=text]{width: 75.5%}
                #form_area ul li input[type=password]{width: 98%}

                #form_area ul .name_form input[type=text],#form_area ul .company_form input[type=text],#form_area ul .hp_form input[type=text],#form_area ul .email_form input[type=text],#form_area ul .homepage_form input[type=text],.form_fixed{width: 98%}

                #form_area ul li input[type=button]{width:20%}

                #button{width: 80%}
                #button > div{width: 48%;margin:0 1% 0 0;height: 60px}

            }
            @media all and (min-width:768px) and (max-width:1023px){

                .content_nav{width: 80%}
                #wrap #container #content .content_realbox .content_real .content_area{margin:20px 0 0 0}
                #form_join{width: 755px}

                #form_area ul li{height: 40px}
                #form_area ul li label{width: 160px}
                #form_area ul li input[type=text],#form_area ul li input[type=password],.form_fixed{width: 62%}
                #form_area .address_form li:nth-child(2){margin:0 0 0 160px}
                #form_area .address_form li:nth-child(2) input[type=text]{width: 38%;margin:0 2px 0 0}

                #form_area ul li input[type=button]{width:100px}

                #button{width: 420px}
                #button > div{width: 200px;height: 60px}

            }
            @media all and (min-width:1024px) and (max-width:1279px){

                .content_nav{width: 80%}
                #wrap #container #content .content_realbox .content_real .content_area{margin:20px 0 0 0}
                #form_join{width: 755px}

                #form_area ul li{height: 40px}
                #form_area ul li label{width: 160px}
                #form_area ul li input[type=text],#form_area ul li input[type=password],.form_fixed{width: 62%}
                #form_area .address_form li:nth-child(2){margin:0 0 0 160px}
                #form_area .address_form li:nth-child(2) input[type=text]{width: 38%;margin:0 2px 0 0}

                #form_area ul li input[type=button]{width:100px}

                #button{width: 420px}
                #button > div{width: 200px;height: 60px}

            }
            @media all and (min-width:1280px){

                .content_nav{width: 1150px}
                #wrap #container #content .content_realbox .content_real .content_area{margin:20px 0 0 0}
                #form_join{width: 755px}

                #form_area ul li{height: 40px}
                #form_area ul li label{width: 160px}
                #form_area ul li input[type=text],#form_area ul li input[type=password],.form_fixed{width: 62%}
                #form_area .address_form li:nth-child(2){margin:0 0 0 160px}
                #form_area .address_form li:nth-child(2) input[type=text]{width: 38%;margin:0 2px 0 0}

                #form_area ul li input[type=button]{width:100px}

                #button{width: 420px}
                #button > div{width: 200px;height: 60px}
            }

            input[type="text"],input[type="button"],select{
                -webkit-appearance: none; /* 네이티브 외형 감추기 */
                -moz-appearance: none; 
                -webkit-border-radius: 0; /* 네이티브 외형 감추기 */
                -moz-border-radius: 0; 
                appearance: none;
                font-size: 0.9em;
                height: 20px;

            }
            input[type="button"],input[type="password"]{
                -webkit-appearance: none;
                -moz-appearance: none; 
                -moz-border-radius:0; 
                -webkit-border-radius:0;
                -webkit-border: 0;
                -moz-border:0;
            }

            em{color: #6186bc}

            .form_fixed{background: #e1edfd;line-height: 38px}

            input{width: 100%;border:1px solid #dadada}

            .content_nav{border-bottom: 1px solid #dadada;padding:5px 0 0 0;margin: 0 auto}
            .content_nav ul{overflow: hidden;height: 30px}
            .content_nav ul li{float: left;line-height: 30px}
            .content_nav ul li span{margin: 0 4px}
            .content_nav ul li img{width: 15px;margin: 7px 7px 0 5px}
            .content_nav ul li .nav_pos{color: #3979ba;font-weight: 600}
            .content_main{margin:20px 0 30px 0}

            #checkbox label{margin:0 5px 0 0}
            #checkbox > div{width: 100%}

            #wrap #container #content .content_realbox .content_real .content_area{width: 100%;height: 100%}
            #form_join{margin: 0 auto}

            .form_title{border-bottom: 1px solid #dadada;overflow: hidden;width: inherit}
            .form_title h2{font-weight: 700;font-size: 1.5em;float: left}
            .form_title p{float: right}

            #form_area{width: 100%;margin:0 0 55px 0}
            #form_area ul{width: inherit}

            #form_area ul li{overflow: hidden;width: 100%;margin-bottom: 16px}

            #form_area ul li label{font-size: 1.1em;font-weight: 800;float: left;line-height: 40px;color: #575756}
            #form_area ul li input[type=text],.form_fixed{float: left;border:1px solid #dadada;height: 38px;font-size: 0.9em;text-indent: 10px}
            #form_area ul li input[type=password]{float: left;border:1px solid #dadada;height: 38px;font-size: 0.9em;text-indent: 10px}
            #form_area ul li input[type=button]{height: inherit;margin:0 0 0 10px;height: 38px;background: #969696;color:#fff;font-weight: 500}
            #form_area ul li input[type=button]:hover{cursor: pointer}

            #form_area ul:first-child{margin:17px 0 0 0}        

            #button{overflow: hidden;margin: 0 auto}
            #button > div{width: 48%;height: 40px;float: left;text-align: center;margin: 0 auto;border-radius: 3px}
            #button > div input{background: none;border: none;cursor: pointer;line-height: 40px;width: 100%;height: 100%}
            #button > div:first-child{margin:0 1% 0 0}
            #button > div:first-child input{border:1px solid #1f1f1f}
            #button > div:last-child{background: #1f1f1f;margin:0 0 0 1%}
            #button > div:last-child input{color: #fff}

            #wrap #container h2{font-weight: 600;font-size: 1.1em;margin:0 0 10px 0}

        </style>
    </head>
    <?php
        include "../lib/dbconn.php";

        $userid=$_SESSION['userid'];
        $username=$_SESSION['username'];

        $sql = "select * from member where id='$userid'";
        $sql2 = "select * from member where id='$username'";
        $result = mysqli_query($conn,$sql);
        $result2 = mysqli_query($conn,$sql2);
        $row = mysqli_fetch_array($result);
        $row2 = mysqli_fetch_array($result2);

        $hp = $row['hp'];
        $email = $row['email'];

        mysqli_close($conn);
    ?>
    <body>
        <div id="skipNav">
            <a href="#header_wrap">주메뉴 바로가기</a>
            <a href="#container">본문 바로가기</a>
            <a href="#footer">하단 바로가기</a>
        </div>
        <div id="wrap">
            <div id="header">
                <? include "../php/header.php" ?>
            </div>
            <div id="container">
                <div id="content">
                    <div class="vis_nav">회원정보수정</div>
                    <div class="content_vis">
                        <div>
                            <div class="vis_txtbox">
                                <ul class="vis_txt">
                                    <li>
                                        <p>  
                                            <span class="title">Edit member information</span>
                                            <span class="sub_title">회원 정보를 수정 해보세요!</span>
                                        </p>
                                    </li>
                                </ul>   
                            </div>
                            <div class="vis_img">

                            </div>
                            <div class="vis_blind">

                            </div>
                        </div>
                    </div>
                    <div class="content_area">
                        <div class="content_main">
                            <div class="content">
                                <form  name="member_form" method="post" action="modify.php"> 
                                    <div id="form_join">
                                        <div id="form_insert">
                                            <div class="form_title">
                                                <h2>회원정보수정</h2>
                                                <p>
                                                    <span><em>*</em>필수입력사항입니다.</span>
                                                </p>
                                            </div>
                                            <div id="form_area">
                                                <ul>
                                                    <li class="id_form">
                                                        <label for="id">아이디<em>*</em></label>
                                                        <div class="form_fixed">
                                                            <span><?= $row['id'] ?></span>
                                                        </div>
                                                    </li>
                                                    <li class="pass_form">
                                                        <label for="pass">비밀번호<em>*</em></label>
                                                        <input type="password" name="pass" value="<?= $row['pass'] ?>" title="비밀번호입력" placeholder="띄어쓰기 없는 영문, 숫자, 특수문자로만 8~20자" maxlength="20" minlength="8">
                                                    </li>
                                                    <li class="pass_chkform">
                                                        <label for="pass_confirm">비밀번호 확인<em>*</em></label>
                                                        <input type="password" name="pass_confirm" value="<?= $row['pass'] ?>">
                                                    </li>
                                                </ul>
                                                <ul>
                                                    <li class="name_form">
                                                        <label for="name">이름<em>*</em></label>
                                                        <div class="form_fixed">
                                                            <span><?= $row['name'] ?></span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="form_title">
                                                <h2>연락처정보</h2>
                                                <p>
                                                    <span><em>*</em>필수입력사항입니다.</span>
                                                </p>
                                            </div>
                                            <div id="form_area">
                                                <ul>
                                                    <li class="hp_form">
                                                        <label for="hp">연락처<em>*</em></label>
                                                        <input type="text" name="hp" placeholder="연락가능한 연락처를 작성해주세요." title="연락처입력" value="<?= $hp ?>">
                                                    </li>
                                                    <li class="email_form">
                                                        <label for="email">이메일<em>*</em></label>
                                                        <input type="text" id="email" name="email" placeholder="@형식의 이메일 주소를 입력해주세요" value="<?= $email ?>">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="button">
                                        <div class="form_btn">
                                            <input type="button" value="취소" onclick="reset_form()">
                                        </div>
                                        <div class="form_btn">
                                            <input type="button" value="저장" onclick="check_input()">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="../script/jQuery/jquery-1.12.4.min.js"></script>
        <script src="../script/javascript/common.js"></script>

        <script>
           function check_id()
           {
             window.open("check_id.php?id=" + document.member_form.id.value,
                 "IDcheck",
                  "left=200,top=200,width=250,height=100,scrollbars=no,resizable=yes");
           }

           function check_input()
           {

              /*var reg_id=/^(?=.*[a-zA-Z])(?=.*[0-9])[a-zA-Z0-9]{6,}$/;*/
              var reg_id=/^[a-zA-Z]+$/;
              var reg_pw=/^(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]+$/;
              /*var reg_tel=/^(070|02|0[3-9]{1}[0-9]{1})[0-9]{3,4}[0-9]{4}$/;*/
              /*var reg_phone=/^(01[016789]{1})[0-9]{4}[0-9]{4}$/;*/
              var reg_tel=/^[0-9]+$/;
              var reg_email=/^[a-z0-9_+.-]+@([a-z0-9-]+\.)+[a-z0-9]{2,4}$/;
              var reg_name=/^[가-힣]+$/;
              var reg_domain=/^((http(s?))\:\/\/)([0-9a-zA-Z\-]+\.)+[a-zA-Z]{2,6}(\:[0-9]+)?(\/\S*)?$/;

              if (!document.member_form.pass.value)
              {
                  alert("비밀번호를 입력해 주세요.");    
                  document.member_form.pass.focus();
                  return false;
              }
              if(!reg_pw.test(document.member_form.pass.value)){
                  alert("패스워드는 8자 이상 영문, 숫자, 특수문자를 포함해야 합니다.")
                  document.member_form.pass.focus();
                  return false;
              }

              if (!document.member_form.pass_confirm.value)
              {
                  alert("비밀번호를 재입력하세요");    
                  document.member_form.pass_confirm.focus();
                  return false;
              }

               if (document.member_form.pass.value!=document.member_form.pass_confirm.value)
              {
                  alert("비밀번호가 일치하지 않습니다.");    
                  document.member_form.pass_confirm.focus();
                  return false;
              }

              if (!reg_tel.test(document.member_form.hp.value))
              {
                  alert("숫자만 입력 가능합니다.");  
                  document.member_form.hp2.focus();
                  return false;
              }

               if (!document.member_form.hp.value)
              {
                  alert("연락처를 입력하세요");    
                  document.member_form.hp2.focus();
                  return false;
              }
              if (!document.member_form.email.value)
              {
                  alert("이메일을 입력하세요");    
                  document.member_form.email.focus();
                  return false;
              }

              if (!reg_email.test(document.member_form.email.value))
              {
                  alert("올바른 이메일 형식이 아닙니다.");    
                  document.member_form.email.focus();
                  return false;
              }

              document.member_form.submit();
           }


           function reset_form()
           {
              document.member_form.pass.value = "";
              document.member_form.pass_confirm.value = "";
              document.member_form.hp.value = "";
              document.member_form.email1.value = "";
              document.member_form.email2.value = "";

              document.member_form.pass.focus();

              return;
           }

        </script>
    </body>
</html>
