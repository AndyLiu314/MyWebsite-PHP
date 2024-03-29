<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">
</head>
<body>
    <!-- form to fill and retrieve info from user --> 
    <main>
        <form action="includes/formhandler.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email">

            <label for="age">Age:</label>
            <input type="number" id="age" name="age">

            <label for="gender">Gender:</label>
            <select id="gender" name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4"></textarea>

            <button type="submit" name="submit" >Submit</button>
        </form>
    </main>
    <?php
        // testing PHP info
        $name = "Dani";
        $a = 3;
        //echo "HelloWorld";
        //echo $name;

        $_SESSION["username"] = "Krossing";
        //echo $_SESSION["username"];

        // testing match
        $result = match ($a) {
            1 => "One",
            3, 4, 5 => "Bunch of Numbers",
        };
        //echo $result;

        // arrays in php
        $fruits = ["waht", "awhd", "apple"];

        array_splice($fruits, 2, 0, "crazy"); 
        print_r($fruits);
        
    ?>
</body>
</html>