<?php
require("includes/nav.php");
require("connect_db.php");
if (isset($_GET['errors'])) {
    $error = explode(',', $_GET['errors']);
    $name = $_GET['name'];
    $description = $_GET['description'];
    $price = $_GET['price'];
    $img = $_GET['img'];
} else {
    $name = '';
    $description = '';
    $price = '';
    $img = '';
}
?>

<main class="container py-3">
    <h1>
        New Product
    </h1>
    <form action="store.php" method="POST" class="mt-3">
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