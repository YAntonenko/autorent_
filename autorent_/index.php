<?php include 'inc/header.php'; ?>

<div class="container py-5">
    <div class="row align-items-center bg-white p-4 rounded shadow-sm">
        <div class="col-md-6">
            <h1>Lihtne autorendi veebileht</h1>
            <p class="lead">Vali sobiv auto ja tee broneering lihtsalt.</p>
            <a href="autod.php" class="btn btn-primary btn-lg">Vaata autosid</a>
        </div>
        <div class="col-md-6">
            <img src="https://loremflickr.com/700/400/car" class="img-fluid rounded hero-img" alt="Auto">
        </div>
    </div>

    <h2 class="mt-5 mb-3">Populaarsed autod</h2>
    <div class="row">
        <?php
        include 'inc/db.php';
        $result = mysqli_query($conn, "SELECT * FROM cars ORDER BY id DESC LIMIT 4");
        while ($car = mysqli_fetch_assoc($result)) {
        ?>
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="<?php echo $car['image']; ?>" class="card-img-top" alt="Auto">
                    <div class="card-body">
                        <h5><?php echo $car['brand'] . ' ' . $car['model']; ?></h5>
                        <p><?php echo $car['price_per_day']; ?> € / päev</p>
                        <a href="auto.php?id=<?php echo $car['id']; ?>" class="btn btn-primary btn-sm">Rendi</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php include 'inc/footer.php'; ?>
