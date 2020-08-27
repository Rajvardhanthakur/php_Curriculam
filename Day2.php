<?php
    #Constant
    define("NAME", "Rajvardhan");
    echo NAME,"\n";
    echo constant("NAME"),"\n";

    #Predefined constansts 
    echo __LINE__,"\n";
    echo __FILE__,"\n";

    # program to print 1 to 100
    for($i = 1; $i <=100; $i++){
        echo $i," ";
    }
    echo "\n";
    
    #Table of any number
    $num = 2;
    for($i = 1; $i <= 10; $i++){
        echo $num." * ".$i." = ".$num * $i."\n";
    }

    #Palindrome Number 
    $num1 = 707;
    $temp = 0;
    $rev = 0;

    $num2 = $num1;

    do{
        $temp1 = $num2 % 10;
        $rev = $rev*10 + $temp1;
        $num2 = $num2 / 10;
    }while(floor($num2));

    if($rev == $num1){
        echo "Number is Palindrome, reverse of $num1 is $rev \n";
    }
    else{
        echo "Number is not Palindrome, number is $num1 reverse number is $rev \n";   
    }
?>