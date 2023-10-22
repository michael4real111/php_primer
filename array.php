<?php
    $title = "Array";
    include 'includes/header.php';
?>
    <h1><?php echo $title ?></h1>

    <?php

     $numbers = array(1,20,3,20,7,6,56,1,9,10);
            
        echo "<p>The Number is: $numbers[3]</p>";
    
        $size =count ($numbers);
        echo "<p>The Array size number is: $size</p>";
    
        echo "<p>All numbers in array are:</p>";
        for($count = 0; $count < $size; $count++){
        
            echo "$numbers[$count], ";

    }

    ?>
<?php
require 'includes/footer.php';
?>