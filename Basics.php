<?php
    #Integers && Doubles
    $num1 = 12;
    $num2 = 12.53;
    $sum = $num1 + $num2;
    print("$num1 + $num2 = $sum \n");
    
    #Boolean either True or False
    if($num1 < $num2)
        print("$num2 is greater than $num1 \n");
    else
        print("$num1 is greater than $num2 \n");
    
    #Null or null
    $my_var = NULL;
    $my_var1 = null;

    if($my_var == $my_var1)
        print("True \n");
    else
        print("False \n");
    

    #String
    $name = "Rajvardhan";
    $intro = 'My name is $name';
    $intro1 = "My name is $name";

    print("$intro \n");
    print("$intro1 \n");

    #Here Document
    $introduction = <<< End
    My name is Rajvardhan singh thakur
    I'm a junior software enginner at Codes For Tomorrow
    I live in indore \n
    End;
    print $introduction;


?>