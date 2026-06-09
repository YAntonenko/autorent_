<?php
include "_admin_header.php";

$result = mysqli_query($conn, "SELECT * FROM cars");
?>

<h1>Autode haldus</h1>

<a href="add_car.php" class="btn btn-success mb-3">Lisa auto</a>

<table class="table table-bordered bg-white">
    <tr>
        <th>ID</th>
        <th>Auto</th>
        <th>Hind</th>
        <th>Tegevused</th>
    </tr>

    <?php while ($car = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $car["id"]; ?></td>

            <td>
                <?php echo $car["brand"]; ?>
                <?php echo $car["model"]; ?>
            </td>

            <td>
                <?php echo $car["price_per_day"]; ?> €
            </td>

            <td>
                <a href="edit_car.php?id=<?php echo $car["id"]; ?>" class="btn btn-warning btn-sm">
                    Muuda
                </a>

                <a href="delete_car.php?id=<?php echo $car["id"]; ?>" class="btn btn-danger btn-sm">
                    Kustuta
                </a>
            </td>
        </tr>
    <?php } ?>
</table>

<?php include "_admin_footer.php"; ?>
