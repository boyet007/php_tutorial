<?php 
    if(isset($_POST['submit'])) {
        echo htmlspecialchars($_POST['email']);
        echo htmlspecialchars($_POST['title']);
        echo htmlspecialchars($_POST['ingredients']);
    }

?>

<?php include('templates/header.php'); ?>
    <section class="container grey--text">
        <h4 class="center">Add a Pizza</h4>
        <form action="" class="white" method="POST">
            <label for="">Your Email:</label>
            <input type="text" name="email" id="">
            <label for="">Pizza Title:</label>
            <input type="text" name="title" id="">
            <label for="">Ingredients (comma separated):</label>
            <input type="text" name="ingredients">
            <div class="center">
                <input type="submit" value="submit" name="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>
<?php include('templates/footer.php'); ?>