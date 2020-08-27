<html>
    <body>
        <?php
            $student = array("arya", "john", "ned", "tyrion");

            $len = sizeof($student);

            echo "students : <br />";
            for($i=0; $i < $len; $i++){
                echo $student[$i]." ";
            }
            echo "<br />";
            echo "<br />";

             for($i=0; $i < $len; $i++){
                 for($j=0; $j < $len-$i-1; $j++){
                     if($student[$j] > $student[$j+1]){
                         $t = $student[$j];
                         $student[$j] = $student[$j+1];
                         $student[$j+1] = $t;
                     }
                 }
             }

             echo "Sorted students list <br />";
             
             for($i=0; $i < $len; $i++){
                 echo $student[$i]." <br />";
             }
        ?>
    </body>
</html>