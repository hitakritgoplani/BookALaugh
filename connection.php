<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "IPProject";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
