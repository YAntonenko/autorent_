<?php include 'inc/header.php'; ?>
<?php include 'inc/db.php'; ?>

<div class="container py-5">
<?php
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM cars WHERE id=$id");
$car = mysqli_fetch_assoc($result);

if (!$car) {
    echo "<div class='alert alert-danger'>Autot ei leitud.</div>";
    include 'inc/footer.php';
    exit;
}

$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    $days = (strtotime($end_date) - strtotime($start_date)) / 86400;

    if ($days <= 0) {
        $message = "<div class='alert alert-danger'>Lõppkuupäev peab olema hiljem kui alguskuupäev.</div>";
    } else {
        $check = mysqli_query($conn, "SELECT * FROM reservations WHERE car_id=$id AND status='active' AND ('$start_date' <= end_date) AND ('$end_date' >= start_date)");

        if (mysqli_num_rows($check) > 0) {
            $message = "<div class='alert alert-danger'>See auto on nendel kuupäevadel juba broneeritud.</div>";
        } else {
            $user_result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");

            if (mysqli_num_rows($user_result) == 0) {
                mysqli_query($conn, "INSERT INTO users(role, first_name, last_name, email, phone, password) VALUES('user', '$first_name', '$last_name', '$email', '$phone', '')");
                $user_id = mysqli_insert_id($conn);
            } else {
                $user = mysqli_fetch_assoc($user_result);
                $user_id = $user['id'];
            }

            $total = $days * $car['price_per_day'];

            mysqli_query($conn, "INSERT INTO reservations(user_id, car_id, start_date, end_date, total_price, status) VALUES($user_id, $id, '$start_date', '$end_date', '$total', 'active')");

            $message = "<div class='alert alert-success'>Broneering on salvestatud. Hind kokku: $total €</div>";
        }
    }
}
?>

<?php echo $message; ?>

<div class="row">
    <div class="col-md-6">
        <img src="<?php echo $car['image']; ?>" class="img-fluid rounded shadow-sm" alt="Auto">
    </div>
    <div class="col-md-6">
        <h1><?php echo $car['brand'] . ' ' . $car['model']; ?></h1>
        <p>
            Aasta: <?php echo $car['year']; ?><br>
            Reg nr: <?php echo $car['registration_number']; ?><br>
            Kütus: <?php echo $car['fuel_type']; ?><br>
            Käigukast: <?php echo $car['transmission']; ?><br>
            Kohad: <?php echo $car['seats']; ?><br>
            Staatus: <?php echo $car['status']; ?>
        </p>
        <h3><?php echo $car['price_per_day']; ?> € / päev</h3>
        <p><?php echo $car['description']; ?></p>
    </div>
</div>

<div class="card mt-4 shadow-sm">
    <div class="card-body">
        <h3>Broneeri auto</h3>
        <form method="post">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Eesnimi</label>
                    <input type="text" name="first_name" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Perekonnanimi</label>
                    <input type="text" name="last_name" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Telefon</label>
                    <input type="text" name="phone" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Algus</label>
                    <input type="date" name="start_date" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Lõpp</label>
                    <input type="date" name="end_date" class="form-control" required>
                </div>
            </div>
            <button class="btn btn-success">Broneeri</button>
        </form>
    </div>
</div>
</div>

<?php include 'inc/footer.php'; ?>
