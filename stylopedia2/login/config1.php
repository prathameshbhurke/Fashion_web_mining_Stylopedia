<?php
$db = dbconn('localhost','web','web','web');
// No need to edit below this line.
function dbconn($server,$database,$user,$pass){
	// Connect and select database.
	$db = mysql_connect($server,$user,$pass);
	$db_select = mysql_select_db($database,$db);
	return $db;
}
?>