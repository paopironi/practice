<?php
if (isset($_POST)) {
    $error = [];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $img = $_POST['img'];
    // Validate the input. Required fields should not be empty. Price should be numeric.
    if ($name == "") {
        $error[] = "name";
    }
    if ($description == "") {
        $error[] = "description";
    }
    if ($price == "" || !is_numeric($price)) {
        $error[] = "price";
    }
    // If there are validation errors, redirect to the product editing page. Place the fields that generate the errors in the query string
    // Also place in the query string the form content so it can be used to prefill the form.
    if (!empty($error)) {
        $query = "errors=" . join(",", $error) . "&" . http_build_query($_POST);
        header("Location: https://" . $_SERVER['HTTP_HOST'] . "/create.php?$query");
        exit;
    } else {
        // If there are no validation errors, save the new item to the database and show a success message.
        require("connect_db.php");
        $query = mysqli_prepare($link, "insert into product (item_name, item_description, item_price, item_img) values (?, ?, ?, ?)");
        mysqli_stmt_bind_param($query, "ssis", $name, $description, $price, $img);
        $created = @mysqli_stmt_execute($query);
        if ($created) {
            require("includes/nav.php");
?>
            <main class="container py-3">
                <p>Item successfully created!</p>
                <div class="mt-3">
                    <a href="/">All products</a>
                </div>
            </main>
<?php
            require("includes/footer.php");
        }
    }
}
?>