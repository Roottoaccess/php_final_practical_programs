<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server.com</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        background-color: bisque;
    }
</style>

<body>
    <h3>
        <b>
            <pre>
        <?php
        print_r($_SERVER);
        ?>
    </pre>

        </b>
    </h3>
</body>

</html>