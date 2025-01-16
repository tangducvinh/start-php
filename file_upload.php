<?php
    echo "This is page talk about upload image <br> <br>";

    if (isset($_POST['submit'])) {
        $permitted_extensions = ['png', 'jpg', 'jpeg', 'gif'];
        $file_name = $_FILES['upload']['name'];
        if (!empty($file_name)) {
            $file_size = $_FILES['upload']['size'];
            $file_tmp_name = $_FILES['upload']['tmp_name'];
            $generated_file_name = time()."-".$file_name;
            $destination_path = "uploads/$generated_file_name";
            $file_extension = explode(".", $file_name);
            $file_extension = strtolower(end($file_extension));

            echo "name file is: ", $file_name, "<br>";
            echo "size of file is: ", $file_size, "<br>";
            echo "destination path of file is: ", $destination_path, "<br>";
            echo "extension of file is: ", $file_extension, "<br>";

            if (in_array($file_extension, $permitted_extensions)) {
                if ($file_size <= 1000000) {
                    move_uploaded_file($file_tmp_name, $destination_path);

                    $error_message = "<p style='color: green;'>upload success</p>";
                } else {
                    $error_message = "<p style='color: red;'>file is to big</p>";
                }
            } else {
                $error_message = "<p style='color: red;'>Invalid file type</p>";
            }

        } else {
            $error_message = '<p style="color: red;"> No file, please try again </p>';
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
    <h1>File upload in PHP</h1>

    <form 
        action="<?php echo $_SERVER['PHP_SELF']; ?>" 
        method="POST"
        enctype="multipart/form-data">

        Choose your image to upload

        <input type="file" name="upload">
        <input type="submit" value="Submit" name="submit">

    </form>

    <?php  
        echo $error_message ?? "";
    ?>
</body>
</html>