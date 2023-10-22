<?php
    $title = "Switch Statement";
    include 'includes/header.php';
?>
<h1><?php echo $title ?></h1>

    <?php

    $grade = 'B';
    
    switch($grade){
        case 'A':
            echo '<h2>Excillent!</h2>';
            break;
        case 'B':
            echo '<h2>Good!</h2>';
            break;
        case 'c':
            echo '<h2>Pass!</h2>';
            break;
        case 'd':
            echo '<h2>ok!</h2>';
            break;        
        default:
        echo '<h2>You have Failed</h2>';
            break; 

    }

    ?>
<?php
require 'includes/footer.php';
?>