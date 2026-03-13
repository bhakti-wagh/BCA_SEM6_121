<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form method="post">
    <label>Enter a sentence:</label><br>
    <input type="text" name="sentence" required>
    <br><br>
    <input type="submit" name="submit" value="Check">
</form>

<?php
    if(isset($_POST['submit'])){
        $sentence = strtolower($_POST['sentence']);
        $vowelCount = 0;
        $consonantCount = 0;

       for ($i = 0; $i < strlen($sentence); $i++) {
        $ch = $sentence[$i];

        if ($ch >= 'a' && $ch <= 'z') {
            if ($ch == 'a' || $ch == 'e' || $ch == 'i' || $ch == 'o' || $ch == 'u') {
                $vowelCount++;
            } else {
                $consonantCount++;
            }
        }
    }

    echo "<h3>Vowels: $vowelCount</h3>";
    echo "<h3>Consonants: $consonantCount</h3>";

    if ($vowelCount > $consonantCount) {
        echo "<h3>Vowels are more.</h3>";
    } elseif ($consonantCount > $vowelCount) {
        echo "<h3>Consonants are more.</h3>";
    } else {
        echo "<h3>Both are equal.</h3>";
    }

    }
?>
</body>
</html>