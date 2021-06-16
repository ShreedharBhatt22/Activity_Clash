<?php

echo "inside file process"."<br/>";

$target_dir = "uploads/";

$target_file = $target_dir . basename($_FILES["img"]["name"]);

echo $target_file;

if(move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)){
	echo "file uploaded successfully";
}




?>
<img src="<?php echo $target_file;?>" width="100px" height="100px" alt="image file"/>	