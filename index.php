<!doctype html>
<html lang="en">

<?php
$title = 'Welcome to ECom';
require_once './common/head.php'
?>

<body class="text-center">
  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
      <div class="inner">
        <h3 class="masthead-brand">Items for Sale</h3>
        <nav class="nav nav-masthead justify-content-center">
          <a class="nav-link active" href="index.php">Home</a>
        </nav>
      </div>
    </header>

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