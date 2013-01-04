<?php

include('database.php');

$user_id = isset($_GET['id']) ? $_GET['id'] : 0;

$query = 'DELETE FROM tbladdress WHERE user_id = "'.$user_id.'"';
mysql_query($query) or die('Query failed: ' . mysql_error());

$query = 'DELETE FROM tblusers WHERE id = "'.$user_id.'"';
mysql_query($query) or die('Query failed: ' . mysql_error());

header('Location: index.php');
