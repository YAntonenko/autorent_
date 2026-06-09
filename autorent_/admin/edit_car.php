<?php
include "_admin_header.php";

$id = $_GET["id"];

$result = mysqli_query($conn, "SELECT * FROM cars WHERE id=$id");
$car = mysqli_fetch_assoc($result);

if ($_POST) {

    $sql = "UPDATE cars SET
        brand='$_POST[brand]',
        model='$_POST[model]',
        year='$_POST[year]',
        registration_number='$_POST[registration_number]',
        price_per_day='$_POST[price_per_day]',
        fuel_type='$_POST[fuel_type]',
        transmission='$_POST[transmission]',
        seats='$_POST[seats]',
        description='$_POST[description]',
        image='$_POST[image]',
        status='$_POST[status]'
        WHERE id=$id";

    mysqli_query($conn, $sql);

    header("Location: index.php");
    exit;
}
?>

<h1>Muuda auto</h1>

<form method="post" class="bg-white p-4 rounded shadow-sm">

    <?php include "car_form.php"; ?>

    <button class="btn btn-primary">
        Salvesta
    </button>

</form>

<?php include "_admin_footer.php"; ?>
