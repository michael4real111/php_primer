<?php
    $title = "Index";
    include 'includes/header.php';
?>

    <!-- Basic HTML -->
    <h1>Hello World HTML </h1>
    <br/>

    <?php

    //Printing in PHP
        echo 'Hello World Php';
        echo '<br/>';
        
   

    $name = 'Michael Dixon';
    $age = 26;

    echo '<br/>';
    echo 'What is your name?';
    echo '<br/>';
    echo $name;
    echo '<br/>';
    echo 'What is your age?';
    echo '<br/>';
    echo $age;
    echo '<br/>';

    echo '<h1> Welcome '.$name.' </h1>';
    echo '<br/>';
    echo '<h1> Who is '.$age.' </h1>';

    echo '<br/>';
    echo "<h1> How are you doing today $name ? </h1>";
    ?>

<button type="button" class="btn btn-dark"> Click Me </button>
<button type="button" class="btn btn-success"> Click Me </button>

<?php
    require 'includes/footer.php';
?>