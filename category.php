<!doctype html>
<html lang="en">

<?php
$title = 'Welcome to ECom';
require_once 'common/head.php';

require('./utils/json-utils.php');
$bikes = readJSON("/data/items/".$_GET['category'])
?>

<body class="text-center">
	<?php
	require './common/nav.php'
	?>

	<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

		<main role="main" class="inner cover">
			<div class="container">
				<table>
					<tr>
						<td>
							<div class="card" style="width: 18rem;">
								<img src="..." class="card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title">Name of Bike</h5>
									<p class="card-text">Specs about the bike</p>
									<a href="#" class="btn btn-primary">Details</a>
								</div>
							</div>
						</td>
						<td>
							<div class="card" style="width: 18rem;">
								<img src="..." class="card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
						</td>
						<td>
							<div class="card" style="width: 18rem;">
								<img src="..." class="card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
						</td>
						<td>
							<div class="card" style="width: 18rem;">
								<img src="..." class="card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="card" style="width: 18rem;">
								<img src="..." class="card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
						</td>
						<td>
							<div class="card" style="width: 18rem;">
								<img src="..." class="card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
						</td>
						<td>
							<div class="card" style="width: 18rem;">
								<img src="..." class="card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
						</td>
						<td>
							<div class="card" style="width: 18rem;">
								<img src="..." class="card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
						</td>
					</tr>
			</div>
		</main>

		<footer class="mastfoot mt-auto">
			<div class="inner">
				<p>Theme for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://bootswatch.com/">Bootswatch</a>.</p>
			</div>
		</footer>
		
	</div>

	<?php
	require_once 'common/script.php'
	?>
</body>

</html>