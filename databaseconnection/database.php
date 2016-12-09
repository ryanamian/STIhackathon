<?php
$con = mysql_connect("localhost", "root", "");
if(!$con){
	die("Could not connect");
}else{
	mysql_select_db("rent");
}

?>