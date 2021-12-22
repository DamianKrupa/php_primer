<?php include 'includes/header.php' ?>
    


<?php
/* example 1 */

for ($i = 1; $i <= 30; $i++) {
    if ($i == 5) {
        echo '<h3 <br style="color: red">******* </br> </h3>';
    } elseif ($i == 6) {
        echo '<h3 <br style="color: blue">Tu jest szóstka</br></h3>';
    } elseif ($i == 12) {
        echo "<br>mam dość</br>";    
    } else {
        echo '<h3 <br style="color: green">******* </br> </h3>';
    }
}

$zmienna = "D";
if($zmienna == "A" || $zmienna == "B"){
    echo "Zdałeś";
} elseif ($zmienna == "C") {
    echo "Nie zdałeś, ale możesz podejść jeszcze raz do egzaminu";
} else {
    echo "Nie zdałeś";
}








?>

<ul>
    <li><a href="http://www.google.com">Mores  </a></li>
</ul>





<?php include 'includes/footer.php' ?>