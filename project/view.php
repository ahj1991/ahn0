<?php
    /* 내용보기  */

    /*ini_set('allow_url_fopen','ON');*/
    session_start();
    /*include_once('../php/session.php');*/
    $table="works";
    $userid=$_SESSION['userid'];
    // get 방식 값전달 -  table,num,page 값전달
    $table=$_GET['table'];
    $num=$_GET['num'];
    $page=$_GET['page'];

    include "../lib/dbconn.php";
                                  //table=upload
    $sql ="select * from $table where num=$num";

    $result =mysqli_query($conn,$sql);
    $row =mysqli_fetch_array($result);

    $path="http://ahn0.dothome.co.kr/uploads/project/";

    $item_num =$row['num'];
    $item_client=$row['client'];
    $item_type=$row['type'];
    $item_concept=$row['concept'];
    $item_date=$row['date'];

    $image_url_01 =$path.$row['userfile_01'];
    $image_url_02 =$path.$row['userfile_02'];
    $image_url_03 =$path.$row['userfile_03'];
    $image_url_04 =$path.$row['userfile_04'];
    $image_url_05 =$path.$row['userfile_05'];
    $image_url_06 =$path.$row['userfile_06'];
    $image_url_07 =$path.$row['userfile_07'];
    $image_url_08 =$path.$row['userfile_08'];
    $image_url_09 =$path.$row['userfile_09'];
    $image_url_10 =$path.$row['userfile_10'];

    $item_content_01 =$row['contents_01'];
    $item_content_02 =$row['contents_02'];
    $item_content_03 =$row['contents_03'];
    $item_content_04 =$row['contents_04'];
    $item_content_05 =$row['contents_05'];
    $item_content_06 =$row['contents_06'];
    $item_content_07 =$row['contents_07'];
    $item_content_08 =$row['contents_08'];
    $item_content_09 =$row['contents_09'];
    $item_content_10 =$row['contents_10'];

    $item_subject =str_replace(" ","&nbsp;",$row['subject']);

    $item_content =$row['content'];
    $is_html =$row['is_html'];

    if($is_html !="y")
    {
        $item_content = str_replace(" ","&nbsp;",$item_content);
        $item_content = str_replace("\n","<br>",$item_content);
    }

    if($image_name)
    {
        /*$imageinfo =getimagesize("http://www.junlab.co.kr/uploads/project/design/".$image_name);

        $image_width=$imageinfo[0]; //가로
        $image_height=$imageinfo[1];//세로
        $image_type=$imageinfo[2];//유형

        if ($image_width > 785)
            $image_width =785; //이미지 가로길이 고정처리 */
    }
    else
    {
        /*$image_width="";
        $image_height="";
        $image_type="";*/
    }

    $new_hit =$item_hit +1;

    $sql ="update $table set hit=$new_hit where num=$num";
    mysqli_query($conn,$sql);

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
        <title>Project_view｜Ahn0</title>
        <link rel="stylesheet" href="../css/common.css" type="text/css">
        <link rel="stylesheet" href="../css/common_sub.css" type="text/css">
        <link rel="stylesheet" href="../css/font.css" type="text/css">
        <link rel="stylesheet" href="../css/project.css" type="text/css">
        
        <link rel="shortcut icon" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/favicon.ico" type="image/x-icon" />
        <link rel="icon" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/favicon.ico" type="image/x-icon" />

    </head>
    <body oncontextmenu="return false" ondragstart="return false" onselectstart="return false">
        <div id="wrap">
            <?
                include("../php/header.php");
            ?>
            <div id="project_view_container">
                <div id="content">
                    <div class="content_area">
                        <div id="view_area">
                            <div class="view_box">
                                <div id="view_info">
                                    <ul>
                                        <li>
                                            <p>
                                                <span class="label h5">Subject</span>
                                                <span class="h3"><?= $item_subject ?></span>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <span class="label h5">Client</span>
                                                <span class="display_2"><?= $item_client ?></span>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <span class="label h5">Type</span>
                                                <span class="display_2"><?= $item_type ?></span>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <span class="label h5">Concept</span>
                                                <span class="display_2"><?= $item_concept ?></span>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <span class="label h5">Date</span>
                                                <span class="display_2"><?= $item_date ?></span>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <div id="view_content">
                                    <div class="img">
                                        <?php

                                        echo "<img src='$image_url_01' alt='' onerror='this.src='../common/img.png''>";
                                    ?>
                                    </div>
                                    <div class="content"><?=$item_content_01 ?></div>
                                    <div class="img">
                                        <?php

                                        echo "<img src='$image_url_02' alt='' onerror='this.src='../common/img.png''>";
                                    ?>
                                    </div>
                                    <div class="content"><?=$item_content_02 ?></div>
                                    <div class="img">
                                        <?php

                                        echo "<img src='$image_url_03' alt='' onerror='this.src='../common/img.png''>";
                                    ?>
                                    </div>
                                    <div class="content"><?=$item_content_03 ?></div>
                                    <div class="img">
                                        <?php

                                        echo "<img src='$image_url_04' alt='' onerror='this.src='../common/img.png''>";
                                    ?>
                                    </div>
                                    <div class="content"><?=$item_content_04 ?></div>
                                    <div class="img">
                                        <?php

                                        echo "<img src='$image_url_05' alt='' onerror='this.src='../common/img.png''>";
                                    ?>
                                    </div>
                                    <div class="content"><?=$item_content_05 ?></div>
                                    <div class="img">
                                        <?php

                                        echo "<img src='$image_url_06' alt='' onerror='this.src='../common/img.png''>";
                                    ?>
                                    </div>
                                    <div class="content"><?=$item_content_06 ?></div>
                                    <div class="img">
                                        <?php

                                        echo "<img src='$image_url_07' alt='' onerror='this.src='../common/img.png''>";
                                    ?>
                                    </div>
                                    <div class="content"><?=$item_content_07 ?></div>
                                    <div class="img">
                                        <?php

                                        echo "<img src='$image_url_08' alt='' onerror='this.src='../common/img.png''>";
                                    ?>
                                    </div>
                                    <div class="content"><?=$item_content_08 ?></div>
                                    <div class="img">
                                        <?php

                                        echo "<img src='$image_url_09' alt='' onerror='this.src='../common/img.png''>";
                                    ?>
                                    </div>
                                    <div class="content"><?=$item_content_09 ?></div>
                                    <div class="img">
                                        <?php

                                        echo "<img src='$image_url_10' alt='' onerror='this.src='../common/img.png''>";
                                    ?>
                                    </div>
                                    <div class="content"><?=$item_content_10 ?></div>
                                </div>

                                <div id="view_button">
                                    <a href="list.php?table=<?=$table?>&mode=&page=<?=$page?>"><span id="btn">목록</span></a>
                                    <!-- 수정 / 삭제는 관리자와 계정사용자만 가능  -->  
                                    <?php
                                    if(!isset($_SESSION['userid'])){
                                    }else{
                                    if($_SESSION['userid']==$item_id || $_SESSION['userlevel']==99)
                                    {
                                    ?>
                                        <a href="write.php?table=<?=$table?>&mode=modify&num=<?=$num?>&page=<?=$page?>"><span id="btn">수정</span></a>
                                        <a href="javascript:del('delete.php?table=<?=$table?>&num=<?=$num?>')"><span id="btn">삭제</span></a>
                                        <a href="write.php?table=<?=$table?>&num=&mode=&page=1"><span id="btn">글쓰기</span></a>
                                    <?php
                                    }else{}
                                    ?>
                                    <!-- 글쓰기는 계정사용자만 가능 -->
                                    <?php
                                        if($userid=='admin'){
                                    ?>
                                    <a href="view.php?table=<?=$table?>&num=1"><span>다음 글</span></a>
                                    <?php
                                    }}
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- wrap end-->
        <script src="../script/jQuery/jquery-3.6.0.min.js"></script>
        <script src="../script/javascript/common.js"></script>
        <script>
            function del(href){
                if(confirm("삭제한 자료는 복구할수 없습니다.\n정말 삭제할까요?")){
                                    document.location.href=href;  //delete.php?table=upload&num=3
                }
        }
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
    </body>
</html>