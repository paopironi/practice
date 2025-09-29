<?php
// Get the id of the item that is being update from the uri.
$item_id = explode('/', $_SERVER['REQUEST_URI'])[2];
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
        header("Location: https://" . $_SERVER['HTTP_HOST'] . "/edit.php?$query&id=$item_id");
        exit;
    } else {
        // If there are no validation errors, save changes to the database and show a success message.
        require("connect_db.php");
        $query = mysqli_prepare($link, "update product set item_name=?, item_description=?, item_price=?, item_img=? where item_id=?");
        mysqli_stmt_bind_param($query, "ssisi", $name, $description, $price, $img, $item_id);
        $updated = @mysqli_stmt_execute($query);
        if ($updated) {
            require("includes/nav.php");
?>
            <main class="container py-3">
                <p>Item successfully updated!</p>
            </main>
<?php
            require("includes/footer.php");
        }
    }
}
?>