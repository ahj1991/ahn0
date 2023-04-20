<?php 
	session_start();
?>
<!DOCTYPE html>
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
        <meta name="robots" content="noindex,nofollow"/> <!-- 검색엔진에서 검색 제외 -->
        <meta charset="UTF-8" http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="format-detection" content="telephone=no"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
        <meta property="og:url" content="http://www.ahn0.com">
        <meta property="og:title" content="AHN0">
        <meta property="og:type" content="website">
        <meta property="og:image" content="http://<?php echo $_SERVER['HTTP_HOST'];?>/start_img.png">
        <meta property="og:description" content="UI/UX designer">
        <meta name="description" content="AHN0">
        <link rel="apple-touch-icon" sizes="57x57" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="http://<?php echo $_SERVER['HTTP_HOST'];?>/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/favicon/favicon-16x16.png">
        <link rel="manifest" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="http://<?php echo $_SERVER['HTTP_HOST'];?>/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <title>Contact｜Ahn0</title>
        <link rel="stylesheet" href="../css/common.css" type="text/css">
        <link rel="stylesheet" href="../css/main.css" type="text/css">
        <link rel="stylesheet" href="../css/sub_page.css" type="text/css">
        <link rel="stylesheet" href="../css/font.css" type="text/css">

        <link rel="shortcut icon" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/favicon.ico" type="image/x-icon" />
        <link rel="icon" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/favicon.ico" type="image/x-icon" />
    </head>
    <style>
        header #header_wrap .nav_btn p{
            background:#fff !important;
            color:#1c1c1c;
        }
        
        header #header_wrap h1 p span{
            background: url(../common/logo/ahn0_n.png) no-repeat !important;
            background-size: contain !important;
        }

        footer #footer_wrap{
            background:#1c1c1c;
        }

    </style>
    <body oncontextmenu="return false" ondragstart="return false" onselectstart="return false">
        <div id="wrap contact_wrap" style="height:100vh; background:#1c1c1c;">
            <?
                include("../php/header.php");
            ?>
            <section id="contact_container">
                <div class="contact_inner">
                    <div class="contact_img">

                    </div>
                    <div class="contact_address">
                        <p class="h2">
                            <span>
                                Contact us
                            </span>
                        </p>
                        <div class="top_address">
                            <div>
                                <p class="h4">
                                    <span>
                                        FOR CLIENT
                                    </span>
                                </p>
                                <p>
                                    <span>
                                        +82 10.3339.0393
                                    </span>
                                </p>
                                <p>
                                    <span>
                                        ahjlove1991@naver.com
                                    </span>
                                </p>
                            </div>
                            <div>
                                <p class="h4">
                                    <span>
                                        OFFICE
                                    </span>
                                </p>
                                <p>
                                    <span>
                                        54, Digital-ro 32ga-gil, Guro-gu, Seoul, Republic of Korea
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="circle-wrap">
                            <span class="mid-line"></span>
                                <a href="#" class="code_view circle">
                                    <div class="ele-box">		 
                                        <span class="lb-top">
                                            <span class="txt">OPEN</span>
                                        </span>		
                                        <span class="dot">
                                        </span>
                                        <span class="lb-bot">
                                            <span class="txt">MAPS</span>
                                        </span>
                                    </div>
                                    <svg viewBox="0 0 222 222" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                        <circle class="c-01" cx="111" cy="111" r="110" stroke="#DEDEDE" stroke-opacity="0.2" fill="none" transform="rotate(-180 111 111)">

                                        </circle>
                                        <circle class="c-02" cx="111" cy="111" r="110" stroke="#DEDEDE" stroke-opacity="0.5" fill="none" transform="rotate(-180 111 111)">

                                        </circle>
                                    </svg>
                                </a>
                        </div>
                        <div class="bottom_address">
                            <div>
                                <p class="h4">
                                    <span>
                                        FOR CONTRACTORS
                                    </span>
                                </p>
                                <p>
                                    <span>
                                        +82 10.3339.0393
                                    </span>
                                </p>
                                <p>
                                    <span>
                                        ahjlove1991@naver.com
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="contact_sns">
                            <a href="#">.Instagram</a>
                            <a href="#">.Facebook</a>
                            <a href="#">.Blog</a>
                        </div>
                    </div>
                </div>
            </section>
            
        </div>
        <?
            include("../php/footer.php");
        ?>
        <script src="../script/jQuery/jquery-3.6.0.min.js"></script>
        <script src="../script/jQuery/swiper.js"></script>
        <script src="../script/javascript/common.js"></script>
        <script src="../script/javascript/main.js"></script>
        <script>
            $(function(){
                animateCircle = function() {
              var ctx = document.querySelector('#myCanvas').getContext('2d');
              var end = Math.PI * 2;
              for (var i = 0; i < 100; i++) {
                draw(i);
              };

              function draw(delay) {
                setTimeout(function(){
                  //draw.beginPath();
                  //arc(중심점x, 중심점y, 반지름, 시작각도, 끝각도, 방향)
                  //true : 반시계 방향 , false : 시계 방향
                  ctx.clearRect(0, 0, 200, 200);
                  ctx.beginPath();
                  ctx.arc(100, 100, 50, 0, end / 100 * delay);
                  ctx.stroke();
                  ctx.strokeStyle="rgba(255, 255, 255, 0.5)";

                }, delay * 10);
              }
            };
            animateCircle();
            });

        </script>
        <script type="text/javascript">
            // F12 버튼 방지
            $(document).ready(function(){
                $(document).bind('keydown',function(e){
                    if ( e.keyCode == 123 /* F12 */) {
                        e.preventDefault();
                        e.returnValue = false;
                    }
                });
            });
        </script>
        <script type="text/javascript">
            (function(w, d, a){
                w.__beusablerumclient__ = {
                    load : function(src){
                        var b = d.createElement("script");
                        b.src = src; b.async=true; b.type = "text/javascript";
                        d.getElementsByTagName("head")[0].appendChild(b);
                    }
                };w.__beusablerumclient__.load(a);
            })(window, document, "//rum.beusable.net/script/b211216e154344u324/56066e2c2f");
        </script>
    </body>
</html>