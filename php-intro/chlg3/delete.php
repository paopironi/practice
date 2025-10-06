<?php
$item_id = explode('/', $_SERVER['REQUEST_URI'])[2];
if (isset($_POST)) {
    require("connect_db.php");
    $query = mysqli_prepare($link, "delete from product where item_id=?");
    mysqli_stmt_bind_param($query, "i", $item_id);
    $deleted = @mysqli_stmt_execute($query);
    if ($deleted) {
        $title = 'Delete';
        require("includes/nav.php");
?>
        <main class="container py-3">
            <p>Item successfully deleted!</p>
            <div class="mt-3">
                <a href="/">All products</a>
            </div>
        </main>
<?php
        require("includes/footer.php");
    }
}
