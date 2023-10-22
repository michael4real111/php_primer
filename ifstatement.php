<?php
    $title = "If Else Statement";
    include 'includes/header.php';
?>
    <h1><?php echo $title ?></h1>

    <h3 style="color: red"> </h3>
    <?php

    echo " <h2>If Statement</h2>";
    
    $grade = 40;

    if($grade>= 50)
    {
        echo '<h3 style="color: green"> Congrates you Pass</h3>';
    }
    else
    {
        echo '<h3 style="color: red">Unfortunately you Failed</h3>';
    }
    $gradeletter ='A';
    if($gradeletter== 'A')
    {
        echo '<h2> You got a A </h2>';
    }
    elseif ($gradeletter=='B')
    {
        echo '<h2> You got a B </h2>';
    }
        ?>
<?php
require 'includes/footer.php';
?>