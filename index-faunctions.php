<?php
function getFromDB(){
	$dbconn = pg_connect("host=localhost dbname=apiDB user=apiDB password=apiDB")
	    or die('Could not connect: ' . pg_last_error());
	// Performing SQL query
	$query = 'SELECT * FROM book';
	$result = pg_query($query) or die('Query failed: ' . pg_last_error());
	$data = pg_fetch_array($result, NULL, PGSQL_ASSOC);
	print_r($data);
	// Free resultset
	pg_free_result($result);	
	// Closing connection
	pg_close($dbconn);	
}

function verifyGetRequest($id){
	if($_GET["ID"] == $id){
		echo "If";
		echo json_encode($arr);
		echo "OK";
		print_r($arr);
	}else{
		echo "Else";
	}
}
?>