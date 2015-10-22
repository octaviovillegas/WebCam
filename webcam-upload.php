<?php
	$rawData = $_POST['imgBase64'];
	$user = $_POST['user'];
	$filterData = explode(',',$rawData);
	$unencoded = base64_decode($filterData[1]);
	$datetime = date('Y-M-D').time();
	$fp = fopen('images/'.$datetime.$user.'.png','w');
	fwrite($fp,$unencoded);
	fclose($fp);
	echo "images/".$datetime.$user.".png";
?>