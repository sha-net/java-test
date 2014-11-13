<?php
getFromDB();
$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
if ($_SERVER["REQUEST_METHOD"] == "POST") {echo "POST";}
if ($_SERVER["REQUEST_METHOD"] == "PUT") {echo "PUT";}
if ($_SERVER["REQUEST_METHOD"] == "GET") {
	echo "GET";
	if($_GET["ID"] == "3450"){
		echo json_encode($arr);
		echo "OK";
		print_r($arr);
	}else{
		echo "sdfsdf";
	}
	getFromDB();
}
if ($_SERVER["REQUEST_METHOD"] == "DELETE") {echo "DELETE";}
$request_body = file_get_contents('php://input');
$json = json_decode($request_body);
print_r($json);


#################### Functions #######################
function getFromDB(){
	$dbconn = pg_connect("host=localhost dbname=apiDB user=apiDB password=apiDB")
	    or die('Could not connect: ' . pg_last_error());
	// Performing SQL query
	$query = 'SELECT * FROM book';
	$result = pg_query($query) or die('Query failed: ' . pg_last_error());
	print_r($result);
	echo($result);
	// Free resultset
	pg_free_result($result);	
	// Closing connection
	pg_close($dbconn);
	
}

?>