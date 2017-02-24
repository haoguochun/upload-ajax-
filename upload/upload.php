<?php
if(is_uploaded_file($_FILES["file"]["tmp_name"])){
	$name=$_FILES["file"]["name"];
	$url="aa/".$name;              //文件存入地址
	move_uploaded_file(($_FILES["file"]["tmp_name"]),$url);
	echo 1;
}
?>