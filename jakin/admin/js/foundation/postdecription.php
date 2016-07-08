<?
$post_session = mysql_escape_string($_POST['post_session']);
$description = mysql_escape_string($_POST['description']);
$file_to_post = mysql_escape_string($_POST['file_to_post']);
$q = mysql_query("INSERT INTO gallery (post_session, description, picture) VALUES ('$post_session', '$description', '$file_to_post')");
?>