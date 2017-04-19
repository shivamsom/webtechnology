<?php
	
		function uploadimage($f)
	{
	   $imagename = $f['name'];
       $image_tmp = $f['tmp_name'];
       $image_type= $f['type'];
       $imagesize = $f['size'];
       $image_basename = basename ( $f['name']);
       $dir = "img / ";
       $image_path = $dir . $image_basename;
           move_uploaded_file($image_tmp, $image_path);

           $a = array($image_basename,$image_path);

           	return $a;
	}
?>