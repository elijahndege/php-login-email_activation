<?php
$con = mysqli_connect('localhost','admin','jopless1311','sacco');


function escape($string){

	global $con;

	mysqli_real_escape_string($con, $string);

}

function query($query){
	global $con;

	return mysqli_query($con, $query);
  
}

function confirm($result){

	global $con;

if (!$result) {

	die("Query Failed" .  mysql_errno($con));
}
}
function fetch_array($result){

	global $con;

	return mysqli_fetch_array($result);

}