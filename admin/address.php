<?
include 'session.php';
include 'vegetables.php';
include 'functions.php';
$tmpName = "jakin_address_book.csv";
if(($handle = fopen($tmpName, 'r')) !== FALSE) {
            // necessary if a large csv file
            set_time_limit(0);

            $row = 0;

            while(($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
                // number of fields in the csv
                $num = count($data);

                // get the values from the csv
                $csv[$row]['row1'] = $data[0];
                $csv[$row]['row2'] = $data[1];
				$csv[$row]['row3'] = $data[2];
				
				$q = mysql_query("INSERT INTO mailing (name, email) VALUES ('".$data[1]."', '".$data[2]."')");
				

                // inc the row
                $row++;
            }
            fclose($handle);
 }
?>