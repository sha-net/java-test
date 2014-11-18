<?php
echo "version 0007";
//include 'index-faunctions.php';
//header('Access-Control-Allow-Origin: *');

/*header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {echo "POST";iDontKnow();}
if ($_SERVER["REQUEST_METHOD"] == "PUT") {echo "PUT";}
if ($_SERVER["REQUEST_METHOD"] == "GET") {echo "GET"; verifyGetRequest();getFromDB();}
if ($_SERVER["REQUEST_METHOD"] == "DELETE") {echo "DELETE";}

$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
$arr1 = "asfsdfasfadsfasfdasdfjfjfjjfjfjfjfjfjfjfjfjfjfjfjfjfjflsakjflakjflkadj";

function iDontKnow(){

echo "Now i dont know - Start";
$request_body = file_get_contents('php://input');
$json = json_decode($request_body);
print_r($json);
print_r($request_body);
error_log($json . "test" . $request_body);
//print_r($arr);
echo "<BR>";
}

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

function verifyGetRequest(){
	if($_GET["ID"] == "3450"){
		echo "If";
		echo json_encode($arr);
		echo "OK";
		print_r($arr);
		iDontKnow();
		echo '$arr1';
	}else{
		echo "Else";
	}
}
?>
