<?php include 'inc/header.php'; ?>
<?php include 'inc/db.php'; ?>

<div class="container py-5">
    <h1 class="mb-4">Autod</h1>

    <?php
    $q = '';
    if (isset($_GET['q'])) {
        $q = mysqli_real_escape_string($conn, $_GET['q']);
    }

    if ($q != '') {
        $sql = "SELECT * FROM cars WHERE brand LIKE '%$q%' OR model LIKE '%$q%' ORDER BY id DESC";
        echo "<p>Otsing: <b>$q</b></p>";
    } else {
        $sql = "SELECT * FROM cars ORDER BY id DESC";
    }

    $result = mysqli_query($conn, $sql);
    ?>

    <div class="row">
        <?php while ($car = mysqli_fetch_assoc($result)) { ?>
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="<?php echo $car['image']; ?>" class="card-img-top" alt="Auto">
                    <div class="card-body">
                        <h5><?php echo $car['brand'] . ' ' . $car['model']; ?></h5>
                        <p>
                            Aasta: <?php echo $car['year']; ?><br>
                            Kütus: <?php echo $car['fuel_type']; ?><br>
                            Hind: <?php echo $car['price_per_day']; ?> € / päev
                        </p>
                        <a href="auto.php?id=<?php echo $car['id']; ?>" class="btn btn-primary">Rendi</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php include 'inc/footer.php'; ?>
