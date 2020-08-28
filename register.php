<?php
    $temp = false;
    if(isset($_POST['first_name'])){
        $server = "localhost";
        $username = "root";
        $password = "";

        $con = mysqli_connect($server, $username, $password);

        if(!$con){
            die("connection to this database is failed due to : ".mysqli_connect_error());
        }

        // echo "Database connected!!!";
        $first_name = $_POST['first_name'];
        $last_name  = $_POST['last_name'];
        $email      = $_POST['email'];
        $phone      = $_POST['phone'];

        $sql = "INSERT INTO `users`.`registration` ( `first_name`, `last_name`, `email`, `phone`, `date`) VALUES ('$first_name', '$last_name', '$email', '$phone', current_timestamp());";
    

        if($con->query($sql) == true){
        echo "Successfully inserted";
        $temp = true;
        }
        else{
            echo "error : $sql <br /> $con->error";
        }

        $con->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>User Registration</h3>
        <?php
            if($temp == true){
                echo "<a href='detail.php'>users >>></a>";
            } 
        ?>
        <form action="register.php" method="post">
            <input type="text" name="first_name" id="name" placeholder="Enter your first name">
            <input type="text" name="last_name" id="name" placeholder="Enter last name">
            <input type="text" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <button class="btn">Submit</button> 
        </form>
    </div>
</body>
</html>