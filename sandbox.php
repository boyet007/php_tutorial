<?php 
    //session
    if(isset($_POST['submit'])) {
        session_start();
        $_SESSION['name'] = $_POST['name'];
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tuts</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="text" name="name" id="">
         <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>