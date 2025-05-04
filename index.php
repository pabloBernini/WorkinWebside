<?php
require 'db_connect.php';

$query = $conn->query("SELECT * FROM plans");
$plans = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Aplikacja Treningowa</title>
    <link rel="stylesheet" href="/css/styles.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
    include 'components/header.php';
    ?>
<?php
include 'components/carousel.php';
?>
    <div class="container mt-5">
        <h1 class="text-center">Witaj w Aplikacji Treningowej!</h1>
        <p class="text-center">Zarządzaj swoimi planami treningowymi i śledź postępy.</p>
    </div>

    <!-- <h1>Twoje Plany Treningowe</h1>

    <ul>
        <?php foreach ($plans as $plan): ?>
            <li><?php echo htmlspecialchars($plan['name']); ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Dodaj Nowy Plan</h2>

    <form action="add_plan.php" method="post">
        <input type="text" name="name" placeholder="Nazwa planu" required>
        <button type="submit">Dodaj</button>
    </form> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>