<?php
	$host="localhost";
	$user="root";
	$password="";
	mysql_connect($host,$user,$password);
	mysql_select_db("shop");
	
	session_start();
?>