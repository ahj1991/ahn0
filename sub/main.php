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
        <title>Ahn0</title>
        <link rel="stylesheet" href="../css/common.css" type="text/css">
        <link rel="stylesheet" href="../css/main.css" type="text/css">
        <link rel="stylesheet" href="../css/font.css" type="text/css">
        <link rel="stylesheet" href="../plugin/WOW-master/css/libs/animate.css" type="text/css">
        <link rel="stylesheet" href="../plugin/slick-1.8.1/slick/slick.css" type="text/css">
        <link rel="stylesheet" href="../plugin/slick-1.8.1/slick/slick-theme.css" type="text/css">
        
        <link rel="shortcut icon" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/favicon.ico" type="image/x-icon" />
        <link rel="icon" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/favicon.ico" type="image/x-icon" />
        <style>
            header #header_wrap h1 p span{
                background: url(../common/logo/ahn0_n.png) no-repeat !important;
                background-size: contain !important;
            }
        </style>
    </head>
    <body oncontextmenu="return false" ondragstart="return false" onselectstart="return false">
        <div id="wrap">
            <?
                include("../php/header.php");
            ?>
            <section id="container">
                <div class="poster">
                    <div class="slider slick-initialized slick-slider">
                        <div class="slick-list draggable">
                            <div class="slick-track">

                                <div id="content">
                                    <div id="btn_area">
                                        <div class="btn_box">
                                            <p>
                                                <span>N E X T</span>
                                                <span class="rotateInUpLeft">Jeongdong</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="content_top">
                                        <div class="content_top_inner">
                                            <p class="fadeIn">
                                                <span>.01</span>
                                                <span></span>
                                                <span>05</span>
                                            </p>
                                            <p class="h1 rotateInUpLeft" >d'Alba</p>
                                        </div>
                                    </div>

                                    <div class="main_circle-wrap">
                                        <p class="all_class_btn">
                                            <span><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/portfolio/project/list.php">VIEW ALL CASES</a>
                                            </span>
                                        </p>
                                        <span class="mid-line slideInLeft"></span>
                                            <a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/portfolio/project/view.php?table=works&num=35&page=" class="code_view circle">
                                                <div class="ele-box">		 
                                                    <span class="lb-top">
                                                        <span class="txt">OPEN</span>
                                                    </span>		
                                                    <span class="dot">
                                                    </span>
                                                    <span class="lb-bot">
                                                        <span class="txt">CASE</span>
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

                                    <div class="content_bottom">
                                        <p>
                                            <span class="fadeInUp">A minimalistic cottage created according to the</span>
                                            <span class="fadeInUp">principles of a style linear composition leading form</span>
                                            <span class="fadeInUp">the external facades into a cozy inner yard.</span>
                                        </p>
                                    </div>
                                </div>



                                <div id="content">
                                    <div id="btn_area">
                                        <div class="btn_box">
                                            <p>
                                                <span>N E X T</span>
                                                <span class="rotateInUpLeft">Eland gallery</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="content_top">
                                        <div class="content_top_inner">
                                            <p class="fadeIn">
                                                <span>.02</span>
                                                <span></span>
                                                <span>05</span>
                                            </p>
                                            <p class="h1 rotateInUpLeft">Jeongdong</p>
                                        </div>
                                    </div>

                                    <div class="main_circle-wrap">
                                        <p class="all_class_btn">
                                            <span><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/portfolio/project/list.php">VIEW ALL CASES</a>
                                            </span>
                                        </p>
                                        <span class="mid-line slideInLeft"></span>
                                            <a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/portfolio/project/view.php?table=works&num=34&page=" class="code_view circle">
                                                <div class="ele-box">		 
                                                    <span class="lb-top">
                                                        <span class="txt">OPEN</span>
                                                    </span>		
                                                    <span class="dot">
                                                    </span>
                                                    <span class="lb-bot">
                                                        <span class="txt">CASE</span>
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

                                    <div class="content_bottom">
                                        <p>
                                            <span class="fadeInUp">A minimalistic cottage created according to the</span>
                                            <span class="fadeInUp">principles of a style linear composition leading form</span>
                                            <span class="fadeInUp">the external facades into a cozy inner yard.</span>
                                        </p>
                                    </div>
                                </div>

                                <div id="content">
                                    <div id="btn_area">
                                        <div class="btn_box">
                                            <p>
                                                <span>N E X T</span>
                                                <span class="rotateInUpLeft">Lassele</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="content_top">
                                        <div class="content_top_inner">
                                            <p class="fadeIn">
                                                <span>.03</span>
                                                <span></span>
                                                <span>05</span>
                                            </p>
                                            <p class="h1 rotateInUpLeft">Eland gallery</p>
                                        </div>
                                    </div>

                                    <div class="main_circle-wrap">
                                        <p class="all_class_btn">
                                            <span><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/portfolio/project/list.php">VIEW ALL CASES</a>
                                            </span>
                                        </p>
                                        <span class="mid-line slideInLeft"></span>
                                            <a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/portfolio/project/view.php?table=works&num=33&page=" class="code_view circle">
                                                <div class="ele-box">		 
                                                    <span class="lb-top">
                                                        <span class="txt">OPEN</span>
                                                    </span>		
                                                    <span class="dot">
                                                    </span>
                                                    <span class="lb-bot">
                                                        <span class="txt">CASE</span>
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

                                    <div class="content_bottom">
                                        <p>
                                            <span class="fadeInUp">A minimalistic cottage created according to the</span>
                                            <span class="fadeInUp">principles of a style linear composition leading form</span>
                                            <span class="fadeInUp">the external facades into a cozy inner yard.</span>
                                        </p>
                                    </div>
                                </div>

                                <div id="content">
                                    <div id="btn_area">
                                        <div class="btn_box">
                                            <p>
                                                <span>N E X T</span>
                                                <span class="rotateInUpLeft">BOY de CHANEL</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="content_top">
                                        <div class="content_top_inner">
                                            <p class="fadeIn">
                                                <span>.04</span>
                                                <span></span>
                                                <span>05</span>
                                            </p>
                                            <p class="h1 rotateInUpLeft">Lassele</p>
                                        </div>
                                    </div>

                                    <div class="main_circle-wrap">
                                        <p class="all_class_btn">
                                            <span><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/portfolio/project/list.php">VIEW ALL CASES</a>
                                            </span>
                                        </p>
                                        <span class="mid-line slideInLeft"></span>
                                            <a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/portfolio/project/view.php?table=works&num=31&page=" class="code_view circle">
                                                <div class="ele-box">		 
                                                    <span class="lb-top">
                                                        <span class="txt">OPEN</span>
                                                    </span>		
                                                    <span class="dot">
                                                    </span>
                                                    <span class="lb-bot">
                                                        <span class="txt">CASE</span>
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

                                    <div class="content_bottom">
                                        <p>
                                            <span class="fadeInUp">A minimalistic cottage created according to the</span>
                                            <span class="fadeInUp">principles of a style linear composition leading form</span>
                                            <span class="fadeInUp">the external facades into a cozy inner yard.</span>
                                        </p>
                                    </div>
                                </div>

                                <div id="content">
                                    <div id="btn_area">
                                        <div class="btn_box">
                                            <p>
                                                <span>N E X T</span>
                                                <span class="rotateInUpLeft">d'Alba</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="content_top">
                                        <div class="content_top_inner">
                                            <p class="fadeIn">
                                                <span>.05</span>
                                                <span></span>
                                                <span>05</span>
                                            </p>
                                            <p class="h1 rotateInUpLeft">BOY de CHANEL</p>
                                        </div>
                                    </div>

                                    <div class="main_circle-wrap">
                                        <p class="all_class_btn">
                                            <span><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/portfolio/project/list.php">VIEW ALL CASES</a>
                                            </span>
                                        </p>
                                        <span class="mid-line slideInLeft"></span>
                                            <a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/portfolio/project/view.php?table=works&num=30&page=" class="code_view circle">
                                                <div class="ele-box">		 
                                                    <span class="lb-top">
                                                        <span class="txt">OPEN</span>
                                                    </span>		
                                                    <span class="dot">
                                                    </span>
                                                    <span class="lb-bot">
                                                        <span class="txt">CASE</span>
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

                                    <div class="content_bottom">
                                        <p>
                                            <span class="fadeInUp">A minimalistic cottage created according to the</span>
                                            <span class="fadeInUp">principles of a style linear composition leading form</span>
                                            <span class="fadeInUp">the external facades into a cozy inner yard.</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </section>
            <footer>
                <div id="main_footer">
                    <div class="footer_sns h5">
                        <a href="https://www.instagram.com/luna.__.s2/">.Instagram</a>
                        <a href="#">.Facebook</a>
                        <a href="https://blog.naver.com/lunaa_s2">.Blog</a>
                    </div>
                </div>
            </footer>
        </div>
        <script src="../script/jQuery/jquery-3.6.0.min.js"></script>
        <script src="../script/javascript/common.js"></script>
        <script src="../script/javascript/main.js"></script>
        <script src="../plugin/WOW-master/dist/wow.min.js"></script>
        <script src="../plugin/slick-1.8.1/slick/slick.js"></script>
        <script src="../plugin/slick-1.8.1/slick/slick-min.js"></script>
        <script>
        
            new WOW().init();

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



        <script>
            $(function(){
                
                $('.slick-track').slick({
                    
                    slide: 'div',		//슬라이드 되어야 할 태그 ex) div, li 
                    infinite : true, 	//무한 반복 옵션	 
                    slidesToShow : 1,		// 한 화면에 보여질 컨텐츠 개수
                    fade:true, // fadein
                    slidesToScroll : 1,		//스크롤 한번에 움직일 컨텐츠 개수
                    speed : 100,	 // 다음 버튼 누르고 다음 화면 뜨는데까지 걸리는 시간(ms)
                    arrows : true, 		// 옆으로 이동하는 화살표 표시 여부
                    dots : false, 		// 스크롤바 아래 점으로 페이지네이션 여부
                    autoplay : true,			// 자동 스크롤 사용 여부
                    autoplaySpeed : 4000, 		// 자동 스크롤 시 다음으로 넘어가는데 걸리는 시간 (ms)
                    pauseOnHover : false,		// 슬라이드 이동시 마우스 호버하면 슬라이더 멈추게 설정
                    vertical : false,		// 세로 방향 슬라이드 옵션
                    prevArrow : "<button type='button' class='slick-prev'>Previous</button>",		// 이전 화살표 모양 설정
                    nextArrow : "<button type='button' class='slick-next'>Next</button>",		// 다음 화살표 모양 설정
                    dotsClass : "slick-dots", 	//아래 나오는 페이지네이션(점) css class 지정
                    draggable : true, 	//드래그 가능 여부 
                    cssEase:'linear',
                    responsive: [ // 반응형 웹 구현 옵션
                        {  
                            breakpoint: 960, //화면 사이즈 960px
                            settings: {
                                //위에 옵션이 디폴트 , 여기에 추가하면 그걸로 변경
                                slidesToShow:1
                            } 
                        },
                        { 
                            breakpoint: 768, //화면 사이즈 768px
                            settings: {	
                                //위에 옵션이 디폴트 , 여기에 추가하면 그걸로 변경
                                slidesToShow:1
                            } 
                        },
                        { 
                            breakpoint: 320, //화면 사이즈 768px
                            settings: {	
                                //위에 옵션이 디폴트 , 여기에 추가하면 그걸로 변경
                                slidesToShow:1
                            } 
                        }
                    ]
                });

                $(".slick-slider").on('afterChange',function(){
                    $(".slick-slide #content .content_top .content_top_inner>p:first-child").addClass('fadeIn');
                    $(".slick-slide #content .content_top .content_top_inner>p:last-child").addClass('rotateInUpLeft');
                    $(".slick-slide #content .content_bottom p").addClass('fadeInUp');
                });
                $(".slick-slider").on('beforeChange',function(){
                    $(".slick-slide #content .content_top .content_top_inner>p:first-child").removeClass('fadeIn');
                    $(".slick-slide #content .content_top .content_top_inner>p:last-child").removeClass('rotateInUpLeft');
                    $(".slick-slide #content .content_bottom p").removeClass('fadeInUp');
                });

            })
            // slick 파괴
            $('#slider-div').slick("unslick");
            $('#slider-div').slick('slickRemove',0);	//특정 인덱스 번호에 있는 slider 삭제
            $('#slider-div').slick('slickRemove',false);	//false이면 맨 마지막 슬라이더 삭제
            $('#slider-div').slick('slickRemove',true);	// true이면 맨 앞 슬라이더 삭제
            $('#slider-div').slick('slickPlay');    // 시작
            
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