<?php

include 'connection.php';

function signupload($conn,$f)
{
	$sign_name=$f['name'];
	$sign_tmp= $f['tmp_name'];
	$sign_type= $f['type'];
	$sign_size= $f['size'];
	$sign_basename= basename ( $f['name']);

	$dir = "img / ";
	$sign_path = $dir . $sign_basename;
	move_uploaded_file($sign_tmp, $sign_path);
	$a  = array($sign_basename,$sign_path);

	return $a;
}
?>