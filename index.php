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

<div class="container secondHomeSection bg-image backgroundImg">
    <div class="container home">


  <div class="row w-100">
  <div class="col-6 homePage text-align position-relative">
      <img src="images/3.jpg" class="homePageImg mx-auto d-block" alt="Image 3">
      <h2 class="position-absolute top-50 start-50 translate-middle text-white z-3">
    Next Session
  </h2>
    </div>
    <div class="col-6 homePage text-align position-relative">
      <img src="images/4.jpg" class="homePageImg mx-auto d-block" alt="Image 4">
      <h2 class="position-absolute top-50 start-50 translate-middle text-white z-3">
    Choose Plan
  </h2>
    </div>
    </div>
    <div class="row w-100">
    <div class="col-6 homePage text-align position-relative">
      <img src="images/5.jpg" class="homePageImg mx-auto d-block" alt="Image 5">
      <h2 class="position-absolute top-50 start-50 translate-middle text-white z-3">
    See Your Journey
  </h2>
    </div>
    <div class="col-6 homePage text-align position-relative">
      <img src="images/6.jpg" class="homePageImg mx-auto d-block" alt="Image 6">
      <h2 class="position-absolute top-50 start-50 translate-middle text-white z-3">
    Create Workout
  </h2>
    </div>
    </div>
  </div>
</div>
</div>


<?php
include 'components/footer.php';
?>




<!-- not important yet    
 

    <div class="container mt-5">
    <h1 class="text-center">Witaj w Aplikacji Treningowej!</h1>
    <p class="text-center">Zarządzaj swoimi planami treningowymi i śledź postępy.</p>
</div> -->
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