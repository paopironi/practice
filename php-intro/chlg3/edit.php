<?php
require("includes/nav.php");
require("connect_db.php");
$item_id = $_GET['id'];
if (isset($_GET['errors'])) {
    $error = explode(',', $_GET['errors']);
    $name = $_GET['name'];
    $description = $_GET['description'];
    $price = $_GET['price'];
    $img = $_GET['img'];
} else {
    $query = mysqli_prepare($link, "select * from product where item_id=?");
    mysqli_stmt_bind_param($query, "s", $item_id);
    mysqli_stmt_execute($query);
    $r = mysqli_stmt_get_result($query);
    $row = mysqli_fetch_assoc($r);
    $name = $row['item_name'];
    $description = $row['item_description'];
    $price = $row['item_price'];
    $img = $row['item_img'];
}
?>

<main class="container py-3">
    <h1>
        Edit item #<?= $item_id; ?>
    </h1>
    <form action="update.php/<?= $item_id; ?>" method="POST" class="mt-3">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?= $name; ?>">
            <?php
            if (isset($error) && in_array("name", $error)) {
            ?>
                <div class="text-danger mt-1">
                    Please provide a name.
                </div>
            <?php
            }
            ?>
        </div>
        <div class="form-group mt-3">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Description" value="<?= $description; ?>">
            <?php
            if (isset($error) && in_array("description", $error)) {
            ?>
                <div class="text-danger mt-1">
                    Please provide a description.
                </div>
            <?php
            }
            ?>
        </div>
        <div class="form-group mt-3">
            <label for="price">Price</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Price (pence)" value="<?= $price; ?>">
            <?php
            if (isset($error) && in_array("price", $error)) {
            ?>
                <div class="text-danger mt-1">
                    Please provide a valid price.
                </div>
            <?php
            }
            ?>

        </div>
        <div class="form-group mt-3">
            <label for="img">Image</label>
            <input type="text" class="form-control" id="img" name="img" placeholder="Image url" value="<?= $img; ?>">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</main>

<?php
require("includes/footer.php");
?>