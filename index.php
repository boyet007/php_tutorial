<?php 
    //connect to database
    $conn = mysqli_connect('localhost', 'root', 'Wynne!324', 'mariopizzadb');

    //check connection
    if(!$conn) {
        echo 'Connection error: ' . mysqli_connect_error();
    }

    //write query from all pizza
    $sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

    //make query & get result
    $result = mysqli_query($conn, $sql);

    //fetch the resulting rows as an array
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //memisahkan koma dengan dipetakan ke array
    print_r(explode(',', $pizzas[1]['ingredients']));
?>

<!DOCTYPE html>
<html lang="en">
<?php include('templates/header.php'); ?>
    <h4 class="center grey-text">Pizzas!</h4>
    <div class="container">
        <div class="row">
            <?php foreach($pizzas as $pizza){ ?>
                <div class="col s6 md3">
                    <div class="card z-depth-0">
                        <div class="card-content center">
                            <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
                            <ul>
                                <?php foreach(explode(',', $pizza['ingredients']) as $ing) { ?>
                                    <li><?php echo htmlspecialchars($ing) ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="card-action right-align">
                            <a href="#" class="brand-text">More info</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php include('templates/footer.php'); ?>
</html>
