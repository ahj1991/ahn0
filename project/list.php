<?php
    session_start();
    include "../lib/dbconn.php";
    $table ="works";
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
        <title>Project｜Ahn0</title>
        <link rel="stylesheet" href="../css/common.css" type="text/css">
        <link rel="stylesheet" href="../css/common_sub.css" type="text/css">
        <link rel="stylesheet" href="../css/project.css" type="text/css">
        <link rel="stylesheet" href="../css/font.css" type="text/css">
        <link rel="stylesheet" href="../plugin/WOW-master/css/libs/animate.css" type="text/css">

        <link rel="shortcut icon" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/favicon.ico" type="image/x-icon" />
        <link rel="icon" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/favicon.ico" type="image/x-icon" />

    </head>
    <?php

        $year = $_GET['year'];
        $month = $_GET['month'];
        $day = $_GET['day'];

        $mode =$_GET['mode'];
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
    /*    if($mode=="select")
        {
            $name2=$_POST['name'];
            $sql = "select * from $table where id like '$name2' order by num desc";
        }*/
        else
        {
            $sql = "select * from $table order by num desc";
            $query = "SELECT * FROM images";
        }

        $result =mysqli_query($conn, $sql);
        $total_record =mysqli_num_rows($result);

        $pageNum = ($_GET['page']) ? $_GET['page'] : 1;
        /*$scale=1;*/
        $scale = ($_GET['list']) ? $_GET['list'] : 6; //page : default - 50

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

    ?>

    <body oncontextmenu="return false" ondragstart="return false" onselectstart="return false">
        <div id="wrap">
            <?
                include("../php/header.php");
            ?>
            <div id="project_container">
                <div id="content">
                    <div class="content_area">
                        <div class="gallery_title">
                            <div class="title h2">
                                <p>
                                    <span>Motivated solutions in each project</span>
                                </p>
                            </div>
                            <div class="text">
                                <div class="project_total" >
                                    <?= $total_record ?>
                                </div>
                                <div class="project_total_label">
                                    PROJECT
                                </div>
                                <p>
                                    <span>Ideas, different in scale and function, in meanings and characters,
                                        in goals and approaches. In each project we have solved a set of tasks: 
                                        from homepage potential to detailed development.
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div id="gallery_area">
                            <div id="list_area">
                                <div id="list_view">
                                    <?php
                                    for($i =$start; $i<$start+$scale && $i<$total_record; $i++)
                                    {
                                        mysqli_data_seek($result,$i);
                                        $row = mysqli_fetch_array($result);

                                        $item_num =$row['num'];
                                        $item_title =$row['subject'];
                                        $item_imgurl = "http://ahn0.dothome.co.kr/uploads/project/".$date_str.$row['userfile_01'];
                                      //이미지파일명대입
                                        $name = $row['upfile'];
                                        $item_date = $row['date'];
                                         $item_date = substr($item_date,0,8); //앞 10자리 추출
                                        $item_subject = str_replace(" ", "&nbsp;",$row['subject']);
                                    ?>
                                        <div id="list_content">
                                            <div id="data_area">
                                                <a href="view.php?table=<?=$table?>&num=<?=$item_num?>&page=<?=$page?>" style="background:url(<?= $item_imgurl ?>);">
                                                </a>
                                                <a href="view.php?table=<?=$table?>&num=<?=$item_num?>&page=<?=$page?>">
                                                    <div class="data_txt">
                                                        <p>
                                                            <span class="h4"><?= $item_title ?></span>
                                                            <span><?= $item_date ?></span>
                                                        </p>
                                                    </div>
                                                </a>
                                            </div>
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
                                                <p class="first_num_defult">
                                                    <span><img src="../common/icon/double-left-chevron.svg" alt="처음"></span>
                                                </p>
                                                <?}else{?>
                                                    <p class="first_num">
                                                        <a href="list.php?page=&scale=<?=$scale?>"><span><img src="../common/icon/double-left-chevron.svg" alt="처음"></span></a>
                                                    </p>
                                                <?}

                                            if($block <=1){?>
                                                <font> </font>
                                            <?}else{?>
                                                <p class="pre">
                                                    <a href="list.php?page=<?=$b_start_page-1?>&scale=<?=$scale?>"><span><img src="../common/icon/left-arrow.svg" alt="이전"></span></a>
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
                                                        <a href="list.php?page=<?=$j?>&scale=<?=$scale?>"><span><?=$j?></span></a>
                                                    </p>
                                                    <?
                                                }                

                                            }

                                            $total_block = ceil($total_page/$b_pageNum_list);

                                            if($block <= $total_block){?>
                                            <font> </font>
                                            <?}else{?>
                                                <p class="next">
                                                    <a href="list.php?page=<?=$b_end_page+1?>&scale=<?=$scale?>"><span><img src="../common/icon/right-arrow.svg" alt="다음"></span></a>
                                                </p>
                                            <?}
                                            if($pageNum >= $total_page){?>
                                                <p class="last_num_defult">
                                                    <span><img src="../common/icon/double-angle-pointing-to-right.svg" alt="마지막"></span>
                                                </p>
                                                <?}else{?>
                                                    <p class="last_num">
                                                        <a href="list.php?page=<?=$total_page?>&scale=<?=$scale?>"><span><img src="../common/icon/double-angle-pointing-to-right.svg" alt="마지막"></span></a>
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
                                        if($_SESSION['userid']==$item_id || $_SESSION['userlevel']==99)
                                        {
                                        ?>
                                        <a href="write.php?table=<?=$table?>&mode=<?=$mode?>&page=1&num="><span id="btn">글쓰기</span></a>
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
                            <div>
            <?
                include("../php/footer.php");
            ?>
            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <script src="../script/jQuery/jquery-3.6.0.min.js"></script>
        <script src="../script/jQuery/swiper.js"></script>
        <script src="../script/javascript/common.js"></script>
        <script src="../script/javascript/main.js"></script>
        <script src="../plugin/WOW-master/dist/wow.min.js"></script>
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









