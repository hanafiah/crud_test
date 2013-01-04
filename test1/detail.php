<?php
include('database.php');
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

            <?php
            $user_id = isset($_GET['id']) ? $_GET['id'] : 0;

            $query = 'SELECT * FROM tblusers WHERE id = ' . $user_id;
            $result = mysql_query($query) or die('Query failed: ' . mysql_error());
            $row = mysql_fetch_array($result, MYSQL_ASSOC);
            ?>

            <div class="row">
                <div class="span2">Nama</div>
                <div class="span2"><?php echo $row['name']; ?></div>
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
                $query = 'SELECT * FROM tbladdress WHERE user_id = ' . $user_id;
                $result = mysql_query($query) or die('Query failed: ' . mysql_error());
                while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
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
            <a class="btn" href="add-address.php?id=<?php echo $user_id;?>">Add Address</a>
        </div>
    </body>

</html>
<?php
mysql_free_result($result);

mysql_close($link);