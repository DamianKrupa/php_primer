<?php include 'includes/header.php' ?>


<?php   

    function WrzaskWłodka() {
        echo "<br> Aghhhrr!";
    }

//echo WrzaskWłodka(); 




    function parametr_funkcja($a) {
        if ($a % 2) {
            echo "Parzysta";
}       else {
            echo "NIEparzysta";
}
    }


    for ($i=1; $i<=10; $i++) {
        echo "<hr>";
        echo WrzaskWłodka();
        echo parametr_funkcja($i);
    
    }

function zwiększ(&$num){
    $num = $num + 10;
}

$liczba = 100;
zwiększ($liczba);
echo "Moja liczba to: " . $liczba;




?>



<?php include 'includes/footer.php' ?>