<?
include 'vegetables.php';
$post_session = mysql_escape_string($_POST['post_session']);
$description = mysql_escape_string($_POST['description']);
$file_to_post = mysql_escape_string($_POST['file_to_post']);
$q = mysql_query("UPDATE gallery SET description = '$description' WHERE picture = '$file_to_post'");
echo "Description Successful";
?>