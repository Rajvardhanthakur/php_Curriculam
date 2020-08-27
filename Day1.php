<html>
    <body>
    <?php
    #Integers && Doubles
    $num1 = 12;
    $num2 = 12.53;
    $sum = $num1 + $num2;
    print("$num1 + $num2 = $sum <br />");
    
    #Boolean either True or False
    if($num1 < $num2)
        print("$num2 is greater than $num1 <br />");
    else
        print("$num1 is greater than $num2 <br />");
    
    #Null or null
    $my_var = NULL;
    $my_var1 = null;

    if($my_var == $my_var1)
        print("True <br />");
    else
        print("False <br />");
    

    #String
    $name = "Rajvardhan";
    $intro = 'My name is $name';
    $intro1 = "My name is $name";

    print("$intro <br />");
    print("$intro1 <br />");

    #Here Document
    $introduction = <<< End
    My name is Rajvardhan singh thakur
    I'm a junior software enginner at Codes For Tomorrow
    I live in indore <br />
    End;
    print $introduction;


?>
    </body>
</html>