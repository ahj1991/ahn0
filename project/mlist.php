<!-- 
  list.php에서 
  $sql = "select * from upload order by num desc limit 5" 
  적용하여 5개의 레코드만 추출
 -->
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../css/common.css">
<link rel="stylesheet" type="text/css" href="../css/concert.css">
<?php
   $mode="";
   $table="upload";
   include "../lib/dbconn.php";
  
    $scale=10;  

    $sql = "select * from $table order by num desc";
	$result = mysqli_query($conn,$sql);

	$total_record = mysqli_num_rows($result);
  
    // 전체 페이지 수($total_page) 계산 
	if ($total_record % $scale == 0)     
		$total_page = floor($total_record/$scale);      
	else
		$total_page = floor($total_record/$scale) + 1;
		
    
	$page=$_GET['page'];
	if (!$page)                 // 페이지번호($page)가 0 일 때
		$page = 1;              // 페이지 번호를 1로 초기화
 
	// 표시할 페이지($page)에 따라 $start 계산  
	$start = ($page - 1) * $scale;      
	$number = $total_record - $start;
    
      $sql = "select * from $table order by num desc limit 5";
      $result = mysqli_query($conn,$sql);
	  $total_record = mysqli_num_rows($result); // 전체 글 수
        
    // 하나의 레코드 가져오기
	for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)                   
   {
      mysqli_data_seek($result, $i);
	 
	  $row = mysqli_fetch_array($result);   

	  $item_num =$row['num'];
	  $item_id = $row['id'];
	  $item_name = $row['name'];
      //이미지파일명대입
	  $name = $row['userfile'];
	  $item_hit = $row['hit'];
	  $item_date = $row['regist_day'];
	  $item_date = substr($item_date,0,10); //앞 10자리 추출
	  $item_subject = str_replace(" ", "&nbsp;",$row['subject']);
        
 ?>
 <!-- ./board/view.php 변경 -->
		<div id="list_item">
		<div id="list_item1">&nbsp;&nbsp;<?=$number?>&nbsp;&nbsp;
		<a href="./upload/upview.php?table=<?=$table?>&num=<?=$item_num?>&page=<?=$page?>"><img src="./uploads/<?=$name?>" width="40" height="20"/><?= $item_subject ?></a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="" style="float:right; margin-right:10px;"><?= $item_date ?></span></div>
		</div>
<?php
   	  $number--;
   }
?>