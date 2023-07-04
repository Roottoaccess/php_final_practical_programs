<?php
require('db_config.php');

if($_POST){
    if($_POST['operation'] == 'Submit'){
        $name = $_POST['name'];
        $number = $_POST['number'];

        $sql = "insert into student(name,number)values('$name','$number')";

        if(mysqli_query($conn,$sql)){
            $location = "database_ope.php";
            header("Location:$location");
        }
    }
    if($_POST['operation'] == 'Delete'){
        $id = $_POST['id'];
        $sql = "delete from student where id = $id";

        if(mysqli_query($conn , $sql)){
            $location = "database_ope.php";
            header("Location:$location");
        }
    }

    if($_POST['operation'] == 'Update'){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $number = $_POST['number'];

        $sql = "update student set name = '$name' , number = '$number' where id = $id";
        if(mysqli_query($conn , $sql)){
            $location = "database_ope.php";
            header("Location:$location");
        }
    }
}


?>