<?php 
    echo "<h1>This is page talk about super globals</h1>";

    // print_r($_GET);

    // echo $_GET['name'], "<br>";

    // echo $_GET['age'], "<br>";

    // if (isset($_GET['name'])) {
    //     echo "Have query name";
    // } else {
    //     echo "Have not query name";
    // }

    // print_r($_SERVER);

    $email = htmlspecialchars($_POST['email'] ?? "");
    $password = htmlspecialchars($_POST['password'] ?? "");
    echo "Email are you: ", $email, "<br>";
    echo "Password are you: ", $password, "<br>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form 
        action="<?php $_SERVER['PHP_SELF']; ?>" 
        method="POST"
    >
        <div>
            <label for="email">email: </label>
            <input type="text" name="email">
        </div>

        <div>
            <label for="password">password: </label>
            <input type="password" name="password">
        </div>

        <input type="submit" value="Submit" name="submit">
    </form>
    
</body>
</html>