<!DOCTYPE html>
<html>
<body>

<form method="post">
    Date of Birth (dd-mm-yyyy):
    <input type="text" name="dob" placeholder="dd-mm-yyyy" required>
    <input type="submit" value="Calculate Age">
</form>

<?php
if (isset($_POST['dob'])) {

    $dob = $_POST['dob'];


    $dobFormatted = DateTime::createFromFormat('d-m-Y', $dob);

    if ($dobFormatted) {
        $today = new DateTime();
        $age = $dobFormatted->diff($today);
        echo "Your Age is: " . $age->y . " years, " . $age->m . " months, " . $age->d . " days.";
    } else {
        echo "Please enter date in dd-mm-yyyy format.";
    }
}
?>

</body>
</html>
