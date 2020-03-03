<?php
//session_start();
//if(!isset($_SESSION['id'])) header('Location: index.php');
$file = 'data/items/' . $_GET['category'].'.json';
if (!isset($_POST['name'])){}
else {
    require_once('utils/json-utils.php');
    modifyJSON($file,$_GET['id'], $_POST);
}

if(!isset($_GET['id'])){
    die('No id, go back to the <a href="index.php">Hotels Page</a>');
};
$json_string = file_get_contents($file);
$bikes=json_decode($json_string, true);
   
    if(!is_numeric($_GET['id']) || $_GET['id']<0 || $_GET['id']>=count($bikes)){
        die('Invalid, go back to the <a href="index.php">index page</a>');
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
        <h1>Edit Bike</h1>
        <form action="modifyProduct.php?category=<?=$_GET['category']?>&id=<?=$_GET['id']?>" method="POST" enctype="multipart/form-data">
            Name: <input name="name" type="text" value="<?= $bikes[$_GET['id']]['name']?>"><br>
            Price: $<input name="price" type="number" step="0.01" value="<?= $bikes[$_GET['id']]['price']?>"><br>
            Wheel Size: <input name="wheelSize" type="number" step="0.1" value="<?= $bikes[$_GET['id']]['wheelSize']?>"><br>
            Color: <input name="color" type="text" value="<?= $bikes[$_GET['id']]['color']?>"><br>
            Link to Photo: <input name="picture" type="text" value="<?= $bikes[$_GET['id']]['picture']?>"><br>
            <button type="submit">Submit</button>
        </form>
    </main>
    <?php
    require './common/script.php'
    ?>
</body>

</html>