<?php
include('conn.class.php');

$user_id = isset($_GET['id']) ? $_GET['id'] : 0;

$mydb->getUser($user_id);
$user = $mydb->fetch_assoc();

$address = $mydb->getUserAddress($user_id);
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
            <a class="btn" href="index.php"><< Back</a>
            <legend>Maklumat</legend>
            <div class="row">
                <div class="span2">Nama</div>
                <div class="span2"><?php echo $user['name']; ?></div>
            </div>
            <br/>

            <legend>Alamat</legend>
            <table class="table">
                <tr>
                    <th>ID</td>
                    <th>Alamat</td>
                    <th>Action</td>
                </tr>
                <?php
                while ($row = $mydb->fetch_assoc($address)) {
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td>
                            <a href="edit-address.php?id=<?php echo $row['id']; ?>&uid=<?php echo $user_id; ?>">edit</a> |
                            <a href="delete-address.php?id=<?php echo $row['id']; ?>&uid=<?php echo $user_id; ?>">delete</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
            <a class="btn" href="add-address.php?id=<?php echo $user_id; ?>">Add Address</a>
        </div>
    </body>

</html>