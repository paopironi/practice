<?php
require("includes/nav.php");
require("connect_db.php");
?>

<form method="POST" id="delete-form"></form>
<main class="container py-3">
    <div class="d-flex justify-content-between align-items-center" style="padding-right: 3rem;">
        <h1>
            Products
        </h1>
        <div>
            <a href="create.php" class="btn btn-primary">New Product</a>
        </div>
    </div>
    <?php
    $query = "select * from product;";
    $r = mysqli_query($link, $query);
    if (mysqli_num_rows($r) > 0) {
    ?>
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col" style="width: 5%;">#</th>
                    <th scope="col" style="width: 20%;">Name</th>
                    <th scope="col" style="width: 48%;">Description</th>
                    <th scope="col" style="width: 7%; text-align: right;">Price</th>
                    <th scope="col" style="width: 10%; text-align: center;">Img</th>
                    <th scope="col" style="width: 25%; text-align: center;">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = $r->fetch_assoc()) {
                ?>
                    <tr style="vertical-align: middle;">
                        <th scope="row"><?= $row['item_id']; ?></th>
                        <td><?= $row['item_name']; ?></td>
                        <td><?= $row['item_description']; ?></td>
                        <td style="text-align: right;"><?= '£' . number_format($row['item_price'] / 100, 2); ?></td>
                        <td style="text-align: center;"><img style="height: 50px; " src="assets/<?= $row['item_img']; ?>" alt="watch: <?= $row['item_name']; ?>"></td>
                        <td style="text-align: center;"><a href="edit.php?id=<?= $row['item_id']; ?>" class="btn btn-link btn-sm">Edit</a> <button class="btn btn-warning btn-sm" type="submit" form="delete-form" formaction="delete.php/<?= $row['item_id']; ?>">Delete</button></td>
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
    <?php
    }
    mysqli_close($link);
    ?>
</main>

<?php
require("includes/footer.php");
?>