<?php
$emailErr = "";
$email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if email is empty
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = $_POST["email"];

        // Remove extra spaces
        $email = trim($email);

        // Validate email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        } else {
            echo "<h3 style='color:green;'>Valid Email ID: $email</h3>";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Email Validation</title>
</head>
<body>

<h2>Email Validation Form</h2>

<form method="post" action="">
    Enter Email:
    <input type="text" name="email" value="<?php echo $email; ?>">
    <span style="color:red;">* <?php echo $emailErr; ?></span>
    <br><br>
    <input type="submit" value="Validate">
</form>

</body>
</html>