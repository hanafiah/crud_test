<?php
include('database.php');

$user_id = isset($_GET['id']) ? $_GET['id'] : 0;
if (isset($_POST['btnSubmit'])) {
    $query = 'UPDATE tblusers SET name = "' . $_POST['txtName'] . '" WHERE id = ' . $user_id;
    mysql_query($query) or die('Query failed: ' . mysql_error());
    header('Location: index.php');
}

$query = 'SELECT * FROM tblusers WHERE id = ' . $user_id;
$result = mysql_query($query) or die('Query failed: ' . mysql_error());
$user = mysql_fetch_array($result, MYSQL_ASSOC);
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
