<?php include '_admin_header.php'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $brand = mysqli_real_escape_string($conn, $_POST['brand']);
    $model = mysqli_real_escape_string($conn, $_POST['model']);
    $year = $_POST['year'];
    $registration_number = mysqli_real_escape_string($conn, $_POST['registration_number']);
    $price_per_day = $_POST['price_per_day'];
    $fuel_type = mysqli_real_escape_string($conn, $_POST['fuel_type']);
    $transmission = mysqli_real_escape_string($conn, $_POST['transmission']);
    $seats = $_POST['seats'];
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $image = mysqli_real_escape_string($conn, $_POST['image']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);

    $sql = "INSERT INTO cars(brand, model, year, registration_number, price_per_day, fuel_type, transmission, seats, description, image, status)
            VALUES('$brand', '$model', '$year', '$registration_number', '$price_per_day', '$fuel_type', '$transmission', '$seats', '$description', '$image', '$status')";

    mysqli_query($conn, $sql);
    header('Location: index.php');
    exit;
}
?>

<div class="container py-5">
    <h1>Lisa auto</h1>
    <form method="post" class="bg-white p-4 rounded shadow-sm">
        <?php include 'car_form.php'; ?>
        <button class="btn btn-success">Salvesta</button>
    </form>
</div>

<?php include '_admin_footer.php'; ?>
