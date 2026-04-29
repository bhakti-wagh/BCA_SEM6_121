<!DOCTYPE html>
<html>
<head>
    <title>Favourite Car</title>
</head>
<body>

<form method="post">
    <h3>Please select your favourite car:</h3>

    <input type="radio" name="car" value="Nissan"> Nissan <br>
    <input type="radio" name="car" value="Toyota"> Toyota <br>
    <input type="radio" name="car" value="Mitsubishi"> Mitsubishi <br><br>

    <input type="submit" name="submit" value="SUBMIT">
</form>

<?php
if(isset($_POST['submit'])) {
    if(isset($_POST['car'])) {
        $car = $_POST['car'];
        echo "<h3>Your favourite car is: $car</h3>";
    } else {
        echo "<h3>Please select a car!</h3>";
    }
}
?>

</body>
</html>