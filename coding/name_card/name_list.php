<?php
    session_start();
    include "lib/dbconn.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8" http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="format-detection" content="telephone=no"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">

	<title>프로필 목록</title>

	<link rel="stylesheet" href="name_card.css" type="text/css">
</head>

<?php
	$num=$_GET['num'];
	$page=$_GET['page'];
	$mode=$_GET['mode'];
	$table="name_card";

	if($mode=="search")
	{
		$search=$_POST['search'];
		if(!$search)
		{
			print "<script>
				window.alert('검색어를 입력해주세요!');
				history.go(-1);
				</script>";
				exit;
		}
		$sql = "select * from $table where member like '%$search%' order by num desc";
	}
	else
	{
		$sql = "select * from $table order by num desc";
		$query = "SELECT * FROM images";
	}


	$result =mysqli_query($conn, $sql);
	$total_record =mysqli_num_rows($result);
	$pageNum = ($_GET['page']) ? $_GET['page'] : 1;
	$scale = ($_GET['list']) ? $_GET['list'] : 150; 
//	$limit = ($page - 1) * $scale;
	$b_pageNum_list = 5;
	$block = ceil($pageNum/$b_pageNum_list); 
	$b_start_page = ( ($block - 1) * $b_pageNum_list ) + 1; 
	$total_page = ceil( $total_record / $scale ); 

	if ($b_end_page > $total_page) 
		$b_end_page = $total_page;
	$start = ($pageNum - 1) * $scale;
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
?>

<body oncontextmenu="return false" ondragstart="return false" onselectstart="return false">
	<div id="member_wrap">
		<h2>프로필 목록</h2>
		<div id="list_wrap">
			<form name="board_form" method="post" action="name_list.php?mode=search&page=<?=$page?>">
				<div id="list_search">
					<div id="search_box">
						<input type="text" id="search" name="search" title="사원명입력" placeholder="사원명을 입력하세요." autocomplete="off">
					</div>
					<div class="btn">
						<input id="search_btn" type="submit" value="조회" title="조회">
					</div>
					<div class="newlist_btn">
						<input type="button" value="새로고침" onclick="location='http://ahn0.com/done/name_card/name_list.php'">
					</div>
				</div>
			</form>
			<div id="list_area">
				<?php
					for($i =$start; $i<$start+$scale && $i<$total_record; $i++)
					{
						mysqli_data_seek($result,$i);
						$row = mysqli_fetch_array($result);
						$item_num =$row['num'];
						$item_member = $row['member'];
						$item_title =  $row['job_title'];
						$item_team =  $row['team'];
						$item_phone =  $row['phone'];
						$item_email =  $row['email'];
				?>
				<div id="list_content">
					<a href="name_view.php?table=<?=$table?>&num=<?=$item_num?>&page=<?=$page?>">
						<div id="data_area">
							<div>
								<p>
									<span>
										<?=$item_team?>
									</span>
								</p>
								<p>
									<span >
										<?=$item_member?>
									</span>
									<span>
										<?=$item_title?>
									</span>
								</p>
								<p>
									<span>
										<?=$item_phone?>
									</span>
								</p>
							</div>
						</div>
					</a>
				</div>
				<?php
					$number--;
					}
				?>
			</div>
		</div>
	</div>

	<script src="script/jQuery/jquery-3.6.4.min.js"></script>

</body>
</html>
