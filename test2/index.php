<?php
include('conn.class.php');
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
                $mydb->getUsers();
                while ($row = $mydb->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td>
                            <a href="detail.php?id=<?php echo $row['id']; ?>">detail</a> |
                            <a href="edit-user.php?id=<?php echo $row['id']; ?>">edit</a> | 
                            <a href="delete-user.php?id=<?php echo $row['id']; ?>">delete</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
            <a class="btn" href="add-user.php">Add User</a>
        </div>
    </body>

</html>
