<?php
include('conn.class.php');

$user_id = isset($_GET['id']) ? $_GET['id'] : 0;
if (isset($_POST['btnSubmit'])) {
    $data = array(
        'name' => $_POST['txtName']
    );
    $mydb->updateUser($user_id, $data);
    header('Location: index.php');
}

$mydb->getUser($user_id);
$user = $mydb->fetch_assoc();
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
            <legend>Edit User</legend>
            <form class="form-horizontal" method="post" action="">
                <div class="control-group">
                    <label class="control-label" for="txtName">Name</label>
                    <div class="controls">
                        <input type="text" name="txtName" id="txtName" placeholder="Nama anda" value="<?php echo $user['name']; ?>">
                    </div>
                </div>
                <input name="btnSubmit" type="submit" class="btn" value="Update User" />
            </form>

        </div>
    </body>
</html>
