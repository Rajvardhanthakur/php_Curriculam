<?php
        
        $server = "localhost";
        $username = "root";
        $password = "";
        $db = "users";

        $con = new mysqli($server, $username, $password, $db);

        if(!$con){
            die("connection to this database is failed due to : ".mysqli_connect_error());
        }

        $sql = "select * from registration";
        $result = $con->query($sql);

        if($result->num_rows > 0){
            echo '<table>';
            echo '<tr>';
            echo'<th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>';
            echo'<tr>';
            while($row = $result->fetch_assoc()){
                echo '<tr>';
                echo '  <td>' . $row["first_name"] . '</td>';
                echo '  <td>' . $row["last_name"] . '</td>';
                echo '  <td>' . $row["email"] . '</td>';
                echo '  <td>' . $row["phone"] . '</td>';
                echo '  </tr> ';
            }
            echo '</table>';
        }
        else{
            echo "<h4> No record found </h4>";
        }
        

        $con->close();
?>