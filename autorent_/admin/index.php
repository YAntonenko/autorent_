<?php include '_admin_header.php'; ?>

<div class="container py-5">
    <div class="d-flex justify-content-between mb-3">
        <h1>Autode haldus</h1>
        <a href="add_car.php" class="btn btn-success">Lisa auto</a>
    </div>

    <table class="table table-bordered table-striped bg-white">
        <tr>
            <th>ID</th>
            <th>Pilt</th>
            <th>Auto</th>
            <th>Aasta</th>
            <th>Hind</th>
            <th>Staatus</th>
            <th>Tegevused</th>
        </tr>
        <?php
        $result = mysqli_query($conn, "SELECT * FROM cars ORDER BY id DESC");
        while ($car = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?php echo $car['id']; ?></td>
                <td><img src="<?php echo $car['image']; ?>" width="90"></td>
                <td><?php echo $car['brand'] . ' ' . $car['model']; ?></td>
                <td><?php echo $car['year']; ?></td>
                <td><?php echo $car['price_per_day']; ?> €</td>
                <td><?php echo $car['status']; ?></td>
                <td>
                    <a href="edit_car.php?id=<?php echo $car['id']; ?>" class="btn btn-warning btn-sm">Muuda</a>
                    <a href="delete_car.php?id=<?php echo $car['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Kas kustutan?')">Kustuta</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>

<?php include '_admin_footer.php'; ?>
