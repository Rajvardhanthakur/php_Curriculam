<html>
    <body>
        <?php
            $arr = array(array(4,5,1),
                         array(6,3,7),
                         array(5,2,5));
            
            echo "<br />";

            echo "<h1> Before Sorting : </h1><br />";
            foreach($arr as $i){
                foreach($i as $j){
                    echo "$j ";
                }
                echo "<br />";
            }

            $row = sizeof($arr[0]);
            $column = sizeof($arr);

            echo "<br />";

            for($k=0; $k < $row; $k++){
                for($i=0; $i < $column; $i++){
                    for($j=0; $j < $column -1; $j++){
                        if($arr[$k][$i] < $arr[$k][$j]){
                            $t = $arr[$k][$i];
                            $arr[$k][$i] = $arr[$k][$j];
                            $arr[$k][$j] = $t;
                        }
                    }
                }
            }

            echo "<br />";
            echo "<br />";

            echo "<h1> After Sorting : </h1><br />";
            foreach($arr as $i){
                foreach($i as $j){
                    echo "$j ";
                }
                echo "<br />";
            }


        ?>
    </body>
</html>