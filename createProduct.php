<?php
$file = 'data/items/'.$_GET['category'];
if (!isset($_SERVER['CONTENT_LENGTH'])){}
else {
    require_once('JSONtility.php');
    writeJSON($file, $_POST);
}

?>
<html>
<h1>Create Bike</h1>
<form action="create.php" method="POST">
    Name: <input name="name" type="text"><br>
    Price: <input name="price" type="number" step="0.01"><br>
    Apartment Number: <input name="aptNum" type="text"><br>
    Rent: $<input name="rent" type="number" step="0.01"><br>
    Number of Late Payments: <input name="latePayments" type="number"><br>
    <button type="submit">Submit</button>
</form>

</html>