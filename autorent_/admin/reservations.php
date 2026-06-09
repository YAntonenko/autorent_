<?php include '_admin_header.php'; ?>

<div class="container py-5">
    <h1>Broneeringud</h1>

    <table class="table table-bordered table-striped bg-white">
        <tr>
            <th>ID</th>
            <th>Kasutaja</th>
            <th>Email</th>
            <th>Auto</th>
            <th>Algus</th>
            <th>Lõpp</th>
            <th>Hind</th>
            <th>Staatus</th>
        </tr>
        <?php
        $sql = "SELECT reservations.*, users.first_name, users.last_name, users.email, cars.brand, cars.model
                FROM reservations
                JOIN users ON reservations.user_id = users.id
                JOIN cars ON reservations.car_id = cars.id
                ORDER BY reservations.id DESC";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['first_name'] . ' ' . $row['last_name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['brand'] . ' ' . $row['model']; ?></td>
                <td><?php echo $row['start_date']; ?></td>
                <td><?php echo $row['end_date']; ?></td>
                <td><?php echo $row['total_price']; ?> €</td>
                <td><?php echo $row['status']; ?></td>
            </tr>
        <?php } ?>
    </table>
</div>

<?php include '_admin_footer.php'; ?>
