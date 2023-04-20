<?php 
	session_start();
    
    $page =$_GET['page'];
    $mode =$_GET['mode'];
    $table="member";
    $num=$_GET['num'];

if($mode=="modify"){
    $sql="select * from $table where num=$num";
    $result =mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    
        $item_num =  $row['num'];

}

?>
<!DOCTYPE html>
<html lang="Ko">
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
        <link rel="stylesheet" href="../css/index.css" type="text/css">
        <link rel="stylesheet" href="../css/font.css" type="text/css">

        <link rel="shortcut icon" href="ahj1991.dothome.co.kr/favicon.ico" type="image/x-icon" />
        <link rel="icon" href="ahj1991.dothome.co.kr/favicon.ico" type="image/x-icon" />

    <style>
        @media all and (max-width:792px){
            #wrap #my_container{width:70%;}
        }
        @media all and (min-width:792px) and (max-width:1250px){
            #wrap #my_container{width:50%;}
        }
        @media all and (min-width:1250px) and (max-width:1660px){
            #wrap #my_container{width:30%;}
        }
        @media all and (min-width:1660px){

            #wrap #my_container{width:30%;}
        }
        
        #wrap #my_container #content{
            text-align:center;    
        }
        
        .my_title{
            margin-bottom:2rem;
            padding-bottom:2rem;
            border-bottom:1px solid #999;
        }
        .my_title .h3{
            color:#1c1c1c;
            text-align: center;
            margin-bottom:2rem;
        }
        
        .my_title .my_photo{
            background: #ccc;
            width:100px;
            height:100px;
            margin:0 auto;
        }
       
        #wrap #my_container{
            margin:0 auto;
            padding:9rem 0 ;
        }
        
       
    </style>
    </head>
    <body>        
        <div id="wrap">
            <div id="skipNav">
                <a href="#header_wrap">주메뉴 바로가기</a>
                <a href="#container">본문 바로가기</a>
                <a href="#footer">하단 바로가기</a>
            </div>
            <?
                include("../php/header.php");
            ?>
            <div id="my_container">
                <div id="content">
                    <div class="my_title">
                        <div class="h3">
                            <p>
                                <span>MY PAGE</span>
                            </p>
                        </div>
                        <div>
                            <div class="my_photo">
                                
                            </div>
                            <div>
                                <p>
                                    이름 + 님 환영합니다!
                                </p>
                            </div>
                            <div>
                                <p>
                                    정보수정
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="content_area">
                        <div class="content_main">
                            <!--컨텐츠 시작-->
                            <div class="content">
                                <div>
                                    <p>
                                        <a href="#">
                                            <span>장바구니</span>
                                        </a>
                                    </p>
                                </div>
                                <div>
                                    <p>
                                        <a href="#">
                                            <span>1:1문의</span>
                                        </a>
                                    </p>
                                </div>
                                <div>
                                    <p>
                                        <a href="#">
                                            <span>공지사항</span>
                                        </a>
                                    </p>
                                </div>
                                <div>
                                    <p>
                                        <a href="../login/logout.php"><span>로그아웃</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <script src="../script/jQuery/jquery-1.12.4.min.js"></script>
        <script src="../script/javascript/common.js"></script>

    </body>
</html>
