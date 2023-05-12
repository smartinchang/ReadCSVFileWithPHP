<?php
	$filename=$_FILES["csvFile"]["tmp_name"];	
	if($_FILES["csvFile"]["size"] > 0) {
		$file = fopen($filename, "r");
		echo('<table>');
		while (($getData = fgetcsv($file, 10000, ",")) !== FALSE) {
			echo('<tr><td>'. $getData[0] . '</td><td>' . $getData[1] . '</td><td>' . $getData[2] . '</td></tr>');
		}
		echo('<table>');
		fclose($file);  
	}
?>