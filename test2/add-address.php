<?php
include('conn.class.php');

$user_id = isset($_GET['id']) ? $_GET['id'] : 0;

if (isset($_POST['btnSubmit'])) {
    $data = array(
        'user_id' => $user_id,
        'address' => $_POST['txtAddress']
    );
    $mydb->addUserAddress($data);
    header('Location: detail.php?id=' . $user_id);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>DB TEst</title>
        <link href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h2>Kuku lala</h2>
            <legend>Add Address</legend>
            <form class="form-horizontal" method="post" action="">
                <div class="control-group">
                    <label class="control-label" for="txtAddress">Address</label>
                    <div class="controls">
                        <input type="text" name="txtAddress" id="txtAddress" placeholder="Alamat anda">
                    </div>
                </div>
                <input name="btnSubmit" type="submit" class="btn" value="Add Address" />
            </form>

        </div>
    </body>
</html>
