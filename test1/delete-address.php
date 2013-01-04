<?php

include('database.php');


$address_id = isset($_GET['id']) ? $_GET['id'] : 0;
$user_id = isset($_GET['uid']) ? $_GET['uid'] : 0;

$query = 'DELETE FROM tbladdress WHERE id = "' . $address_id . '"';
mysql_query($query) or die('Query failed: ' . mysql_error());

header('Location: detail.php?id=' . $user_id);

