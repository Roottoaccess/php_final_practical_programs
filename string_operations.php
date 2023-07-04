<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String_operations.com</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        background-color: bisque;
    }

    .container {
        background-color: aqua;
        color: black;
        padding: 8px;
        border: 2px solid black;
    }

    .topic{
        color: brown;
    }

    .input{
        margin: 6px;
        padding: 4px;
    }

    .input1{
        border: 2px solid red;
        border-radius: 8px;
        padding: 6px;
    }

    .btn{
        border: 2px solid blue;
        border-radius: 6px;
        padding: 12px;
    }
</style>

<body>
    <center>
        <div class="container">
            <h3><b><i>This is the String Operations Program</i></b></h3>
        </div>
        <div class="topic">
            <h2><b><i>
                        <marquee width="40%" direction="left" height="20px">
                            Here you can do the several string operations
                        </marquee>
                    </i></b></h2>
        </div>
    </center>
    <br><br>
    <h3>
    <div>
        <form action="string_operations.php" method="post">
            <input type="radio" name="choice" value="upper" class="input">Converting lower string to upper <br>
            <input type="radio" name="choice" value="lower" class="input">Converting upper string to lower <br>
            <input type="radio" name="choice" value="fupper" class="input">Converting first letter upper <br>
            <input type="radio" name="choice" value="fwordupper" class="input">Converting first letter of all word upper <br> <br>
            <input type="radio" name="choice" value="lastposition" class="input">Get the last <input type="text" name="lposition" id="lposition" class="input1"> Character of string <br><br>
            <input type="radio" name="choice" value="replace" class="input">Replace the first <input type="text" name="foundelement" id="foundelement" class="input1"> following string with <input type="text" name="replaceelement" id="replaceelement" class="input1"> <br>
            <br><input type="radio" name="choice" value="secondword" class="input">Second word of the string <br>
            <input type="radio" name="choice" value="insert" class="input"> Insert a value <br>
            Value: <input type="text" name="element" id="element" class="input1"> Position: <input type="text" name="position" id="position" class="input1"> <br>
            <center>
                <input type="submit" value="Result" name="operation" class="btn">
            </center>
        </form>
    </div>
    </h3>
    <br><br>
    <div>
        <center>
            <h3>
                <?php
                    $input_string = "the quick brown FOX jump over the lazy DOG";
                    echo "<br>Input String <br>";
                    print_r("$input_string");
                    echo "<br> Output String <br>";
                        if(isset($_POST['operation'])){
                            $var = $_POST['choice'];
                                switch($var){
                                    case 'upper':
                                        echo strtoupper($input_string);
                                        break;
                                    case 'lower':
                                        echo strtolower($input_string);
                                        break;
                                    case 'fupper':
                                        echo ucfirst($input_string);
                                        break;
                                    case 'fwordupper':
                                        echo ucwords($input_string);
                                        break;
                                    case 'lastposition':
                                        echo substr($input_string , $_POST['lposition']);
                                        break;
                                    case 'replace':
                                        $search = $_POST['foundelement'];
                                        $replace = $_POST['replaceelement'];

                                        echo str_replace($search,$replace,$input_string);
                                        break;
                                    case 'secondword':
                                        echo "second word is: ";
                                        $dataarray = explode(" ",$input_string);
                                        echo $dataarray[1];
                                        break;
                                    case 'insert':
                                        $element = $_POST['element'];
                                        $position = $_POST['position'];

                                        echo substr_replace($input_string,$element,$position,0);
                                        break;
                                }
                        }
                ?>
            </h3>
        </center>
    </div>
</body>

</html>