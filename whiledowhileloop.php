<?php
    $title = "While / Do While Loop";
    include 'includes/header.php';
?>
<h1><?php echo $title ?></h1>

    <?php
    $grade = 5;
    while($grade < 10)
    {
        echo '<p>Grade is less than 10!</p>';
        $grade++;   
    }

    echo'<p>Exit Loop</p>';
    ?>

    <h1>Do While Loop</h1>

    <?php
    $grade = 0;
    do{
        echo '<p>Do while Loop</p>';
        $grade++;
    }while($grade < 13);
    ?>

<?php
require 'includes/footer.php';
?>