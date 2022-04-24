<?php require 'inc/data/products.php'; ?>
<?php require 'inc/head.php';

if (!isset($name)) {
    header("Location: /login.php");
    exit();
}
$items = $_SESSION['cart'] ?? null;

?>
<section class="cookies container-fluid">
    <div class="row">



        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Cookie</th>
                    <th scope="col">Description</th>
                    <th scope="col">Quantité</th>
                </tr>
            </thead>
            <?php if (isset($items)) : ?>
                <?php foreach ($items as $id => $nb) : ?>
                    <tr>
                        <td><?= $catalog[$id]['name'] ?></td>
                        <td><?= $catalog[$id]['description'] ?></td>
                        <td><?= $nb ?></td>
                    </tr> <?php endforeach; ?>
            <?php endif; ?>

        </table>

        <?= isset($_SESSION['cart']) ? "<a href='/cleancart.php?clear=1'>clear cart</a>" : '' ?>

    </div>

</section>
<?php require 'inc/foot.php'; ?>