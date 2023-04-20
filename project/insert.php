<?php
    session_start();

    header('Content-Type: text/html; charset=UTF-8');

    $num=$_GET['num'];
	$page=$_GET['page'];
	$mode=$_GET['mode'];
	$table="works";

	include "../lib/dbconn.php";  

    $userid =$_SESSION['userid'];
	$username =$_SESSION['username'];

    $subject=$_POST['subject'];
    $client=$_POST['client'];
    $type=$_POST['type'];
    $concept=$_POST['concept'];
    $date=$_POST['date'];

	$contents_01=$_POST['contents_01'];
    $contents_02=$_POST['contents_02'];
    $contents_03=$_POST['contents_03'];
    $contents_04=$_POST['contents_04'];
    $contents_05=$_POST['contents_05'];
    $contents_06=$_POST['contents_06'];
    $contents_07=$_POST['contents_07'];
    $contents_08=$_POST['contents_08'];
    $contents_09=$_POST['contents_09'];
    $contents_10=$_POST['contents_10'];

	$regist_day = date("Y-m-d (H:i)");  
	$html_ok =$_POST['html_ok']; 

    // 임시 파일명 생성
    function rand_str(){
        $str = "";
        $alp = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
        for( $i=0; $i < 4; $i++ ){
        $str .= $alp[rand(0,25)];
        }
        list($usec, $sec) = explode(" ", microtime());
        $str .= date('ms') . str_replace("0.","",(string)(float)$usec); // 분초 . 마이크로타임
        
        return $str;
    }
    
    // 파일명 확장자 배열로 반환
    function get_filename($fname){
        $fext  = array_pop(explode('.', $fname)); // 확장자
        $fname = basename($fpath, '.'.$fext); // 파일명
        $return = array($fname,$fext);
        return $return;
    }

    // 업로드 폼으로 넘어온 $_FILES 내용이 있어야 함 name="upfile[]"
    // 반환값 string : "경로/수정파일명|기존파일명"
    function upload_file($uf){
        $db_in_str = "";
        $chk_files = false;
        foreach ($_FILES["upfile"]["error"] as $error) if ($error == UPLOAD_ERR_OK) $chk_files = true;
        if( $chk_files ){
            //$date_str = (string)date("Y/m/d/"); // 날짜 폴더
            //$ud = $uf . $date_str;
            //$uploads_dir = $_SERVER["DOCUMENT_ROOT"] . $ud;
            $uploads_dir = $_SERVER["DOCUMENT_ROOT"] . $uf;

            @mkdir($uploads_dir, 0777, true); // 폴더 생성
            
            if( is_dir($uploads_dir) ){
            // multi upload start
            foreach ($_FILES["upfile"]["error"] as $key => $error) {
                if ($error == UPLOAD_ERR_OK) {
                    $tmp_name = $_FILES["upfile"]["tmp_name"][$key]; // 업로드된 임시 파일
                    $name = $_FILES["upfile"]["name"][$key]; // 원본 파일명
                    $tn = get_filename($name);
                    //$rename = rand_str() . "." . $tn[1] ; // 수정 파일명 + 확장자
                    //$_FILES["upfile"]["rename"][$key] = $rename;
                    //$muf = move_uploaded_file($tmp_name, $uploads_dir."/".$rename);
                    $muf = move_uploaded_file($tmp_name, $uploads_dir."/".$name); // 파일 이동
                    if( $muf ){
                        // true = 파일 이동 성공
                        
                    if( $key > 0 ) $db_in_str .= "||";
                        //$db_in_str .= $ud.$rename."|".$name;
                        $db_in_str .= $ud."|".$name;
                    }else{ 
                        
                        // false = 파일이동 실패
                        go("/","파일 업로드 실패");
                    }
                }
            }
            }
        }//if
        
        return $db_in_str;
        
    }


    $str = upload_file("/uploads/project/"); 

    $userfile_01=$_FILES['upfile']['name'][0];
    $userfile_02=$_FILES['upfile']['name'][1];
    $userfile_03=$_FILES['upfile']['name'][2];
    $userfile_04=$_FILES['upfile']['name'][3];
    $userfile_05=$_FILES['upfile']['name'][4];
    $userfile_06=$_FILES['upfile']['name'][5];
    $userfile_07=$_FILES['upfile']['name'][6];
    $userfile_08=$_FILES['upfile']['name'][7];
    $userfile_09=$_FILES['upfile']['name'][8];
    $userfile_10=$_FILES['upfile']['name'][9];

    if($mode=="modify"){

        $copied_name =$name;

        if($copied_name){
            $image_name="../uplaods/project/".$copied_name;
            unlink($image_name);
        }
        $sql = "update $table set subject='$subject',client='$client',type='$type',concept='$concept',date='$date',contents_01='$contents_01',contents_02='$contents_02',contents_03='$contents_03',contents_04='$contents_04',contents_05='$contents_05',contents_06='$contents_06',contents_07='$contents_07',contents_08='$contents_08',contents_09='$contents_09',contents_10='$contents_10',userfile_01='$userfile_01',userfile_02='$userfile_02',userfile_03='$userfile_03',userfile_04='$userfile_04',userfile_05='$userfile_05',userfile_06='$userfile_06',userfile_07='$userfile_07',userfile_08='$userfile_08',userfile_09='$userfile_09',userfile_10='$userfile_10', is_html='$is_html' where num=$num";
    }
	else
	{
        
        $sql = "insert into $table (id,name,subject,client,type,concept,date,contents_01,contents_02,contents_03,contents_04,contents_05,contents_06,contents_07,contents_08,contents_09,contents_10,userfile_01,userfile_02,userfile_03,userfile_04,userfile_05,userfile_06,userfile_07,userfile_08,userfile_09,userfile_10,regist_day,hit,is_html)";
        $sql .=" VALUES('$userid','$username','$subject','$client','$type','$concept','$date','$contents_01','$contents_02','$contents_03','$contents_04','$contents_05','$contents_06','$contents_07','$contents_08','$contents_09','$contents_10','$userfile_01','$userfile_02','$userfile_03','$userfile_04','$userfile_05','$userfile_06','$userfile_07','$userfile_08','$userfile_09','$userfile_10','$regist_day',0,'$is_html')";
	}

	mysqli_query($conn, $sql);
	mysqli_close($conn);
    
    echo "
        <script>
            location.href ='list.php?num=$num&mode=$mode&page=1';
        </script>
	";
?>
