<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {echo "POST";}
if ($_SERVER["REQUEST_METHOD"] == "PUT") {echo "PUT";}
if ($_SERVER["REQUEST_METHOD"] == "GET") {echo "GET";}
if ($_SERVER["REQUEST_METHOD"] == "DELETE") {echo "DELETE";}
$request_body = file_get_contents('php://input');
$json = json_decode($request_body);
print_r($json);
?>