<?php
  header('Content-Type: text/html; charset=utf-8');
?>
   <?php
    session_start();

    $num=$_GET['num'];
	$page=$_GET['page'];
	$mode=$_GET['mode'];
	$table="story";

	include "../lib/dbconn.php";  

    $userid =$_SESSION['userid'];
	$username =$_SESSION['username'];
    $categorie=$_POST['categorie'];
    $subject=$_POST['subject'];
	$content=$_POST['content'];
    
	$regist_day = date("Y-m-d (H:i)");  
	$html_ok =$_POST['html_ok']; 
    
    /*new*/
    $file = $_FILES['upfile'];
    $upload_directory = $_SERVER['DOCUMENT_ROOT'] . "/uploads/story/";
    $ext_str = "hwp,xls,doc,xlsx,docx,pdf,jpg,gif,png,txt,ppt,pptx";
    $allowed_extensions = explode(',', $ext_str);

    $max_file_size = 5242880;
    $ext = substr($file['name'], strrpos($file['name'], '.') + 1);
    
    // 확장자 체크

    if(!in_array($ext, $allowed_extensions)) {
        print "업로드할 수 없는 확장자 입니다.";
    }
    // 파일 크기 체크
    if($file['size'] >= $max_file_size) {
        print "5MB 까지만 업로드 가능합니다.";
    }
    $path = md5(microtime()) . '.' . $ext;

    if(move_uploaded_file($file['tmp_name'], $upload_directory.$path)) {

        if($mode=="modify")
        {
            $query = "update $table set id='$userid',name='$username',categorie='$categorie',subject='$subject',content='$content',file_id=?,name_orig=?,name_save=? where num=$num";
            echo "
                <script>
                location.href ='list.php?num=$num&mode=$mode&page=1';
                </script>
            ";
        }
        else
        {
            $query = "INSERT INTO story (id,name,categorie,subject,content,file_id, name_orig, name_save, reg_time,hit,is_html) 
            VALUES('$userid','$username','$categorie','$subject','$content',?,?,?,now(),0,'$is_html')";

            echo "
                <script>
                location.href ='list.php?num=$num&mode=$mode&page=1';
                </script>
            ";
        }

        $file_id = md5(uniqid(rand(), true));

        $name_orig = $file['name'];

        $name_save = $path;


        /*이미지리사이즈 최적화*/
        /*확장자 뺀 파일 이름 가져오기*/
        $file_ext = strtolower(substr(strrchr($name_save, "."), 1)); 
        $fileNameWithoutExt = substr($name_save, 0, strrpos($name_save, "."));
        /*확장자 뺀 파일 이름 가져오기 끝*/
        
        /*확장자만 가져오기*/
        $ext = end(explode('.', $name_save));
        /*확장자만 가져오기 끝*/
        
        $resize_path = $_SERVER['DOCUMENT_ROOT'] . "/uploads/story/" . $name_save;
        $file = getimagesize($resize_path);
            // 저용량 jpg 파일을 생성합니다
            if ($file['mime'] == 'image/png')
                $image = imagecreatefrompng($resize_path);
            else if ($file['mime'] == 'image/gif')
                $image = imagecreatefromgif($resize_path);
            else
                $image = imagecreatefromjpeg($resize_path);
        
        $thumb_path = $_SERVER['DOCUMENT_ROOT'] . "/uploads/story/" . $fileNameWithoutExt . '_thumb.' . $ext;
        imagejpeg($image, $thumb_path, 75);
        /*이미지리사이즈 최적화 끝*/


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
