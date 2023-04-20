<?php
    session_start();
    include "../lib/dbconn.php";
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
        <title>Project_write｜Ahn0</title>
        <link rel="stylesheet" href="../css/common.css" type="text/css">
        <link rel="stylesheet" href="../css/common_sub.css" type="text/css">
        <link rel="stylesheet" href="../css/project.css" type="text/css">
        <link rel="stylesheet" href="../css/font.css" type="text/css">
        <style>

            .file_area{margin: 0 0 30px 0}

            .board_btn{margin: 0 0 100px 0}
            .board_btn #btn{background: #000;color: #fff;padding:10px 25px}
            .board_btn #btn input{color: #fff;border:none;margin: 0;padding: 0}

        </style>
        <link rel="shortcut icon" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/favicon.ico" type="image/x-icon" />
        <link rel="icon" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/favicon.ico" type="image/x-icon" />
    </head>
    <body oncontextmenu="return false" ondragstart="return false" onselectstart="return false">
        <div id="wrap">
            <?
                include("../php/header.php");
            ?>
            <div id="project_write_container">
                <div id="content">
                    <div class="content_area">
                        <div class="content_title h3">PROJECT WRITE</div>
                        <?php
                            $page =$_GET['page'];
                            $mode =$_GET['mode'];
                            $table="works";
                            $num=$_GET['num'];
                            $url= $_GET['url'];
                            $path = "/uploads/project/". $FILES['upload']['name'];


                            if($mode=="modify"){
                                $sql="select * from $table where num=$num";
                                $result =mysqli_query($conn,$sql);
                                $row=mysqli_fetch_array($result);

                                $item_num =  $row['num'];
                                $item_subject =  $row['subject'];
                                $item_content =  $row['content'];

                                $item_subject=$row['subject'];
                                $item_client=$row['client'];
                                $item_type=$row['type'];
                                $item_concept=$row['concept'];
                                $item_date=$row['date'];

                                $item_contents_01=$row['contents_01'];
                                $item_contents_02=$row['contents_02'];
                                $item_contents_03=$row['contents_03'];
                                $item_contents_04=$row['contents_04'];
                                $item_contents_05=$row['contents_05'];
                                $item_contents_06=$row['contents_06'];
                                $item_contents_07=$row['contents_07'];
                                $item_contents_08=$row['contents_08'];
                                $item_contents_09=$row['contents_09'];
                                $item_contents_10=$row['contents_10'];

                                $item_userfile_01=$row['userfile_01'];
                                $item_userfile_02=$row['userfile_02'];
                                $item_userfile_03=$row['userfile_03'];
                                $item_userfile_04=$row['userfile_04'];
                                $item_userfile_05=$row['userfile_05'];
                                $item_userfile_06=$row['userfile_06'];
                                $item_userfile_07=$row['userfile_07'];
                                $item_userfile_08=$row['userfile_08'];
                                $item_userfile_09=$row['userfile_09'];
                                $item_userfile_10=$row['userfile_10'];

                                $item_html =  $row['is_html'];
                            }

                            if($mode=="modify") {
                            ?>
                            <div class="upload_form">
                                <form method="post" action="insert.php?mode=modify&num=<?=$item_num?>&page=<?=$page?>&table=<?=$table?>" enctype="multipart/form-data" name="smartEditorText">
                                    <div class="title">
                                        <label for="subject">
                                            <p>
                                                <span>Title</span>
                                            </p>
                                        </label>

                                        <input type="checkbox" name="html_ok" value="y">html 쓰기

                                        <ul>
                                            <li><input type="text" name="subject" placeholder="제목" value="<?=$item_subject ?>"></li>
                                            <li><input type="text" name="client" placeholder="클라이언트" value="<?=$item_client ?>"></li>
                                            <li><input type="text" name="type" placeholder="타입" value="<?=$item_type ?>"></li>
                                            <li><input type="text" name="concept" placeholder="컨셉" value="<?=$item_concept ?>"></li>
                                            <li><input type="text" name="date" placeholder="날짜" value="<?=$item_date ?>"></li>
                                        </ul>
                                    </div>
                                    <div class="contents_area">
                                        <label for="contents_01">
                                            <p>
                                                <span>CONTENT_01</span>
                                            </p>
                                        </label>
                                        <textarea name="contents_01" id="contents_01" rows="12" cols="105" value="<?=$item_contents_01?>"></textarea>
                                    </div>
                                    <div class="file_area">
                                        <input type="hidden" name="MAX_FILE_SIZE" value="5000000">
                                        <label for="userfile">
                                            <p>
                                                <span>FILE_01 : </span>
                                            </p>
                                        </label>
                                        <div class="file_box">
                                            <input type="file" name="upfile[]" value="<?=$item_userfile_01?>"> 
                                        </div>
                                    </div>
                                    <div class="contents_area">
                                        <label for="contents_02">
                                            <p>
                                                <span>CONTENT_02</span>
                                            </p>
                                        </label>
                                        <textarea name="contents_02" id="contents_02" rows="12" cols="105" value="<?=$item_contents_02?>"></textarea>
                                    </div>
                                    <div class="file_area">
                                        <input type="hidden" name="MAX_FILE_SIZE" value="5000000">
                                        <label for="userfile">
                                            <p>
                                                <span>FILE_02 : </span>
                                            </p>
                                        </label>
                                        <div class="file_box">
                                            <input type="file" name="upfile[]" value="<?=$item_userfile_02?>"> 
                                        </div>
                                    </div>
                                    <div class="contents_area">
                                        <label for="contents_03">
                                            <p>
                                                <span>CONTENT_03</span>
                                            </p>
                                        </label>
                                        <textarea name="contents_03" id="contents_03" rows="12" cols="105" value="<?=$item_contents_03?>"></textarea>
                                    </div>
                                    <div class="file_area">
                                        <input type="hidden" name="MAX_FILE_SIZE" value="5000000">
                                        <label for="userfile">
                                            <p>
                                                <span>FILE_03 : </span>
                                            </p>
                                        </label>
                                        <div class="file_box">
                                            <input type="file" name="upfile[]" value="<?=$item_userfile_03?>"> 
                                        </div>
                                    </div>
                                    <div class="contents_area">
                                        <label for="contents_04">
                                            <p>
                                                <span>CONTENT_04</span>
                                            </p>
                                        </label>
                                        <textarea name="contents_04" id="contents_04" rows="12" cols="105" value="<?=$item_contents_04?>"></textarea>
                                    </div>
                                    <div class="file_area">
                                        <input type="hidden" name="MAX_FILE_SIZE" value="5000000">
                                        <label for="userfile">
                                            <p>
                                                <span>FILE_04 : </span>
                                            </p>
                                        </label>
                                        <div class="file_box">
                                            <input type="file" name="upfile[]" value="<?=$item_userfile_04?>"> 
                                        </div>
                                    </div>
                                    <div class="contents_area">
                                        <label for="contents_05">
                                            <p>
                                                <span>CONTENT_05</span>
                                            </p>
                                        </label>
                                        <textarea name="contents_05" id="contents_05" rows="12" cols="105" value="<?=$item_contents_05?>"></textarea>
                                    </div>
                                    <div class="file_area">
                                        <input type="hidden" name="MAX_FILE_SIZE" value="5000000">
                                        <label for="userfile">
                                            <p>
                                                <span>FILE_05 : </span>
                                            </p>
                                        </label>
                                        <div class="file_box">
                                            <input type="file" name="upfile[]" value="<?=$item_userfile_05?>"> 
                                        </div>
                                    </div>
                                    <div class="contents_area">
                                        <label for="contents_06">
                                            <p>
                                                <span>CONTENT_06</span>
                                            </p>
                                        </label>
                                        <textarea name="contents_06" id="contents_06" rows="12" cols="105" value="<?=$item_contents_06?>"></textarea>
                                    </div>
                                    <div class="file_area">
                                        <input type="hidden" name="MAX_FILE_SIZE" value="5000000">
                                        <label for="userfile">
                                            <p>
                                                <span>FILE_06 : </span>
                                            </p>
                                        </label>
                                        <div class="file_box">
                                            <input type="file" name="upfile[]" value="<?=$item_userfile_06?>"> 
                                        </div>
                                    </div>
                                    <div class="contents_area">
                                        <label for="contents_07">
                                            <p>
                                                <span>CONTENT_07</span>
                                            </p>
                                        </label>
                                        <textarea name="contents_07" id="contents_07" rows="12" cols="105" value="<?=$item_contents_07?>"></textarea>
                                    </div>
                                    <div class="file_area">
                                        <input type="hidden" name="MAX_FILE_SIZE" value="5000000">
                                        <label for="userfile">
                                            <p>
                                                <span>FILE_07 : </span>
                                            </p>
                                        </label>
                                        <div class="file_box">
                                            <input type="file" name="upfile[]" value="<?=$item_userfile_07?>"> 
                                        </div>
                                    </div>
                                    <div class="contents_area">
                                        <label for="contents_08">
                                            <p>
                                                <span>CONTENT_08</span>
                                            </p>
                                        </label>
                                        <textarea name="contents_08" id="contents_08" rows="12" cols="105" value="<?=$item_contents_08?>"></textarea>
                                    </div>
                                    <div class="file_area">
                                        <input type="hidden" name="MAX_FILE_SIZE" value="5000000">
                                        <label for="userfile">
                                            <p>
                                                <span>FILE_08 : </span>
                                            </p>
                                        </label>
                                        <div class="file_box">
                                            <input type="file" name="upfile[]" value="<?=$item_userfile_08?>"> 
                                        </div>
                                    </div>
                                    <div class="contents_area">
                                        <label for="contents_09">
                                            <p>
                                                <span>CONTENT_09</span>
                                            </p>
                                        </label>
                                        <textarea name="contents_09" id="contents_09" rows="12" cols="105" value="<?=$item_contents_09?>"></textarea>
                                    </div>
                                    <div class="file_area">
                                        <input type="hidden" name="MAX_FILE_SIZE" value="5000000">
                                        <label for="userfile">
                                            <p>
                                                <span>FILE_09 : </span>
                                            </p>
                                        </label>
                                        <div class="file_box">
                                            <input type="file" name="upfile[]" value="<?=$item_userfile_09?>"> 
                                        </div>
                                    </div>
                                    <div class="contents_area">
                                        <label for="contents_10">
                                            <p>
                                                <span>CONTENT_10</span>
                                            </p>
                                        </label>
                                        <textarea name="contents_10" id="contents_10" rows="12" cols="105" value="<?=$item_contents_10?>"></textarea>
                                    </div>
                                    <div class="file_area">
                                        <input type="hidden" name="MAX_FILE_SIZE" value="5000000">
                                        <label for="userfile">
                                            <p>
                                                <span>FILE_10 : </span>
                                            </p>
                                        </label>
                                        <div class="file_box">
                                            <input type="file" name="upfile[]" value="<?=$item_userfile_10?>"> 
                                        </div>
                                    </div>
                                    <div class="board_btn">
                                        <a href="list.php?table=<?=$table?>&page=<?=$page?>">
                                            <span id="btn">목록</span>
                                        </a>
                                        <a href="list.php?table=<?=$table?>&page=<?=$page?>">
                                            <span id="btn"><input type="submit" value="수정"></span>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        <?php
                        } 
                        else 
                        {
                        ?>
                        <div class="upload_form">
                            <form action="insert.php" method="post" enctype="multipart/form-data" name="smartEditorText">
                                <div class="title">
                                    <label for="subject">
                                        <p>
                                            <span>Title</span>
                                        </p>
                                    </label>

                                    <input type="checkbox" name="html_ok" value="y">html 쓰기

                                    <ul>
                                        <li><input type="text" name="subject" placeholder="제목"></li>
                                        <li><input type="text" name="client" placeholder="클라이언트"></li>
                                        <li><input type="text" name="type" placeholder="타입"></li>
                                        <li><input type="text" name="concept" placeholder="컨셉"></li>
                                        <li><input type="text" name="date" placeholder="날짜"></li>
                                    </ul>
                                </div>
                                <div class="contents_area">
                                    <label for="contents_01">
                                        <p>
                                            <span>CONTENT_01</span>
                                        </p>
                                    </label>
                                    <textarea name="contents_01" id="contents_01" rows="12" cols="105"></textarea>
                                </div>
                                <div class="file_area">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="5000000">
                                    <label for="userfile">
                                        <p>
                                            <span>FILE_01 : </span>
                                        </p>
                                    </label>
                                    <div class="file_box">
                                        <input type="file" name="upfile[]">
                                    </div>
                                </div>
                                <div class="contents_area">
                                    <label for="contents_02">
                                        <p>
                                            <span>CONTENT_02</span>
                                        </p>
                                    </label>
                                    <textarea name="contents_02" id="contents_02" rows="12" cols="105"></textarea>
                                </div>
                                <div class="file_area">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="5000000">
                                    <label for="userfile">
                                        <p>
                                            <span>FILE_02 : </span>
                                        </p>
                                    </label>
                                    <div class="file_box">
                                        <input type="file" name="upfile[]">
                                    </div>
                                </div>
                                <div class="contents_area">
                                    <label for="contents_03">
                                        <p>
                                            <span>CONTENT_03</span>
                                        </p>
                                    </label>
                                    <textarea name="contents_03" id="contents_03" rows="12" cols="105"></textarea>
                                </div>
                                <div class="file_area">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="5000000">
                                    <label for="userfile">
                                        <p>
                                            <span>FILE_03 : </span>
                                        </p>
                                    </label>
                                    <div class="file_box">
                                        <input type="file" name="upfile[]">
                                    </div>
                                </div>
                                <div class="contents_area">
                                    <label for="contents_04">
                                        <p>
                                            <span>CONTENT_04</span>
                                        </p>
                                    </label>
                                    <textarea name="contents_04" id="contents_04" rows="12" cols="105"></textarea>
                                </div>
                                <div class="file_area">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="5000000">
                                    <label for="userfile">
                                        <p>
                                            <span>FILE_04 : </span>
                                        </p>
                                    </label>
                                    <div class="file_box">
                                        <input type="file" name="upfile[]">
                                    </div>
                                </div>
                                <div class="contents_area">
                                    <label for="contents_05">
                                        <p>
                                            <span>CONTENT_05</span>
                                        </p>
                                    </label>
                                    <textarea name="contents_05" id="contents_05" rows="12" cols="105"></textarea>
                                </div>
                                <div class="file_area">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="5000000">
                                    <label for="userfile">
                                        <p>
                                            <span>FILE_05 : </span>
                                        </p>
                                    </label>
                                    <div class="file_box">
                                        <input type="file" name="upfile[]">
                                    </div>
                                </div>
                                <div class="contents_area">
                                    <label for="contents_06">
                                        <p>
                                            <span>CONTENT_06</span>
                                        </p>
                                    </label>
                                    <textarea name="contents_06" id="contents_06" rows="12" cols="105"></textarea>
                                </div>
                                <div class="file_area">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="5000000">
                                    <label for="userfile">
                                        <p>
                                            <span>FILE_06 : </span>
                                        </p>
                                    </label>
                                    <div class="file_box">
                                        <input type="file" name="upfile[]">
                                    </div>
                                </div>
                                <div class="contents_area">
                                    <label for="contents_07">
                                        <p>
                                            <span>CONTENT_07</span>
                                        </p>
                                    </label>
                                    <textarea name="contents_07" id="contents_07" rows="12" cols="105"></textarea>
                                </div>
                                <div class="file_area">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="5000000">
                                    <label for="userfile">
                                        <p>
                                            <span>FILE_07 : </span>
                                        </p>
                                    </label>
                                    <div class="file_box">
                                        <input type="file" name="upfile[]">
                                    </div>
                                </div>
                                <div class="contents_area">
                                    <label for="contents_08">
                                        <p>
                                            <span>CONTENT_08</span>
                                        </p>
                                    </label>
                                    <textarea name="contents_08" id="contents_08" rows="12" cols="105"></textarea>
                                </div>
                                <div class="file_area">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="5000000">
                                    <label for="userfile">
                                        <p>
                                            <span>FILE_08 : </span>
                                        </p>
                                    </label>
                                    <div class="file_box">
                                        <input type="file" name="upfile[]">
                                    </div>
                                </div>
                                <div class="contents_area">
                                    <label for="contents_09">
                                        <p>
                                            <span>CONTENT_09</span>
                                        </p>
                                    </label>
                                    <textarea name="contents_09" id="contents_09" rows="12" cols="105"></textarea>
                                </div>
                                <div class="file_area">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="5000000">
                                    <label for="userfile">
                                        <p>
                                            <span>FILE_09 : </span>
                                        </p>
                                    </label>
                                    <div class="file_box">
                                        <input type="file" name="upfile[]">
                                    </div>
                                </div>
                                <div class="contents_area">
                                    <label for="contents_10">
                                        <p>
                                            <span>CONTENT_10</span>
                                        </p>
                                    </label>
                                    <textarea name="contents_10" id="contents_10" rows="12" cols="105"></textarea>
                                </div>
                                <div class="file_area">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="5000000">
                                    <label for="userfile">
                                        <p>
                                            <span>FILE_10 : </span>
                                        </p>
                                    </label>
                                    <div class="file_box">
                                        <input type="file" name="upfile[]">
                                    </div>
                                </div>
                                <div class="board_btn">
                                    <a href="list.php?table=<?=$table?>&page=<?=$page?>">
                                        <span id="btn">목록</span>
                                    </a>
                                    <a href="list.php?table=<?=$table?>&page=<?=$page?>">
                                        <span id="btn"><input type="submit" value="저장"></span>
                                    </a>
                                </div>
                            </form>
                        </div>
                        <?php
                            } 
                        ?>
                    </div>
                </div>
            </div>

        </div>
        <script src="../script/jQuery/jquery-1.12.4.min.js"></script>
        <script src="../SmartEditor/js/service/HuskyEZCreator.js" charset="utf-8"></script>
        <script src="../script/javascript/common.js"></script>

        <script type="text/javascript">
            var oEditors = [];

                //Editor Setting
                nhn.husky.EZCreator.createInIFrame({ oAppRef : oEditors,
                    elPlaceHolder : "contents", //에디터를 적용할 textarea ID에 맞게 변경
                    sSkinURI : "../SmartEditor/SmartEditor2Skin.html", //Editor HTML파일 위치로 변경
                    fCreator : "createSEditor2", //SE2BasicCreator.js 메소드명으로 변경하면 안된다.
                    htParams : { //툴바 사용 여부 (true/false)
                        bUseToolbar : true, //입력창 크기 조절바 사용 여부 (true/false)
                        bUseVerticalResizer : true, //모드 탭(Editor|HTML|TEXT) 사용 여부 (true/false)
                        bUseModeChanger : true //전송버튼 클릭 이벤트
                    }

                });
            function submitContents(){
                //에디터의 내용이 textarea에 적용
                oEditors.getById["contents"].exec("UPDATE_CONTENTS_FIELD", []);
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










