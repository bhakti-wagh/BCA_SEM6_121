

<?php
 //Php pro to create andd manage database using sql
    $servername = "localhost";
    $username = "root";
    $password = "";

    //create connection
    $conn = new mysqli($servername,$username,$password);

    //check connection
    if($conn->connect_error) 
    {
        die("Connecton failed: ".$conn->connect_error);
    }

    //create database
    $sql = "create database college_db";
    if($conn->query($sql)==TRUE){
        echo "Database created ";
    } 
    else {
        echo"database error".$conn->error;
    }

    //connect to database
    $conn = new mysqli($servername,$username,$password,"college_db");

    // Create Table
        $sql = "CREATE TABLE students (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50),
        age INT
        )";

        if ($conn->query($sql) === TRUE) {
    echo "Table created successfully<br>";
       }

       $sql = "Insert into students(name, age) values('alice',21)";
       $conn->query($sql);

       //display data
       $result =$conn->query("Select *from students");

       while($row = $result->fetch_assoc()){
        echo "Id:".$row["id"]."Name:".$row["name"]."Age:".$row["age"]."<br>";

       }

       $conn->close();
?>

