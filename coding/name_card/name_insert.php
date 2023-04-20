<?php
    header('Content-Type: text/html; charset=utf-8');
?>
    <?php

    $num=$_GET['num'];
	$page=$_GET['page'];
	$mode=$_GET['mode'];
	$table="name_card";

	include "lib/dbconn.php";  

    $member = $_POST['member'];
	$job_title = $_POST['job_title'];
    $team = $_POST['team'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $introduction = $_POST['introduction'];
    $certification = $_POST['certification'];
	$advertiser_info=$_POST['advertiser_info'];

    // nl2br() 함수를 사용하여 "\n"을 "<br>" 태그로 변환
    $introduction = nl2br($introduction);
    $certification = nl2br($certification);
    $advertiser_info = nl2br($advertiser_info);
    
    $file = $_FILES['upfile'];
    $upload_directory = $_SERVER['DOCUMENT_ROOT'] . "/name_card/image/";
    $ext_str = "hwp,xls,doc,xlsx,docx,pdf,jpg,gif,png,txt,ppt,pptx";
    $allowed_extensions = explode(',', $ext_str);

    $max_file_size = 5242880;
    $ext = substr($file['name'], strrpos($file['name'], '.') + 1);
    
    if(!in_array($ext, $allowed_extensions)) {
        print "업로드할 수 없는 확장자 입니다.";
    }

    if($file['size'] >= $max_file_size) {
        print "5MB 까지만 업로드 가능합니다.";
    }
    $path = md5(microtime()) . '.' . $ext;

    if(move_uploaded_file($file['tmp_name'], $upload_directory.$path)) {
        
        
        if ($mode=="modify")
        {
            $query = "update $table set member='$member', job_title='$job_title', team='$team', phone='$phone', email='$email', introduction='$introduction', certification='$certification', advertiser_info='$advertiser_info',file_id=?, name_orig=?, name_save=? where num=$num"; 
            
            echo "
                <script>
                location.href ='name_list.php?num=$num&mode=$mode&page=1';
                </script>
            ";
            
        }
        
        else
        {
            
            
            $query = "insert into $table (member, job_title, team, phone, email, introduction, certification, advertiser_info, file_id, name_orig, name_save) 
            values('$member', '$job_title', '$team', '$phone', '$email', '$introduction', '$certification', '$advertiser_info', ?,?,?)";
            
            echo "
                <script>
                location.href ='name_list.php?num=$num&mode=$mode&page=1';
                </script>
            ";
            
        }
        $file_id = md5(uniqid(rand(), true));

        $name_orig = $file['name'];

        $name_save = $path;


        $file_ext = strtolower(substr(strrchr($name_save, "."), 1)); 
        $fileNameWithoutExt = substr($name_save, 0, strrpos($name_save, "."));

        $ext = end(explode('.', $name_save));
        
        $resize_path = $_SERVER['DOCUMENT_ROOT'] . "/name_card/image/" . $name_save;
            $file = getimagesize($resize_path);

                if ($file['mime'] == 'image/png')
                $image = imagecreatefrompng($resize_path);
                else if ($file['mime'] == 'image/gif')
                $image = imagecreatefromgif($resize_path);
                else
                $image = imagecreatefromjpeg($resize_path);
            
            $thumb_path = $_SERVER['DOCUMENT_ROOT'] . "/name_card/image/" . $fileNameWithoutExt . '_thumb.' . $ext;
            imagejpeg($image, $thumb_path, 75);

        $stmt = mysqli_prepare($conn, $query);
        $bind = mysqli_stmt_bind_param($stmt, "sss", $file_id, $name_orig, $name_save);
        $exec = mysqli_stmt_execute($stmt);
        
        
        mysqli_stmt_close($stmt);
        mysqli_query($conn,$query);
        
    } else {
        print "파일 업로드 실패";
        print '<a href="javascript:history.go(-1);">이전 페이지</a>';

    }

    mysqli_close($conn);

?>
