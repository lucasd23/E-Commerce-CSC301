<?php // ! Where main PHP processing is supposed to happen

require_once './utils/json-utils.php';
$roadBikes = readJSON('./data/items/road.json');
$mountainBikes = readJSON('./data/items/mountain.json');
$hybridBikes = readJSON('./data/items/hybrid.json');
$kidBikes = readJSON('./data/items/kid.json');
// Use array_merge(array1 array2...) to add arrays together if necessary

?>

<!doctype html>
<html lang="en">

<?php
$title = 'Welcome to ECom';
require_once './common/head.php';
?>

<body class="text-center">

  <?php
  require './common/nav.php'
  ?>

  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

    <main role="main" class="inner cover">
      <div class="card text-center">
        <div class="card-header">
          Product Categories
        </div>
        <div class="card-body">
          <h5 class="card-title">Category 1</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        <div class="card-header">
        </div>
        <div class="card-body">
          <h5 class="card-title">Category 2</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        <div class="card-header">
        </div>
        <div class="card-body">
          <h5 class="card-title">Category 3</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        <div class="card-footer text-muted">
          2 days ago
        </div>
      </div>
    </main>

    <footer class="mastfoot mt-auto">
      <div class="inner">
        <p>Theme for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://bootswatch.com/">Bootswatch</a>.</p>
      </div>
    </footer>

  </div>

  <?php
  require_once './common/script.php'
  ?>

</body>

</html>
