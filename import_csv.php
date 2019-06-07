<?php

	include 'database.php';

	$filename=$_FILES["file"]["name"];
	$ext=substr($filename,strrpos($filename,"."),(strlen($filename)-strrpos($filename,".")));
	if($ext==".csv")
	{	$file = fopen($filename, "r");
		while (($emapData = fgetcsv($file, 10000, ",")) != FALSE)
		{  	$sql = "INSERT into reviews1 (review_entity_type_id, comment, created_on) values('".$emapData[0]."','".$emapData[1]."', '".$emapData[2]."')";
			$result = pg_query($sql) or die('Query failed: ' . pg_last_error()); 
        }
        fclose($file);
        header("Location:http://localhost:8080/Comment Sentiment Analysis System/web/reviews.php" );		
	}
	else {
	    	echo "Error: Please Upload only CSV File";
	    	
		}
?>