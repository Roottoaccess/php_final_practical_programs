<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array_operations.com</title>
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

    .topic {
        color: brown;
        margin: 4px;

    }

    .input {
        margin-left: 4px;
        padding: 8px;
    }

    .btn {
        margin: 8px;
        padding: 10px;
        border: 2px solid blue;
        border-radius: 8px;
    }

    .input1{
        margin: 2px;
        padding: 5px;
        border: 2px solid red;
        border-radius: 6px;
    }
</style>

<body>
    <center>
        <div class="container">
            <h3><b>
                    <i>
                        <?php
                        $countries = array('India', 'Australia', 'South Africa', 'Poland', 'Denmark', 'Swiden' , 'India');
                        print_r($countries);
                        ?>
                    </i>
                </b></h3>
        </div>
        <div class="topic">
            <marquee width="40%" direction="left" height="25px">
                <h2><b><i>There are some array operations below to perform</i></b></h2>
            </marquee>
        </div>
        <br><br>
    </center>
    <h3>
        <b>
            <i>
                <form action="array_operations.php" method="post">
                    <input type="radio" name="choice" value="display" class="input"> Display the Array<br>
                    <input type="radio" name="choice" value="sort" class="input"> Sorting the Array <br>
                    <input type="radio" name="choice" value="uniq" class="input"> Remove the duplicate elements <br>
                    <input type="radio" name="choice" value="pop" class="input"> Removing the last element <br>
                    <input type="radio" name="choice" value="rev" class="input"> Display the array in reverse order <br>
                    <input type="radio" name="choice" value="insert" class="input"> Element insert: <input type="text" name="element" id="element" class="input1"> In Position: <input type="text" name="position" id="position" class="input1"> <br>
                    <input type="radio" name="choice" value="find" class="input">
                    Find Element: <input type="text" name="search" id="search" class="input1">
                    <center>
                        <input type="submit" value="Result" name="operation" class="btn">
                    </center>
                </form>
            </i>
        </b>
    </h3>
    <br>
    <center>
        <div class="topic">
            <marquee width="40%" direction="left" height="25px">
                <h2><b><i>Here are the outputs of the array_operations</i></b></h2>
            </marquee>
        </div>
        <h3>
            <b>
                <i>
                    <div>
                        <?php
                        $countries = array('India', 'Australia', 'South Africa', 'Poland', 'Denmark', 'Swiden' , 'India');
                        if (isset($_POST['operation'])) {
                            $choice = $_POST['choice'];

                            switch ($choice) {
                                case 'display':
                                    foreach ($countries as $values)
                                        echo "<br>" . $values;
                                        break;
                                case 'sort':
                                    sort($countries);
                                    foreach($countries as $values)
                                        echo "<br>". $values;
                                        break;
                                case 'uniq':
                                    $array_uniq = array_unique($countries);
                                    foreach($array_uniq as $values)
                                    echo "<br>". $values;
                                    break;
                                case 'pop':
                                    array_pop($countries);
                                    foreach($countries as $values)
                                    echo "<br>". $values;
                                    break;
                                case 'rev':
                                    $reverse = array_reverse($countries);
                                    foreach($reverse as $values)
                                    echo "<br>". $values;
                                    break;
                                case 'insert':
                                    array_splice($countries,$_POST['position'],0,$_POST['element']);
                                    foreach($countries as $values)
                                    echo "<br>". $values;
                                    break;
                                case 'find':
                                    if(in_array($_POST['search'] , $countries)){
                                        echo "Element ".$_POST['search']." found at position ". array_search($_POST['search'] , $countries) ." successfully"; 
                                    }
                                    else{
                                        echo "Element not found in the array !";
                                    }
                                    foreach($countries as $values)
                                    echo "<br>". $values;
                                    break;
                            }
                        }
                        ?>
                    </div>
                </i>
            </b>
        </h3>
    </center>
</body>

</html>