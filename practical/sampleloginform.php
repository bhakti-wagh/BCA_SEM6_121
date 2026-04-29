<?php 
        // create database And table
        // create database login_db;
        //use login_db;
        //create table users(
        //id int auto_increment primary key,
        //username varchar(50),
        //passowrd varchar(50));
        //insert into users(username , password) values ('admin','1234')


        //login form + validation
        $conn = new mysqli("localhost","root","","login_db");

        //check conn
        if($conn->connect_error){
            die("connection failed: ".$conn->connect_error);
        }

        $message = " ";

        //login validation
        if(isset($_POST['login'])){
            $username =$_POST['username'];
            $password=$_POST['password'];

            //sql query
            $sql ="select *from users where username='$username' AND password='$password'";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                $message = "<span style = 'color:green;'>Login succesful welcome $username</span>";

            }else{
                $message = "<span style = 'color:red;'>Invalid username or password </span>";

            }
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
</head>
<body>
    <h2> Login form</h2>
    <form method ="post">
        Username: 
        <input type="text" name ="username" required><br><br>

        Password:
        <input type = "password" name ="password" required><br><br>

        <input type="submit" name = "login" value="Login">
</form>

<br>
<?php echo $message; ?>
</body>
</html>