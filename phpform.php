<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Example</title>
</head>
<body>

<h2>Simple PHP Form</h2>

<form method="post">
    Name: <input type="text" name="username">
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['username'];
    echo "Hello, " . $name;
}
?>

</body>
</html>
