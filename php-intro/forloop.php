<?php

if (isset($_GET['num'])) {
    $num = $_GET['num'];
} else {
    $num = '';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>GettheTable</title>
</head>

<body>
    <main class="container py-5">
        <h1>Get the Multiplication Table</h1>
        <form class="mt-3">
            <div class="form-group">
                <label for="num">Input a number between 1 and 10</label>
                <input type="text" class="form-control" id="num" name="num" placeholder="Your number" value="<?= $num; ?>">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
        <?php
        if (isset($_GET['num'])) {
            $num = $_GET['num'];
            if ($num < 1 || $num > 10) {
                echo "<p class='mt-3'>Please input a number between 1 and 10.</p>";
                die();
            }
        } else {
            die();
        }
        ?>
        <p class="mt-3">Multiplication table of <?= $num; ?>:</p>
        <ul class="mt-3">
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<li>$num x $i = " . $num * $i . "</li>";
            }
            ?>
        </ul>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>