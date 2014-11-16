<?php
include 'index-faunctions.php';

$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);

if ($_SERVER["REQUEST_METHOD"] == "POST") {echo "POST";}
if ($_SERVER["REQUEST_METHOD"] == "PUT") {echo "PUT";}
if ($_SERVER["REQUEST_METHOD"] == "GET") {echo "GET";verifyGetRequest("3450");}
if ($_SERVER["REQUEST_METHOD"] == "DELETE") {echo "DELETE";}


?>
