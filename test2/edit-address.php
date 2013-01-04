<?php
include('conn.class.php');

$address_id = isset($_GET['id']) ? $_GET['id'] : 0;
$user_id = isset($_GET['uid']) ? $_GET['uid'] : 0;

if (isset($_POST['btnSubmit'])) {
    $data = array(
        'address' => $_POST['txtAddress']
    );
    $mydb->updateAddress($address_id, $data);
    header('Location: detail.php?id=' . $user_id);
}

$mydb->getAddress($address_id);
$address = $mydb->fetch_assoc();
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
                        <input type="text" name="txtAddress" id="txtAddress" placeholder="Alamat anda" value="<?php echo $address['address']; ?>">
                    </div>
                </div>
                <input name="btnSubmit" type="submit" class="btn" value="Update Address" />
            </form>
        </div>
    </body>
</html>
