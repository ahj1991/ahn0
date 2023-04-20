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
            #wrap #cart_container{width:95%;}
        }
        @media all and (min-width:792px) and (max-width:1250px){
            #wrap #cart_container{width:90%;}
        }
        @media all and (min-width:1250px) and (max-width:1660px){
            #wrap #cart_container{width:80%;}
        }
        @media all and (min-width:1660px){

            #wrap #cart_container{width:75%;}
        }
        
        #wrap #my_container #content{
            text-align:center;    
        }
        
        .cart_title .h3{
            color:#1c1c1c;
            text-align: center;
            margin-bottom:2rem;
        }
       
        #wrap #cart_container{
            margin:0 auto;
            padding:9rem 0 ;
        }
        
        #cart_container #content .cart_wrap .all_check{
            padding-bottom:1rem;
            border-bottom:1px solid #000;
        }
        
        .cart_list{
            margin-bottom:2rem;
        }
        .cart_list ul{
            width:100%;
            padding:1rem 0;
            border-bottom:1px solid #e8e8ea;
        }
        .cart_list ul li{
            overflow: hidden;
        }
        
        .cart_list ul li>div{
            float:left;
        }
        .cart_list ul li>div:nth-child(1){
            width:5%;
        }
        .cart_list ul li>div:nth-child(2){
            width:20%;
        }
        .cart_list ul li>div:nth-child(3){
            width:41%;
        }
        .cart_list ul li>div:nth-child(4){
            width:17%;
        }
        .cart_list ul li>div:nth-child(5){
            width:17%;
        }
                
        .cart_list ul li div select{
            padding:0.5rem 1.5rem ;
            border:1px solid #ccc;
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
            <div id="cart_container">
                <div id="content">
                    <div class="cart_title">
                        <div class="h3">
                            <p>
                                <span>SHOPPING BAG</span>
                            </p>
                        </div>
                    </div>
                    <div class="cart_wrap">
                        <div class="cart_area">
                            <div class="all_check">
                                <div class="all_check_wrap">
                                    <input type="checkbox" id="CartAllCheck">
                                    <label for="CartAllCheck">
                                        <span>전체선택</span>
                                    </label>
                                </div>    
                            </div>
                            <div class="cart_list">
                                <ul>
                                    <li>
                                        <div>
                                            <input type="checkbox" id="CartListCheck">
                                        </div>
                                        <div>
                                            <div style="width:180px; height:180px; background:#000;">
                                                제품사진
                                            </div>
                                        </div>
                                        <div>
                                            <p class="h4">
                                                <span>
                                                    상품명
                                                </span>
                                            </p>
                                            <p class="displat_2">
                                                <span>
                                                    상품설명상품설명상품설명상품설명<br>
                                                    상품설명상품설명상품설명
                                                </span>
                                            </p>
                                        </div>
                                        <div>
                                            <select name="quantity" id="quantity">
                                                <option value="수량">수량 선택</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                            </select>
                                        </div>
                                        <div>
                                            <div>
                                                <input type="submit" value="주문하기" id="list_order">
                                            </div>
                                            <div>
                                                <input type="submit" value="삭제하기" id="list_delete">
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                
                            </div>
                            <div>
                                <div>
                                    <input type="submit" value="주문하기" id="order">
                                </div>
                                <div>
                                    <a href="#">쇼핑 계속하기</a>
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
