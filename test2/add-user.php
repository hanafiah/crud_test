<?php
include('conn.class.php');

if (isset($_POST['btnSubmit'])) {
    $data = array(
        'name' => $_POST['txtName']
    );
    $mydb->addUser($data);
    header('Location: index.php');
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
            <legend>Add User</legend>
            <form class="form-horizontal" method="post" action="">
                <div class="control-group">
                    <label class="control-label" for="txtName">Name</label>
                    <div class="controls">
                        <input type="text" name="txtName" id="txtName" placeholder="Nama anda">
                    </div>
                </div>
                <input name="btnSubmit" type="submit" class="btn" value="Add User" />
            </form>

        </div>
    </body>
</html>
