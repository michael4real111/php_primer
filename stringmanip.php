<?php
    $title = "String Manipulation";
    include 'includes/header.php';
?>
<h1><?php echo $title ?></h1>
    <?php
    $phrase1 = "Student who came late with ";
    $phrase2 = "stand at the back of the class";
    $name = "michael dixon";

    echo "<p>$phrase1 $phrase2</p>";

    //another way
    echo $phrase1 . " John " . $phrase2;
    echo '<br/>';
    echo '<br/>';
    echo '<hr/>';
    //String Transformation
    echo 'Uppercase first letter: ' . ucfirst($name). '<br/>';
    echo 'Uppercase first letter of each word: ' . ucwords($name). '<br/>';    
    echo 'Uppercase: ' . strtoupper($name). '<br/>';
    echo 'lowercase: ' . strtolower("THIS WAS UPPERCASE"). '<bSr/>';
    echo '<hr/>';
    echo 'Repeat String: ' . str_repeat('M ' ,5) . '<br/>';
    echo 'Repeat String - Nested Function: ' . ucwords(str_repeat( $name ,5)) . '<br/>';
    echo 'Get a Substring: ' . substr( $name ,4, 10) . '<br/>';
    echo '<br/>';
    echo 'Get postion if string: ' . strpos( $name , 'i') . '<br/>';
    echo '<br/>';
    echo 'Find Character "M": ' . strchr( $name , 'M') . '<br/>';
    echo 'Find Character "i": ' . strchr( $name , 'i') . '<br/>';
    echo 'Find Character "e": ' . strchr( $name , 'e') . '<br/>';
    echo 'Find Character "n": ' . strchr( $name , 'n') . '<br/>';
    echo 'Find Character "x": ' . strchr( $name , 'x') . '<br/>';
    echo '<br/>';
    echo 'Find Length of string: ' . strlen($name) . '<br/>';
    echo '<br/>';
    echo 'Without Trim: ' . "A". " B C D " . "E" .  '<br/>';
    echo 'Trim Space on both sides: ' . "A". trim(" B C D ") . "E" .  '<br/>';
    echo 'Trim Space on the left: ' . "A". ltrim(" B C D ") . "E" .  '<br/>';
    echo 'Trim Space on the right: ' . "A". rtrim(" B C D ") . "E" .  '<br/>';

    echo 'Replace string with another: ' . str_replace("stand", "sit", $phrase2) . '<br/>';
    ?>


    
<?php
require 'includes/footer.php';
?>