<?php 
    // echo "This is page talk about php <br>";

    session_start();
    if (isset($_POST['submit'])) {
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
        $password = $_POST['password'];

        // echo "Email are you is: ", $email, "<br>";
        // echo "Password are you is: ", $password, "<br>";

        if ($email == 'admin' && $password == '123') {
            $_SESSION['email'] = $email;
            header("Location: ./dashboard.php");
        } else {
            echo "Incorrect email/password";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Please login here</h1>

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