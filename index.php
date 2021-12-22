<?php 
    $title = "INDEXOSES";
    include 'includes/header.php' 

?>

<h1><li><a href=string.php>Stringi </a> </li></h1>
<?php

$a = 12;
$b = 12;
$c = 12;

if ($a > $b) {
    echo "a is bigger than b";
} elseif ($a == $b) {
    echo "a is equal to b";
} elseif ($a == $c) {
    echo "Wytrzmamy to naprężenie";    
} else {
    echo "a is smaller than b";
}
?>


<h3 style="color: red"></h3>
<?php
/* example 1 */

for ($i = 1; $i <= 15; $i++) {
    if ($i < 5) {
        echo "<br>********\</br>";
    } elseif ($i == 6) {
        echo "<br>Tu jest szóstka</br>";
    } elseif ($i == 12) {
        echo "<br>mam dość</br>";    
    } else {
        echo "<br>********</br>";
    }
}
?>

<ul>
    <li><a href="http://www.google.com">Mores  </a></li>
</ul>

<?php require 'includes/footer.php'; ?>