<?php
session_start();
include '../inc/db.php';
$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND role='admin'");
    $user = mysqli_fetch_assoc($result);

    if ($user && $password == $user['password']) {
        $_SESSION['is_admin'] = true;
        $_SESSION['admin_name'] = $user['first_name'];
        header('Location: index.php');
        exit;
    } else {
        $error = 'Vale email või parool';
    }
}
?>
<!doctype html>
<html lang="et">
<head>
    <meta charset="utf-8">
    <title>Admin login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5" style="max-width:450px;">
    <h1>Admin login</h1>

    <?php if ($error != '') { ?>
        <div class="alert alert-danger"><?php echo $error; ?></div>
    <?php } ?>

    <form method="post" class="bg-white p-4 rounded shadow-sm">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control mb-3" value="admin@autorent.ee" required>

        <label class="form-label">Parool</label>
        <input type="password" name="password" class="form-control mb-3" value="admin123" required>

        <button class="btn btn-primary w-100">Logi sisse</button>
    </form>

    <p class="mt-3 text-muted">Test: admin@autorent.ee / admin123</p>
</div>
</body>
</html>
