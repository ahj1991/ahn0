<?php
    session_start();
    include "lib/dbconn.php";
?>
<!DOCTYPE html>
<html lang="Ko">
	<head>
		<meta charset="UTF-8" http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="format-detection" content="telephone=no"/>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">

		<title>명함 정보 입력하기</title>

		<link rel="stylesheet" href="name_card.css" type="text/css">
    </head>
    <body oncontextmenu="return false" ondragstart="return false" onselectstart="return false">
        <div id="member_wrap">
			<h2>명함 정보 입력하기</h2>
            <div id="write_wrap">
			<?php
				$page =$_GET['page'];
				$mode =$_GET['mode'];
				$table="name_card";
				$num=$_GET['num'];
				$url= $_GET['url'];
				$path = "/name_card/image/". $FILES['upload']['name'];

				if($mode=="modify"){
					$sql="select * from $table where num=$num";
					$result =mysqli_query($conn,$sql);
					$row =mysqli_fetch_array($result);

					$item_num =  $row['num'];
					$item_member = $row['member'];
					$item_job = $row['job_title'];
					$item_team =  $row['team'];
					$item_phone =  $row['phone'];
					$item_email =  $row['email'];
					$item_introduction =  $row['introduction'];
					$item_certification = $row['certification'];
					$item_userfile =  $row['name_orig'];


			?>
			<div class="upload_form">
				<form method="post" action="name_insert.php?mode=modify&num=<?=$item_num?>&page=<?=$page?>&table=<?=$table?>" enctype="multipart/form-data" onsubmit="return formSubmit(this);">
					<ul>
						<li>
							<label>이름:</label>
							<input type="text" name="member" value="<?=$item_member?>">
						</li>
						<li>
							<label>직책:</label>
							<input type="text" name="job_title" value="<?=$item_title?>">
						</li>
						<li>
							<label>팀:</label>
							<input type="text" name="team" value="<?=$item_team?>">
						</li>
						<li>
							<label>연락처:</label>
							<input type="text" name="phone" value="<?=$item_phone?>">
						</li>
						<li>
							<label>이메일:</label>
							<input type="text" name="email" value="<?=$item_email?>">
						</li>
						<li>
							<label>자격증:</label>
							<textarea name="certification" rows="6" cols="105"> </textarea>
						</li>
						<li>
							<label>자기소개:</label>
							<textarea name="introduction" rows="12" cols="105"> </textarea>
						</li>
						<li>
							<label>담당 광고주:</label>
							<textarea name="advertiser_info" rows="12" cols="105"> </textarea>
						</li>
					</ul>
					<div class="file_box">
						<input type="hidden" name="MAX_FILE_SIZE" value="1000000" >
						<label for="upfile">파일첨부</label>
						<input type="file" name="upfile" id="upfile" class="upload-hidden">
						<input style="display:none;" type="text" class="upload-name" name="upfile" value="" readonly>
						<label for="upfile" class="label_btn"></label>
					</div>
					<div id="save_btn">
						<a href="name_list.php?table=<?=$table?>&page=<?=$page?>"></a>
						<input type="submit" value="수정">
					</div>
				</form>
			</div>
			<?php
			} 
			else 
			{
			?>
			<div class="upload_form">
				<form name="uploadForm" id="uploadForm" method="post" action="name_insert.php"  enctype="multipart/form-data" onsubmit="return formSubmit(this);">
					<ul>
						<li>
							<label>이름:</label>
							<input type="text" name="member" value="<?=$item_member?>">
						</li>
						<li>
							<label>직책:</label>
							<input type="text" name="job_title" value="<?=$item_title?>">
						</li>
						<li>
							<label>팀:</label>
							<input type="text" name="team" value="<?=$item_team?>">
						</li>
						<li>
							<label>연락처:</label>
							<input type="text" name="phone" value="<?=$item_phone?>">
						</li>
						<li>
							<label>이메일:</label>
							<input type="text" name="email" value="<?=$item_email?>">
						</li>
						<li>
							<label>자격증:</label>
							<textarea name="certification" rows="12" cols="105"> </textarea>
						</li>
						<li>
							<label>자기소개:</label>
							<textarea name="introduction" rows="12" cols="105"> </textarea>
						</li>
						<li>
							<label>담당 광고주:</label>
							<textarea name="advertiser_info" rows="12" cols="105"> </textarea>
						</li>
					</ul>
						
					<div class="file_box">
						<input type="hidden" name="MAX_FILE_SIZE" value="1000000">
						<label for="upfile">파일첨부</label>
						<input type="file" name="upfile" id="upfile" class="upload-hidden">
						<input style="display:none;" type="text" class="upload-name" name="upfile" value="" readonly>
						<label for="upfile" class="label_btn"></label>
					</div>
					<div id="save_btn">
						<input type="submit" value="저장">
					</div>
				</form>
			</div>
			<?php
				} 
			?>
            </div>
        </div>
        
        <script src="script/jquery-3.6.4.min.js"></script>   
        <script type="text/javascript">

            function formSubmit(f) {

                // 업로드 할 수 있는 파일 확장자를 제한합니다.

                var extArray = new Array('hwp','xls','doc','xlsx','docx','pdf','jpg','gif','png','txt','ppt','pptx');

                var path = document.getElementById("upfile").value;

                if(path == "") {
                    alert("파일을 선택해 주세요.");
                    return false;
                }

                var pos = path.indexOf(".");
                if(pos < 0) {
                    alert("확장자가 없는파일 입니다.");
                    return false;
                }

                var ext = path.slice(path.indexOf(".") + 1).toLowerCase();
                var checkExt = false;

                for(var i = 0; i < extArray.length; i++) {
                    if(ext == extArray[i]) {
                        checkExt = true;
                        break;
                    }
                }

                if(checkExt == false) {
                    alert("업로드 할 수 없는 파일 확장자 입니다.");
                    return false;
                }

                return true;
            }

            $(function(){
                var fileTarget = $('#upfile'); 
                fileTarget.on('change', function(){ // 값이 변경되면 
                    var cur=$(".filebox input[type='file']").val(); 
                    $(".upload-name").val(cur); 
                });
            });

        </script>
    </body>
</html>










