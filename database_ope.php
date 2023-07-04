<?php
require('db_config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>database.com</title>
</head>
<body>
    <center>
        <form action="operations.php" method="post">
            <table>
                <tr>
                    <th>
                        <label for="name">Enter your name: </label>
                    </th>
                    <td>
                        <input type="text" name="name" id="name">
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="number">Enter the number: </label>
                    </th>
                    <td>
                        <input type="text" name="number" id="number">
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <input type="submit" value="Submit" name="operation">
                    </td>
                </tr>
            </table>
        </form>
        <br><br>
        <div>
            <?php 
                $sql = "select * from student";
                $result = mysqli_query($conn , $sql);
                while($row = mysqli_fetch_assoc($result)){ ?>
                        <form action="operations.php" method="post">
                            <table border="2px solid black">
                                <tr>
                                    <th>
                                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                    <label for="name">Name_data: </label>
                                    </th>
                                    <td>
                                        <input type="text" name="name" value="<?php echo $row['name'] ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <label for="number">Enter the number: </label>
                                    </th>
                                    <td>
                                        <input type="text" name="number" value="<?php echo $row['number'] ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <input type="submit" value="Update" name="operation">
                                    </th>
                                    <td>
                                        <input type="submit" value="Delete" name="operation">
                                    </td>
                                </tr>
                            </table>
                            <br>
                        </form>
            <?php    }
            ?>
        </div>
    </center>
</body>
</html>