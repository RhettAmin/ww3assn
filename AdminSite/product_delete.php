<?php
	$servername = "mysqlsrv2.cas.mcmaster.ca";
	$username = "woodmjm";
	$password = "1138343";
	$db = "woodmjm_db";

	mysql_connect("$servername", "$username", "$password") or die(mysql_error());
	
	mysql_select_db("$db") or die(mysql_error());

	$pid = $_POST['id'];

	mysql_query("DELETE FROM Products WHERE id = '$pid' ") or die(mysql_error());

	mysql_close();

	header('Location: /~anthonjb/product_page.php');