<?php

    session_start();

    $table="name_card";
    $table=$_GET['table'];
    $num=$_GET['num'];
    $page=$_GET['page'];
    $mode=$_GET['mode'];

    include "lib/dbconn.php";
    $sql ="select * from $table where num = $num";

    $result =mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    $path="http://ahn0.dothome.co.kr/name_card/image/";

    $item_num =$row['num'];
    $item_member =$row['member'];
    $item_title =$row['job_title'];
    $item_team =$row['team'];
    $item_phone =$row['phone'];
    $item_email =$row['email'];
    $item_intro =$row['introduction'];
    $item_certification =$row['certification'];
    $item_advertiser =$row['advertiser_info'];

    $hash_url = $row['name_save'];
    
function getImageData($imgLink)
{

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $imgLink);
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
    $new_hit =$item_hit +1;
    $img = 'ahn0.dothome.co.kr/name_card/image/'.$hash_url;
    $imgBase64 = getImageData($img);
    $imgData     = getHeader($img);
    mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="Ko">
    <head>
        <meta charset="UTF-8" http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="format-detection" content="telephone=no"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">

        <title>프로필</title>

        <link rel="stylesheet" href="name_card.css" type="text/css">
        <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
    </head>
    <body>
        <div id="member_wrap">
            <div id="member_view">
                <div id="view_area">
                    <div class="view_img">
                        <?php
                            echo '<img src="data:'.$imgData.';base64,'.$imgBase64.'" />';
                        ?>
                    </div>
                    <div id="member_intro">
                        <p>
                            <span style="font-size:20px; font-weight:bold;">
                                <?=$item_member?>
                            </span>
                            <span style="color:#999; line-height: 2.5rem; display:none;">
                                <?=$item_title?>
                            </span>
                        <p>
                            <span>
                                <?=$item_team?>
                            </span>
                        </p>
                    </div>
                    <div class="member_business">
                        <p>
                            <span>
                                <?=$item_phone?>
                            </span>
                        </p>
                        <p>
                            <span>
                                <?=$item_email?>
                            </span>
                        </p>
                        <p>
                            <span>
                                <?=$item_intro?>
                            </span>
                        </p>
                        <p>
                            <span>
                                <?=$item_certification?>
                            </span>
                        </p>
                        <p>
                            <span>
                                <?=$item_advertiser?>
                            </span>
                        </p>
                    </div>
                </div>
                <div id="qr_btn">
                    <button onclick="generateQR()">QR코드 생성</button>
                    <div>
                        <div id="qr-container"></div>
                    </div>
                </div>
                <div id="btn_area">
                    <div class="board_btn">
                        <a href="name_w.php?table=<?=$table?>&mode=modify&num=<?=$num?>&page=<?=$page?>"><span id="btn">수정</span></a>
                        <a style="display:none;" href="javascript:del('delete.php?table=<?=$table?>&num=<?=$num?>')"><span id="btn">삭제</span></a>
                    </div>
                </div>
            </div>
            
        </div>        
        <script src="script/jquery-3.6.4.min.js"></script>
        <script>
            function generateQR() {
                const qrContainer = document.getElementById("qr-container");
                const url = window.location.href;
                const size = Math.min(qrContainer.offsetWidth, qrContainer.offsetHeight);
                const qrCode = new QRCode(qrContainer, {
                text: url,
                width: 50,
                height: 50,
                colorDark: "#000000",
                colorLight: "#ffffff",
                quietZone: 0,
                correctLevel: QRCode.CorrectLevel.L,
                });
            }
        </script>
        <script>
            function del(href){
                if(confirm("삭제한 자료는 복구할수 없습니다.\n정말 삭제할까요?")){
                    document.location.href=href;  //delete.php?table=upload&num=3
                }
            }
        </script>
    </body>
</html>