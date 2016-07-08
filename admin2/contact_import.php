<?
//include 'vegetables.php';
$file = "contact.csv";
$handle = fopen($file,"r") or die("cant open file");

while($data = fgetcsv($handle, 1024)) {
	echo $data[2] ."is for ". $data[3] ."<br>";
}
   
?>