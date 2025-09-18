<?php
if ($_GET && $_GET['age']) {
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
    <title>Age Calculator</title>
</head>

<body>
    <main class="container py-5">
        <h1 class="text-center">The Age Calculator</h1>
        <div class="d-flex justify-content-center">
            <div class="w-25">
                <p class="mt-3">Input your age:</p>
                <form class="">
                    <div class="input-group">
                        <input type="text" name="age" placeholder="Enter your age" class="form-control" style="border-right: none;"
                            value="<?php echo $age; ?>">
                        <div class="input-group-append">
                            <span class="input-group-text" style="background-color: white; border-left: none; cursor: pointer;  ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" style="bottom: 0px;" viewBox="0 0 16 16">
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                                </svg>
                            </span>
                            <input type="submit" value="Calculate" class="btn btn-dark">
                        </div>
                    </div>
                </form>
                <?php
                if ($_GET && $_GET['age']) {
                    $age = $_GET['age'];
                } ?>
                <p class="mt-5">You have been alive for:</p>
                <div class="card mt-3">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?= number_format($age * 365, 0, '.', ',') . " days"; ?></li>
                        <li class="list-group-item"><?= number_format($age * 365 * 24, 0, '.', ',') . " hours"; ?></li>
                        <li class="list-group-item"><?= number_format($age * 365 * 24 * 60, 0, '.', ',') . " minutes"; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
</body>

</html>