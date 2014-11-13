<?php
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
}
if ($_SERVER["REQUEST_METHOD"] == "DELETE") {echo "DELETE";}
$request_body = file_get_contents('php://input');
$json = json_decode($request_body);
print_r($json);
if($json["ID"] == "3450"){echo "Now it is Ok";}
?>