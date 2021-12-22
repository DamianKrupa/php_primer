<?php 
    $title = "STRINGOS";
    include 'includes/header.php' 

?>



<?php
    $fraza1 = "wyborczy";
    $fraza2 = " sprawił, że społeczeństwo straciło zaufanie do elit.";
    $fraza3 = " koniuszy, kasztelan, komiwojażer, kustosz, szambelan";
    
    echo "<h1>" . ucfirst($fraza1) . str_repeat($fraza2, 3) . strtoupper($fraza1) . "</h1>";
    echo substr($fraza3, 5, 10);
    echo "<br> Get position of string " . strpos($fraza2, 'a');
    echo "<br> Replace " . str_replace($fraza3, "koniuszy", "G");
    echo "<br> strchr toooo " . strchr($fraza3, "ż");
    echo "<br> Jak działa strlen?: " . strlen($fraza1);

?>


<?php require 'includes/footer.php'; ?>

