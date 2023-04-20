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
        <title>About｜Ahn0</title>
        <link rel="stylesheet" href="../css/common.css" type="text/css">
        <link rel="stylesheet" href="../css/common_sub.css" type="text/css">
        <link rel="stylesheet" href="../css/sub_page.css" type="text/css">
        <link rel="stylesheet" href="../css/font.css" type="text/css">
        <link rel="stylesheet" href="../plugin/slick-1.8.1/slick/slick.css" type="text/css">
        <link rel="stylesheet" href="../plugin/slick-1.8.1/slick/slick-theme.css" type="text/css">
        <link rel="shortcut icon" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/favicon.ico" type="image/x-icon" />
        <link rel="icon" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/favicon.ico" type="image/x-icon" />
        <style>
            footer #footer_wrap{
                background:#f5f5f3;
            }
        </style>
    </head>
    <body oncontextmenu="return false" ondragstart="return false" onselectstart="return false">
        <div id="wrap">
            <?
                include("../php/header.php");
            ?>
            <section id="about_container">
                <div class="about_inner">
                    <div class="about_intro">
                        <p class="h2">
                            <span>
                                오늘의 디지털 마케팅 그리고
                                <br>내일을 위한 커뮤니케이션 디자인
                            </span>
                        </p>
                        <p class="display_1">
                            <span>
                                <strong class="h4">디지털이 즐거운 사람들을 위한, 디지털 마케팅</strong>
                                안녕은 디지털이 즐거운 사람들이 모여 있는 곳입니다. 능동적인 소비자들에게 즐거운 경험을 설계하여 브랜드가 만족할 수 있는 유의미한 결과를 도출합니다. 디지털 마케팅 전략 수집에서 디지털 콘텐츠, 디지털 미디어, 디지털 퍼포먼스 분석까지. 안녕은 디지털로 세상을 깨웁니다.
                            </span>
                        </p>
                        <p class="display_1">
                            <span>
                                <strong class="h4">디지털로 만든 독창적 경험, 디지털 프로덕션</strong>
                                안녕은 디지털에서 가장 멋지게 살길 원하는 사람들이 모여있는 곳입니다. 디지털에서 소비자들이 사용하는 모든 플랫폼을 설계하고 만들어내는 전문가들이 모였습니다. 웹사이트에서 어플리케이션, 블로그에서 쇼핑몰까지. 안녕은 디지털로 세상을 구현합니다.
                            </span>
                        </p>
                    </div>
                </div>
            </section>
            
            <section id="about_img_slider">
                <div class="slider slick-initialized slick-slider">
                    <div class="slick-list draggable">
                        <div class="slick-track">
                            <div class="slick-track">
                                <div id="content">

                                </div>
                                <div id="content">

                                </div>
                                <div id="content">

                                </div>
                                <div id="content">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section id="skill_chart">
                <div style="width:80vw; margin:0 auto;">
                    <canvas id="myChart" class="my-4 w-100">

                    </canvas>
                </div>
            </section>

            <section id="about_client">
                <div class="client_inner">
                    <p class="h2">
                        Our Client    
                    </p>
                    <div class="client_logo">
                        <ul>
                            <li>
                                <img src="../common/logo/15.png" alt="logo">
                            </li>
                            <li>
                                <img src="../common/logo/15.png" alt="logo">
                            </li>
                            <li>
                                <img src="../common/logo/15.png" alt="logo">
                            </li>
                            <li>
                                <img src="../common/logo/15.png" alt="logo">
                            </li>
                            <li>
                                <img src="../common/logo/15.png" alt="logo">
                            </li>
                            <li>
                                <img src="../common/logo/15.png" alt="logo">
                            </li>
                            <li>
                                <img src="../common/logo/15.png" alt="logo">
                            </li>
                            <li>
                                <img src="../common/logo/15.png" alt="logo">
                            </li>
                            <li>
                                <img src="../common/logo/15.png" alt="logo">
                            </li>
                            <li>
                                <img src="../common/logo/15.png" alt="logo">
                            </li>
                            <li>
                                <img src="../common/logo/15.png" alt="logo">
                            </li>
                            <li>
                                <img src="../common/logo/15.png" alt="logo">
                            </li>
                            <li>
                                <img src="../common/logo/15.png" alt="logo">
                            </li>
                            <li>
                                <img src="../common/logo/15.png" alt="logo">
                            </li>
                            <li>
                                <img src="../common/logo/15.png" alt="logo">
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            
            <?
                include("../php/footer.php");
            ?>
        </div>
        <script src="../script/jQuery/jquery-3.6.0.min.js"></script>
        <script src="../plugin/slick-1.8.1/slick/slick.js"></script>
        <script src="../plugin/slick-1.8.1/slick/slick.min.js"></script>
        <script src="../script/jQuery/swiper.js"></script>
        <script src="../script/javascript/common.js"></script>
        <script src="../script/javascript/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            var chartData = {
                labels: [
                    '포토샵｜웹',
                    '일러스트｜인쇄',
                    'HTML｜광고',
                    'CSS｜SNS',
                    'JS｜기획',
                ],        
                datasets: [{
                type: 'line',
                label: 'Skill',
                yAxisID: 'skill-line',
                borderColor: '#555',
                borderWidth: 1,
                fill: false,
                tension: 0.1,
                data:  [95,95,90,85,65,0],
                },{
                type: 'bar',
                label: 'Design',
                backgroundColor: 'skyblue',
                data:  [95,85,95,95,85,100],
                borderColor: 'white',
                borderWidth: 0,
                fill: false,
                }, {
                type: 'bar',
                label: 'Click',
                yAxisID: 'clk-bar',
                backgroundColor: '#36A2EB',
                data:  [1,2,3,4,5,100],
                borderWidth: 0,
                fill: false,
                }],

                
            };

            
            window.onload = function() {
            var skill = document.getElementById('myChart').getContext('2d');
            window.myMixedChart = new Chart(skill, {
                type: 'bar',
                data: chartData,
                options: {
                responsive: true,
                title: {
                display: true,
                text: '주간 차트'
                },
                tooltips: {
                mode: 'index',
                intersect: true
                },
                scales:{
                    yAxes: [{
                        display: true,
                        stacked: true,
                        scaleLabel: {
                        display: false,
                        labelString: 'design'
                        },
                        ticks: {
                        max: 100,
                        min: 1,
                        stepSize: 10
                        }
                    }, {
                        id: 'clk-bar',
                        display: false,
                        stacked: false,
                        scaleLabel: {
                        display: false,
                        labelString: 'ctr'
                        },
                        ticks: {
                        max: 100,
                        min: 1,
                        stepSize: 10
                        }
                    }, {
                        id: 'skill-line',
                        display: false,
                        stacked: false,
                        beginAtZero: true,
                        scaleLabel: {
                        display: true,
                        labelString: 'skill'
                        },
                        ticks: {
                        max: 100,
                        min: 1,
                        stepSize: 10
                        }
                        
                        }
                    ]
                }
                }
            });
            };

        </script>
        
        <script>
            $(function(){
                $("header #header_wrap h1 p span").css("background","url(../common/logo/ahn0_bn.png) no-repeat");   $("header #header_wrap h1 p span").css("background-size","contain");         
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
            
            
            $(function(){
                $('.slick-track').slick({
                    slide: 'div',		//슬라이드 되어야 할 태그 ex) div, li
                    infinite : true, 	//무한 반복 옵션	
                    slidesToShow : 1,		// 한 화면에 보여질 컨텐츠 개수
                    slidesToScroll : 1,		//스크롤 한번에 움직일 컨텐츠 개수
                    arrows : true, 		// 옆으로 이동하는 화살표 표시 여부
                    dots : false, 		// 스크롤바 아래 점으로 페이지네이션 여부
                    autoplay : true,			// 자동 스크롤 사용 여부
                    autoplaySpeed : 4000, 		// 자동 스크롤 시 다음으로 넘어가는데 걸리는 시간 (ms)
                    fade: true,
                    speed : 100,	 // 다음 버튼 누르고 다음 화면 뜨는데까지 걸리는 시간(ms)
                    //cssEase: 'ease-in-out',
                    touchThreshold: 100,
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
            })

            // slick 파괴
            $('#slider-div').slick("unslick");

            $('#slider-div').slick('slickRemove',0);	//특정 인덱스 번호에 있는 slider 삭제

            $('#slider-div').slick('slickRemove',false);	//false이면 맨 마지막 슬라이더 삭제
            $('#slider-div').slick('slickRemove',true);	// true이면 맨 앞 슬라이더 삭제

            $('#slider-div').slick('slickPlay');    // 시작
            
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