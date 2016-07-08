<?php
/********************************************************************************
* This script is brought to you by Vasplus Programming Blog
* Website: www.vasplus.info
* Email: info@vasplus.info
*********************************************************************************/

$uid = 1001;

$pcodes = mysql_escape_string($_REQUEST['pcodes']);

$uploaded_files_location = 'uploaded_files/'; //This is the directory where uploaded files are saved on your server

$final_location = $uploaded_files_location . basename($_FILES['file_to_upload']['name']); 


		$imageFile = $_FILES['file_to_upload']['name'];
		
		$file_type = strtolower(substr($imageFile, -4, 4));
		
		
		$photo = "n_".$pcodes."_".time();
		
		$uploadedfile = $_FILES['file_to_upload']['tmp_name'];
		
		if ($file_type == ".jpg" || $file_type == "jpeg") $src = imagecreatefromjpeg($uploadedfile);
		else if ($file_type == ".bmp") $src = imagecreatefromwbmp($uploadedfile);
		else if ($file_type == ".gif") $src = imagecreatefromgif($uploadedfile);
		else if ($file_type == ".png") $src = imagecreatefrompng($uploadedfile);
		
		list ($width,$height) = getimagesize($uploadedfile);
		
		$newwidth = 550;
		$newheight = round(($height/550)*$newwidth);
		$newheight = round(($height/$width)*$newwidth);
		
		$tmp = imagecreatetruecolor($newwidth,$newheight);
		imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
		
 
if (imagejpeg($tmp,"uploaded_files/".$photo.".jpg", 100)) 
{
	//Here you can save the uploaded file to your database if you wish before the success message below
	include 'vegetables.php';
	$q = mysql_query("INSERT INTO gallery (post_session, picture) VALUES ('$pcodes', '$photo')");
	
	echo $photo; 
} 
else 
{
	echo "file_upload_was_unsuccessful";
}
?>