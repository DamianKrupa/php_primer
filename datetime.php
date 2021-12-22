<?php 
    $title = "DATAOS";
    include 'includes/header.php' 

?>

    
<?php

$datenow = date("Y/m/d");
$coś = getdate();
//echo "Teraz jest godzina $datenow a może " . "coś:" . $coś['mday'] . " albo " . $coś['mon'];
print date('d/m/y G.i:s') . "<br>";
print date("j of F Y, \a\\t g.i a", time());

?>

<?php require 'includes/footer.php'; ?>