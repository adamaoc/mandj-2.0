<?php
// FlexHub configs //
$flexroot = '/flexhub/';
$docArray = explode('/', $_SERVER['DOCUMENT_ROOT']);
//print_r($docArray);
$docPath = $docArray[0].'/'.$docArray[1].'/'.$docArray[2].'/'.$docArray[3].$flexroot;

// MySQL configs //
$host = "localhost";
$username = "root";
$password = "root";
$dbname = "FlexHub";
