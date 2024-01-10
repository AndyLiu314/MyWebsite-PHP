<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <!-- form to fill and retrieve info from user --> 
    <main>
        <form action="action.php" method="post">
            <label for="name">Your name:</label>
            <input name="name" id="name" type="text">

            <label for="age">Your age:</label>
            <input name="age" id="age" type="number">

            <button type="submit">Submit</button>
        </form>
    </main>
    <?php
        // testing PHP info
        $name = "Dani";
        echo "HelloWorld";
        echo $name;

        $_SESSION["username"] = "Krossing";
        echo $_SESSION["username"]

    ?>
</body>
</html>