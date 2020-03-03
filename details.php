<!doctype html>
<html lang="en">

<?php
$title = 'Welcome to ECom';
require_once 'common/head.php';

require('./utils/json-utils.php');
$bikes = readJSON("./data/items/".$_GET['category']);
?>

<body class="text-center">
	<?php
	require './common/nav.php'
	?>

	<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

		<main role="main" class="inner cover">
			<div class="container">
				<h1 class="display-4"><?=$bike['name'];?></h1>
				<img href="<?=$bike['picture'];?>"></img>
				<ul>
					<li><?=$bike['wheelSize'];?></li>
					<li><?=$bike['color'];?></li>
				</ul>
				<a><button type="button" class="btn btn-primary">Buy now for <?=$bikes['price'];?></button></a>
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