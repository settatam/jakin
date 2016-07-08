<?php
/********************************************************************************
* This script is brought to you by Vasplus Programming Blog
* Website: www.vasplus.info
* Email: info@vasplus.info
*********************************************************************************/

if(isset($_POST["file_to_remove"]) && !empty($_POST["file_to_remove"]))
{
	$uploaded_files_location = 'uploaded_files/'.strip_tags($_POST["file_to_remove"]);
	
	@chmod($uploaded_files_location,0777);
	@unlink($uploaded_files_location);
	
	//Here you can also delete the file from your database if you wish assuming you also saved the file to your database during upload
}
?>