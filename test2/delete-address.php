<?php

include('conn.class.php');


$address_id = isset($_GET['id']) ? $_GET['id'] : 0;
$user_id = isset($_GET['uid']) ? $_GET['uid'] : 0;

$mydb->deleteAddress($address_id);
header('Location: detail.php?id=' . $user_id);

