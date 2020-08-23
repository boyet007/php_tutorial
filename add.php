<?php 
    $email = $title = $ingredients = '';
    $errors = array('email' => '', 'title' => '', 'ingredients' => '');
    if(isset($_POST['submit'])) {
        // echo htmlspecialchars($_POST['email']);
        // echo htmlspecialchars($_POST['title']);
        // echo htmlspecialchars($_POST['ingredients']);

        //check email
        if (empty($_POST['email'])) {
            $errors['email'] = 'An email is required <br />';
        } else {
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'email must be a valid email address <br />';
            }
        } 

        //check title
        if (empty($_POST['title'])) {
            $errors['title'] = 'An title is required <br />';
        } else {
            $title = $_POST['title'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $title)) {
                $errors['title'] = 'title must be letters and spaces only <br />';
            }
        }

        //check indegrients
        if (empty($_POST['ingredients'])) {
            $errors['ingredients'] = 'An indegrients is required <br />';
        } else {
            $ingredients = $_POST['ingredients'];
            if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)$/', $ingredients)) {
                $errors['ingredients'] = 'Ingredients must be a comma separated list <br />';
            }
        }

        if (array_filter($errors)) {

        } else {
            header('Location: index.php');
        }
    }

?>

<?php include('templates/header.php'); ?>
    <section class="container grey--text">
        <h4 class="center">Add a Pizza</h4>
        <form action="" class="white" method="POST">
            <label for="">Your Email:</label>
            <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>">
            <div class="red-text"><?php echo $errors['email']; ?></div>
            <label for="">Pizza Title:</label>
            <input type="text" name="title" value="<?php echo htmlspecialchars($title); ?>">
            <div class="red-text"><?php echo $errors['title']; ?></div>
            <label for="">Ingredients (comma separated):</label>
            <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients); ?>">
            <div class="red-text"><?php echo $errors['ingredients']; ?></div>
            <div class="center">
                <input type="submit" value="submit" name="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>
<?php include('templates/footer.php'); ?>