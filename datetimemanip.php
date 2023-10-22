<?php
    $title = "Date and Time";
    include 'includes/header.php';
?>
    <h1><?php echo $title ?></h1>

    <?php
        $datenow = getdate();
        echo "<p>Today's Date</p>";
        echo $datenow['mday'] . '<br/>';
        echo $datenow['mon'] . '<br/>';
        echo $datenow['year'] . '<br/>';
        echo '<br/>';
        echo "Today's Date: ". $datenow['mday'] . '/'. $datenow['mon'] . '/' . $datenow['year'] . '<br/>' ;
    
        echo time();
        echo '<br/>';
        echo '<br/>';
        print date("d/m/y G:i:s<br>", time()) . '<br/>';
        print "Today is ";
        print date ("d F Y, \a\\t g:i a", time());
        ?>
<?php
require 'includes/footer.php';
?>