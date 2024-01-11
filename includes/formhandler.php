<?php 

//var_dump($_SERVER["REQUEST_METHOD"]);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $age = htmlspecialchars($_POST["age"]);
    $gender = htmlspecialchars($_POST["gender"]);
    $message = htmlspecialchars($_POST["message"]);

    if (empty($name)){
        exit();
        header("Location: ../index.php");
    } else if (empty($email)){
        exit();
        header("Location: ../index.php");
    } else if (empty($age)){
        exit();
        header("Location: ../index.php");
    } else if (empty($gender)){
        exit();
        header("Location: ../index.php");
    } else if (empty($message)){
        exit();
        header("Location: ../index.php");
    }
    
    echo "Data:";
    echo"<br>";
    echo $name;
    echo"<br>";
    echo $email;
    echo"<br>";
    echo $age;
    echo"<br>";
    echo $gender;
    echo"<br>";
    echo $message;

    header("Location: ../index.php");
} else {
    header("Location: ../index.php");
}