<?php include '_admin_header.php'; ?>

<?php
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM cars WHERE id=$id");
$car = mysqli_fetch_assoc($result);

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

    $sql = "UPDATE cars SET
            brand='$brand',
            model='$model',
            year='$year',
            registration_number='$registration_number',
            price_per_day='$price_per_day',
            fuel_type='$fuel_type',
            transmission='$transmission',
            seats='$seats',
            description='$description',
            image='$image',
            status='$status'
            WHERE id=$id";

    mysqli_query($conn, $sql);
    header('Location: index.php');
    exit;
}
?>

<div class="container py-5">
    <h1>Muuda auto</h1>
    <form method="post" class="bg-white p-4 rounded shadow-sm">
        <?php include 'car_form.php'; ?>
        <button class="btn btn-primary">Salvesta</button>
    </form>
</div>

<?php include '_admin_footer.php'; ?>
