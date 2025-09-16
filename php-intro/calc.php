<?php
if (isset($_GET['operator'])) {
    // echo var_dump($_GET);
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
} else {
    $num1 = '';
    $num2 = '';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Calculator</title>
</head>

<body>
    <main class="container py-5">
        <h1>Basic Calculator</h1>
        <p>Input two number and select the operator</p>
        <form>
            <div class="form-group">
                <label for="num1">First number</label>
                <input type="text" class="form-control" id="num1" name="num1" placeholder="First Number" value="<?= $num1; ?>">
            </div>
            <div class="form-group">
                <label for="num2">Second number</label>
                <input type="text" class="form-control" id="num2" name="num2" placeholder="Second Number" value="<?= $num2; ?>">
            </div>
            <p>Operator:</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="operator" id="operator1" value="plus" checked>
                <label class="form-check-label" for="operator1">
                    +
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="operator" id="operator2" value="minus">
                <label class="form-check-label" for="operator2">
                    -
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="operator" id="operator3" value="multiply">
                <label class="form-check-label" for="operator3">
                    *
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="operator" id="operator4" value="divide">
                <label class="form-check-label" for="operator4">
                    /
                </label>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
        <?php
        if (isset($_GET['operator'])) {
            // echo var_dump($_GET);
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $operator = $_GET['operator'];
            if ($num1 == '' || $num2 == '') {
                echo "<p class='mt-3'>Please input two numbers.</p>";
                die();
            }
            switch ($operator) {
                case 'plus':
                    $result = $num1 + $num2;
                    break;

                case 'minus':
                    $result = $num1 - $num2;
                    break;

                case 'multiply':
                    $result = $num1 * $num2;
                    break;

                case 'divide':
                    if ($num2 == '0') {
                        echo "<p class='mt-3'>Cannot divide by zero!</p>";
                        die();
                    }
                    $result = $num1 / $num2;
                    break;
            }
            echo "<p class='mt-3'>Result: " . $result . "</p>";
        }
        ?>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>