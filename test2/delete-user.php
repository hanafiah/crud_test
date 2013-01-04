<?php

include('conn.class.php');

$user_id = isset($_GET['id']) ? $_GET['id'] : 0;
$mydb->deleteUser($user_id);
header('Location: index.php');
