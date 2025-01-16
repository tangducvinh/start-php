<?php 
    session_start();
    session_destroy();
    header("Location: /sessions.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>this is page logout</h1>
</body>
</html>