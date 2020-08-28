<html>
    <body>
       <?php
            $students = array(
                0 => array(
                    "name" => "john",
                    "age"  => 21
                ),
                1 => array(
                    "name" => "tyrion",
                    "age"  => 23
                ),
                2 => array(
                    "name" => "arya",
                    "age" => 18
                )
                );
                echo "<h1> Before sorting : </h1> <br />";

                foreach($students as $student){
                    foreach($student as $key => $val){
                        echo "$key : $val <br />";
                    }
                }

                $len = sizeof($students);
                echo "$len";

                for($i = 0; $i < $len; $i++){
                    for($j = 0; $j < $len -$i -1; $j++){
                        if($students[$j]["age"] > $students[$j+1]["age"]){
                            $temp = $students[$j];
                            $students[$j] = $students[$j+1];
                            $students[$j+1] = $temp; 
                        }
                    }
                }

                echo "<br />";
                echo "<br />";
                echo "<br />";

                echo "<h1> After sorting : </h1> <br />";

                foreach($students as $student){
                    foreach($student as $key => $val){
                        echo "$key : $val <br />";
                    }
                }


       ?>
    </body>
</html>