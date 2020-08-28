<?php
    $tem=false;
    if(isset($_POST["num"])){
        $tab_num = $_POST["num"];

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1>Table</h1>
    <form action="table.php" method="post">
        <input type="int" name="num" id="num" placeholder="Enter a number">
        <button class="btn" type="submit">generate</button>
    </form>

    <?php
        echo "<br />";
        echo "<br />";
        echo "<br />";

        if($tem == true){
            for($i=1; $i <=10; $i++){
                echo "$tab_num * $i  : ".$tab_num*$i."<br />";
            } 
        }
    ?>
    </div>
</body>
</html>
