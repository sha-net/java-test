<?php
echo "version 0002";
include 'index-faunctions.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {echo "POST";}
if ($_SERVER["REQUEST_METHOD"] == "PUT") {echo "PUT";}
if ($_SERVER["REQUEST_METHOD"] == "GET") {echo "GET";verifyGetRequest("3450");}
if ($_SERVER["REQUEST_METHOD"] == "DELETE") {echo "DELETE";}


?>
