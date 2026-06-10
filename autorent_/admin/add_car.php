<?php
include "_admin_header.php";

if ($_POST) {

    $sql = "INSERT INTO cars
    (brand, model, year, registration_number, price_per_day, fuel_type, transmission, seats, description, image, status)

    VALUES

    (
    '$_POST[brand]',
    '$_POST[model]',
    '$_POST[year]',
    '$_POST[registration_number]',
    '$_POST[price_per_day]',
    '$_POST[fuel_type]',
    '$_POST[transmission]',
    '$_POST[seats]',
    '$_POST[description]',
    '$_POST[image]',
    '$_POST[status]'
    )";

    mysqli_query($conn, $sql);

    header("Location: index.php");
    exit;
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Lisa auto</h1>

            <form method="post">
                <?php include "car_form.php"; ?>
                <button class="btn btn-success">Salvesta</button>
            </form>
        </div>
    </div>
</div>

<?php include "_admin_footer.php"; ?>
