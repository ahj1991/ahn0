<?php
    session_start();
    $table ="story";
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
        <title>Design｜Ahn0</title>
        <link rel="stylesheet" href="../css/common.css" type="text/css">
        <link rel="stylesheet" href="../css/common_sub.css" type="text/css">
        <link rel="stylesheet" href="../css/font.css" type="text/css">
        <link rel="stylesheet" href="../css/story_list.css" type="text/css">
        <link rel="stylesheet" href="../plugin/WOW-master/css/libs/animate.css" type="text/css">
        
        <link rel="shortcut icon" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/favicon.ico" type="image/x-icon" />
        <link rel="icon" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/favicon.ico" type="image/x-icon" />
    </head>
    <?php
        include "../lib/dbconn.php";
        $year = $_GET['year'];
        $month = $_GET['month'];
        $day = $_GET['day'];
        $mode =$_GET['mode'];
        $num=$_GET['num'];
        $log=$_Get['log'];
        $table ="story";


        if($mode=="type")
        {
            $find=$_POST['btn'];
            if($find=="all"){
                $sql = "select * from $table order by num desc";
            }else{
                    $sql = "select * from $table where categorie = '$find' order by num desc";
            }
        }
        else
        {
            $sql = "select * from $table order by num desc";
            $query = "SELECT * FROM images";
        }


        if($mode=="search")
        {
            $find=$_POST['find'];
            $search=$_POST['search'];
            if(!$search)
            {
                print "<script>
                    window.alert('검색어를 입력해주세요!');
                    history.go(-1);
                    </script>";
                    exit;
            }
            $sql = "select * from $table where $find like '%$search%' order by num desc";
        }
        else
        {
            $sql = "select * from $table order by num desc";
            $query = "SELECT * FROM images";
        }
        if($mode=="select")
        {
            $find=$_POST['btn'];
            $sql = "select * from $table where category like '%$find%' order by num desc";
        }
    

        $result =mysqli_query($conn, $sql);
        $total_record =mysqli_num_rows($result);

        $pageNum = ($_GET['page']) ? $_GET['page'] : 1;
        /*$scale=1;*/
        $scale = ($_GET['list']) ? $_GET['list'] : 150; //page : default - 50

        $limit = ($page - 1) * $scale;

        $b_pageNum_list = 5; //b는 block의 약자라고 생각하시면 됩니다. 블럭에 나타낼 페이지 번호 갯수 입니다. 
        $block = ceil($pageNum/$b_pageNum_list); //현재 리스트의 블럭을 구하는 식 입니다. 

        $b_start_page = ( ($block - 1) * $b_pageNum_list ) + 1; //현재 블럭에서 시작페이지 번호
        $b_end_page = $b_start_page + $b_pageNum_list - 1; //현재 블럭에서 마지막 페이지 번호

        $total_page = ceil( $total_record / $scale ); // $total_count는 글의 총 갯수이므로 게시판 db에서 count(*) 쿼리로 계산해주시면 됩니다.

        if ($b_end_page > $total_page) 
            $b_end_page = $total_page;

        $start = ($pageNum - 1) * $scale;

    /*    while($data = mysqli_fetch_array($result)){

            echo '<li style=\'float:left; margin: 2px;\'>';
            echo '<img src='.$data['imgurl'].' width=200><br>';
            echo ($data['filename']);
            echo '</li>';
        }*/
        function getImageData($imgLink)
        {

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $imgLink);

        // referer는 적당히 연구해서 속일 것. 비워도 되는 경우도 있음.

        curl_setopt($curl, CURLOPT_REFERER, ''); 
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $img = curl_exec($curl);
        curl_close($curl);
        return base64_encode($img);    

        }

        function getHeader($img)
        {
            $extArr = array(
                'jpg' => 'image/jpg',
                'gif' => 'image/gif',
                'bmp' => 'image/bmp',
                'png' => 'image/png'
            );

            $ext = strtolower(substr($img, strrpos($img, '.')+1));

            return $extArr[$ext];
        }
    ?>
    <body oncontextmenu="return false" ondragstart="return false" onselectstart="return false">
        <div id="wrap">
            <div id="blind"></div>
            <?
                include("../php/header.php");
            ?>
            <div id="story_container">
                <div id="content" class="story_list">
                    <div class="content_vis">
                        <div class="text_area">
                            <p class="content_title">
                                <span class="title h2">Design</span>
                            </p>
                            <p class="content_subtitle">
                                <span class="sub_title">Ahn0 is the heart of the design community and is the best resource to discover</span>
                                <span>and connect with a variety of design tasks and design trends.</span>
                            </p>
                            <div class="content_btn">
                                <a href="../sub/contact.php">
                                    <p class="btn_anibox">
                                        <span class="btn_text">Contact</span>
                                        <span class="btn_bg"></span>
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="content_nav">
                        <div class="content_navarea">
                            <form action="list.php?mode=type" method="post">
                                <ul class="categorie_btn">
                                    <li>
                                        <label for="all">ALL</label>
                                        <span><input type="submit" name="btn" id="all" value="all"></span>
                                    </li>
                                    <li>
                                        <label for="ad">광고 디자인</label>
                                        <span><input type="submit" name="btn" id="ad" value="ad"></span>
                                    </li>
                                    <li>
                                        <label for="sns">SNS 디자인</label>
                                        <span><input type="submit" name="btn" id="sns" value="sns"></span>
                                    </li>
                                    <li>
                                        <label for="print">인쇄 디자인</label>
                                        <span><input type="submit" name="btn" id="print" value="print"></span>                                
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>
                    <div class="content_area">
                        <div id="design_area">
                            <div id="list_area">
                                <!--  검색폼 -->
                                <form  name="board_form" method="post" action="list.php?mode=search&page=<?=$page?>">	
                                    <div id="search_area">
                                        <div id="list_select">
                                            <select name="find">
                                                <option value='subject'>제목</option>
                                                <option value='id'>작성자</option>
                                            </select>
                                        </div>
                                        <div id="list_search">
                                            <div id="search_box">
                                                <input type="text" id="search" name="search" title="검색어입력" placeholder="검색어를 입력하세요." autocomplete="off">
                                            </div>
                                            <div class="btn">
                                                <input id="search_btn" type="submit" value="조회" title="조회">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- 폼양식 끝 -->
                                <div id="list_view">
                                    <?php

                                    for($i =$start; $i<$start+$scale && $i<$total_record; $i++)
                                    {
                                        mysqli_data_seek($result,$i);
                                        $row = mysqli_fetch_array($result);

                                        $item_num =$row['num'];
                                        $item_id = $row['id'];
                                        $item_name = $row['name'];
                                        $item_subject = $row['subject'];
                                        $hash_url = $row['name_save'];
                                    //이미지파일명대입
                                        $name = $row['name_save'];
                                        $item_hit = $row['hit'];
                                        $item_date = $row['regist_day'];
                                        $item_date = substr($item_date,0,10); //앞 10자리 추출
                                        $item_subject = str_replace(" ", "&nbsp;",$row['subject']);

                                        $img = 'ahn0.dothome.co.kr/uploads/story/'.$hash_url;
                                        // base64 데이터 가져오기
                                        $imgBase64 = getImageData($img);
                                        // mime type 가져오기
                                        $imgData     = getHeader($img);

                                    ?>
                                    <div id="list_content">
                                        <a href="view.php?table=<?=$table?>&num=<?=$item_num?>&page=<?=$page?>">
                                            <div id="data_area">
                                                <div class="data_vis">
                                                    <?php
                                                        echo '<img src="data:'.$imgData.';base64,'.$imgBase64.'" />';
                                                    ?>
                                                    
                                                </div>
                                                <div class="data_txt">
                                                    <div class="data_title h4">
                                                        <p>
                                                            <span><?= $item_subject ?></span>
                                                        </p>
                                                    </div>
                                                    <div class="data_left">
                                                        <p>
                                                            <span><?= $item_id ?></span>
                                                        </p>
                                                    </div>
                                                    <div class="data_right">
                                                        <p>
                                                            <span>조회 <?= $item_hit ?></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php
                                $number--;
                                 }  //for end
                                ?>
                                </div>
                            </div>
                            <div id="btn_area">
                                <div id="list_num_area">
                                    <div id="list_num">
                                    <?php

                                        if($pageNum <= 1){?>
                                            <p class="pre">
                                                <span><img src="../common/icon/double-left-chevron.svg" alt="처음"></span>
                                            </p>
                                        <?}else{?>
                                            <p class="pre">
                                                <span><a href="list.php?page=&scale=<?=$scale?>"><img src="../common/icon/double-left-chevron.svg" alt="처음"></a></span>
                                            </p>
                                        <?}

                                        if($block <=1){?>
                                            <font> </font>
                                        <?}else{?>
                                            <p>
                                                <span><a href="list.php?page=<?=$b_start_page-1?>&scale=<?=$scale?>"><img src="../common/icon/left-arrow.svg" alt="이전"></a></span>
                                            </p>
                                        <?}

                                        for($j = $b_start_page; $j <=$b_end_page; $j++)
                                        {

                                            if($pageNum == $j)
                                            {?>
                                                <p class="select_num">
                                                    <span><?=$j?></span>
                                                </p>
                                            <?}
                                            else{?>
                                                <p>
                                                    <span><a href="list.php?page=<?=$j?>&scale=<?=$scale?>"><?=$j?></a></span>
                                                </p>
                                                <?
                                                }                

                                        }

                                        $total_block = ceil($total_page/$b_pageNum_list);

                                        if($block >= $total_block){?>
                                        <font> </font>
                                        <?}else{?>
                                            <p>
                                                <span><a href="list.php?page=<?=$b_end_page+1?>&scale=<?=$scale?>"><img src="../common/icon/right-arrow.svg" alt="다음"></a></span>
                                            </p>
                                        <?}
                                        if($pageNum >= $total_page){?>
                                            <p>
                                                <span><img src="../common/icon/double-angle-pointing-to-right.svg" alt="마지막"></span>
                                            </p>
                                            <?}else{?>
                                                <p>
                                                    <span><a href="list.php?page=<?=$total_page?>&scale=<?=$scale?>"><img src="../common/icon/double-angle-pointing-to-right.svg" alt="마지막"></a></span>
                                                </p>
                                            <?}
                                        ?>
                                    </div>
                                </div>

                                <?php
                                if(!isset($_SESSION['userid'])){
                                }else{
                                ?>
                                <div class="board_btn">
                                    <?php 
                                    if($_SESSION['userid']==$item_id || $_SESSION['userlevel']==99){
                                    
                                    ?>
                                    <a href="list.php?table=<?=$table?>&mode=<?=$mode?>&page=<?=$page?>">
                                        <p class="btn_boardbox">
                                            <span class="btn_boardtext">목록</span>
                                            <span class="btn_boardbg"></span>
                                        </p>
                                    </a>
                                    
                                    <a href="write.php?table=<?=$table?>&mode=<?=$mode?>&page=1&num=">
                                        <p class="btn_boardbox">
                                            <span class="btn_boardtext">글쓰기</span>
                                            <span class="btn_boardbg"></span>
                                        </p>
                                    </a>
                                    <?php
                                        }else
                                        {
                                            /*$_SESSION['userid']="guest";
                                            print "[권한없음]";*/
                                        }
                                    ?>
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?
                include("../php/footer.php");
                ?>
            </div>
        </div>
        
        <script src="../script/jQuery/jquery-3.6.0.min.js"></script>
        <script src="../script/javascript/common.js"></script>
        <script src="../script/javascript/main.js"></script>

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









