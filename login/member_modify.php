<?php
    /*header('Content-Type: text/html; charset=UTF-8');
    if ( !preg_match("/".$_SERVER['HTTP_HOST']."/i", $_SERVER['HTTP_REFERER']) ){
        echo "<script>
            alert('잘못된 접근입니다.');
            history.go(-1);
        </script>";
    exit;
    }*/

    session_start();
    include "../lib/dbconn.php";

    $mode = "modify";
    $table = "member";
?>
<!DOCTYPE HTML>
<html lang="ko">
    <head>
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
        <link rel="stylesheet" href="../css/sub_page.css" type="text/css">
        <link rel="stylesheet" href="../css/font.css" type="text/css">
        
        <link rel="shortcut icon" href="ahn0.dothome.co.kr/favicon.ico" type="image/x-icon" />
        <link rel="icon" href="ahn0.dothome.co.kr/favicon.ico" type="image/x-icon" />
        <script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
    </head>
    <?php
        include "../lib/dbconn.php";

        $userid=$_SESSION['userid'];
        $username=$_SESSION['username'];
        $hp=$_SESSION['hp'];
        $email=$_SESSION['email'];
        $company=$_SESSION['company'];
        $post=$_SESSION['post'];
        $address1=$_SESSION['address1'];
        $address2=$_SESSION['address2'];

        $sql = "select * from member where id='$userid'";
        $sql2 = "select * from member where id='$username'";

        $hp = $row['hp'];
        $email = $row['email'];

        $company= $row['company'];
        $post= $row['post'];
        $address1= $row['address1'];
        $address2= $row['address2'];

        $result = mysqli_query($conn,$sql);
        $result2 = mysqli_query($conn,$sql2);
        $row = mysqli_fetch_array($result);
        $row2 = mysqli_fetch_array($result2);

        mysqli_close($conn);
    ?>
    <body>
    <?php
    if(!isset($_SESSION['userid'])){
    ?><?php
    }else{
    ?>
        <div id="wrap">
            <?
            include ("../php/header.php");
            ?>
            
            <div id="modify_container">
                <div id="content">
                    <div class="member_title">
                        <div class="h3">
                            <p>
                                <span>
                                    MY PAGE
                                </span>
                            </p>
                        </div>
                        <div class="text_area">
                            <div class="modify_nav h5">
                                <div>
                                    <a href="#">DASHBOARD</a>
                                </div>
                                <div>
                                    <a href="member_modify.php" class="nav_action">회원정보 수정</a>
                                </div>
                                <div>
                                    <a href="password_modify.php">비밀번호 변경</a>
                                </div>
                                <div>
                                    <a href="../contact/write.php">1:1 문의하기</a>
                                </div>
                                <?php 
                                    if($_SESSION['userid']==$item_id || $_SESSION['userlevel']==99)
                                    {
                                ?>
                                <div>
                                    <a href="../contact/list.php">CONTACT LIST</a>
                                </div>
                                <?php
                                    }else{
                                        /*$_SESSION['userid']="guest";
                                        print "[권한없음]";*/
                                    }
                                ?>
                                <div>
                                    <a href="logout.php">LOG OUT</a>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="content_area">
                        <div class="content_inner">
                            <form name="modify_form" method="post" action="modify.php?mode=modify"> 
                                <div id="form_join">
                                    <div id="form_insert">
                                        <div class="form_title">
                                            <p class="h3">
                                                <span>
                                                    회원정보수정
                                                </span>
                                            </p>
                                        </div>
                                        <div id="form_area">
                                            <ul>
                                                <li class="id_form">
                                                    <label class="h5" for="id">아이디</label>
                                                    <div class="form_fixed">
                                                        <p>
                                                            <span><?= $row['id'] ?></span>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="name_form">
                                                    <label class="h5" for="name">이름</label>
                                                    <div class="form_fixed">
                                                        <p>
                                                            <span><?= $row['name'] ?></span>
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div id="form_area">
                                            <ul>
                                                <li class="hp_form">
                                                    <label class="h5" for="hp">연락처<em>*</em></label>
                                                    <input type="text" name="hp" placeholder="연락가능한 연락처를 작성해주세요." title="연락처입력" value="<?= $row['hp'] ?>">
                                                </li>
                                                <li class="email_form">
                                                    <label class="h5" for="email">이메일<em>*</em></label>
                                                    <input type="text" id="email" name="email" placeholder="@형식의 이메일 주소를 입력해주세요" value="<?= $row['email'] ?>">
                                                </li>
                                                <li class="company_form">
                                                    <label for="company" class="display_1">회사명</label>
                                                    <input class="display_2" type="text" id="company" name="company" class="display_2 " value="<?= $row['company'] ?>">
                                                </li>
                                                <li class="post_form post_group">
                                                    <label for="post" class="display_1">우편번호</label>
                                                    <input class="display_2" type="text" name="post" id="sample6_postcode" placeholder="우편번호" value="<?= $row['post'] ?>" onclick="sample6_execDaumPostcode()" readonly>
                                                    <input class="post_btn" type="button" value="우편번호검색" onclick="sample6_execDaumPostcode()">
                                                </li>
                                                <li class="address_form">
                                                    <label for="address1" class="display_1">주소</label>
                                                    <input class="display_2" type="text" id="sample6_address" name="address1" class="display_2 " value="<?= $row['address1'] ?>">
                                                </li>
                                                <li class="address_form">
                                                    <label for="address2" class="display_1">상세주소</label>
                                                    <input class="display_2" type="text" id="sample6_address2" name="address2" class="display_2 " value="<?= $row['address2'] ?>">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div id="button">
                                    <div class="form_btn">
                                        <input type="reset" value="취소" >
                                    </div>
                                    <div class="form_btn">
                                        <input type="submit" value="저장">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="../script/jQuery/jquery-3.6.0.min.js"></script>
        <script src="../script/javascript/common.js"></script>
        <script>
            function sample6_execDaumPostcode(){
                new daum.Postcode({
                    oncomplete: function(data) {
                        // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                        // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                        // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                        var fullAddr = ''; // 최종 주소 변수
                        var extraAddr = ''; // 조합형 주소 변수

                        // 사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                        if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                            fullAddr = data.roadAddress;

                        } else { // 사용자가 지번 주소를 선택했을 경우(J)
                            fullAddr = data.jibunAddress;
                        }

                        // 사용자가 선택한 주소가 도로명 타입일때 조합한다.
                        if(data.userSelectedType === 'R'){
                            //법정동명이 있을 경우 추가한다.
                            if(data.bname !== ''){
                                extraAddr += data.bname;
                            }
                            // 건물명이 있을 경우 추가한다.
                            if(data.buildingName !== ''){
                                extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                            }
                            // 조합형주소의 유무에 따라 양쪽에 괄호를 추가하여 최종 주소를 만든다.
                            fullAddr += (extraAddr !== '' ? ' ('+ extraAddr +')' : '');
                        }

                        // 우편번호와 주소 정보를 해당 필드에 넣는다.
                        document.getElementById('sample6_postcode').value = data.zonecode; //5자리 새우편번호 사용
                        document.getElementById('sample6_address').value = fullAddr;

                        // 커서를 상세주소 필드로 이동한다.
                        document.getElementById('sample6_address2').focus();

                    }
                }).open();
            }
            
        </script>
    <?php
    }
    ?>
    </body>
</html>
