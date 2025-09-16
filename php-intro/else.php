<?php

if (isset($_GET['age'])) {
    $age = $_GET['age'];
} else {
    $age = '';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Age Range</title>
</head>

<body>
    <main class="container py-5">
        <h1>What age range are you?</h1>
        <form class="mt-3">
            <div class="form-group">
                <label for="age">Input your age</label>
                <input type="text" class="form-control" id="age" name="age" placeholder="Your age" value="<?= $age; ?>">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
        <?php
        if (isset($_GET['age'])) {
            $age = $_GET['age'];
            if ($age < 0) {
                echo "<p class='mt-3'>Please input a number greater than 0.</p>";
                die();
            }
            if ($age < 13) {
                echo "<p class='mt-3'>You are a child.</p>";
            } elseif ($age >= 13 && $age <= 17) {
                echo "<p class='mt-3'>You are a teenager.</p>";
            } elseif ($age >= 18 && $age <= 64) {
                echo "<p class='mt-3'>You are an adult.</p>";
            } else {
                echo "<p class='mt-3'>You are a senior citizen.</p>";
            }
        } else {
            die();
        }
        ?>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>