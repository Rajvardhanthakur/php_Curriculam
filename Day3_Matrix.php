<html>
    <?php
       $arr1 = array(array(2,4,5),
                     array(4,1,1),
                     array(6,7,5));
                     
        $arr2 = array(array(2,4,5),
                     array(4,1,1),
                     array(6,7,5));
        
        $len = 3;
        $res;

        echo "Matrix A: <br />";
        for($i = 0; $i < $len; $i++){
            for($j = 0; $j < $len; $j++){
                echo $arr1[$i][$j]." ";
            }
            echo "<br />";
        }

        echo "Matrix B: <br />";
        for($i = 0; $i < $len; $i++){
            for($j = 0; $j < $len; $j++){
                echo $arr2[$i][$j]." ";
            }
            echo "<br />";
        }

        for($i = 0; $i < $len; $i++)
        {
            for($j = 0; $j < $len; $j++){
                $res[$i][$j] = 0;
                $res[$i][$j] += $arr1[$i][$j] * $arr2[$i][$j];
            }
        }


        echo "<br />";
        echo "<br />";
        echo "Multiplication of two matrix : <br />";

        for($i = 0; $i < $len; $i++){
            for($j = 0; $j < $len; $j++){
                echo $res[$i][$j]." ";
            }
            echo "<br />";
        }
    ?>
<html>