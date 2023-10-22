<?php
    $title = "Function";
    include 'includes/header.php';
?>
    <h1><?php echo $title ?></h1>
    
    <?php

    // Creating function
    function writeMessage(){
        echo "This is a Function Message";
    }

    // Calling the function
    writeMessage();

    // Function with Parameters
    echo '<br/>';
    echo '<br/>';
    function addFunction($num1, $num2){
        $sum = $num1 +$num2;

        echo "The sum of number $num1 and number $num2 is: $sum <br/>";
    }
    // Pass by refrence by using &
    function changenum(&$num){    
        $num = $num +10;
    }

    function returnproduct($num1, $num2){
        $prod = $num1 * $num2;
        return $prod;
    }

    $num = 10;
    addFunction(5,23);
    addFunction(5,$num);
    addFunction('30',"50");

    changenum($num);
    echo $num . '<br/>';

    $return_value = returnproduct(10,200);
    echo $return_value . '<br/>';

    ?>

<?php
require 'includes/footer.php';
?>