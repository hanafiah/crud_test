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
            <table class="table">
                <tr>
                    <th>ID</td>
                    <th>Nama</td>
                    <th>Action</td>
                </tr>
                <?php
                $query = 'SELECT * FROM tblusers';
                $result = mysql_query($query) or die('Query failed: ' . mysql_error());

                while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><a href="detail.php?id=<?php echo $row['id']; ?>">detail</a> | edit | delete</td>
                    </tr>
                    <?php
                }
                ?>
            </table>
            <a class="btn" href="add-user.php">Add User</a>
        </div>
    </body>

</html>
<?php

mysql_free_result($result);

mysql_close($link);