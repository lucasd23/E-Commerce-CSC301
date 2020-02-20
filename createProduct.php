<?php
$file = 'data/items/' . $_GET['category'];
if (!isset($_SERVER['CONTENT_LENGTH'])) {
} else {
    require_once('JSONtility.php');
    writeJSON($file, $_POST);
}

?>
<html>


<?php
require './common/head.php'
?>

<body>
    <?php
    require './common/nav.php'
    ?>
    <main>
        <h1>Create Bike</h1>
        <form action="create.php" method="POST">
            Name: <input name="name" type="text"><br>
            Price: $<input name="price" type="number" step="0.01"><br>
            Wheel Size: <input name="wheelSize" type="number" step="0.1"><br>
            Color: $<input name="color" type="number" step="0.01"><br>
            Link to Photo: <input name="picture" type="text"><br>
            <button type="submit">Submit</button>
        </form>
    </main>
    <?php
    require './common/script.php'
    ?>
</body>

</html>