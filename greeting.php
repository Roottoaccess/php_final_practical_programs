<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>greeting.com</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        background-color: bisque;
    }

    .input{
        padding: 8px;
        border: 2px solid blue;
        border-radius: 8px;
        margin: 5px;
    }

    .btn{
        padding: 5px;
        border: 2px solid red;
        border-radius: 8px;
        margin: 5px;
    }

    table{
        border: 2px solid brown;
    }
</style>

<body>
    <center>
        <h2><b><i>Greetings_webpage</i></b></h2>
        <br><br>
        <h3>
            <form action="greeting.php" method="post">
                <table>
                    <tr>
                        <th>
                            <label for="name">Enter your name: </label>
                        </th>
                        <td>
                            <input type="text" name="name" id="name" class="input">
                        </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>
                            <input type="submit" value="Submit" name="operation" class="btn">
                        </td>
                    </tr>
                </table>
            </form>
        </h3>
        <br><br>
        <h3>
            <i><b>
                <?php
                    if(isset($_POST['operation'])){
                        $name = $_POST['name'];
                            echo "Welcome $name to our webpage thanks for visiting us !";
                    }
                ?>
            </b></i>
        </h3>
    </center>
</body>

</html>