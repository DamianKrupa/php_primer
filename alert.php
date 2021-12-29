<?php 
    $title = "ALERTOS";
    include 'includes/header.php'; 




$x = 8;

while($x <= 2) {
  echo '<h3 <br style="color: red"> KOCHAM SYLWUNIĘ ojoj! </br> </h3>'; 
  $x++;
}


$cars = array("Volvo", "BMW", "Toyota");
for ($i = 0; $i <= count($cars)-1; $i++) {
    echo "I like $cars[$i] <br>"; 
}

$pusty_koszyk = array("Seat", "Audi", "Skoda");
for ($i = 0; $i <= 3; $i++) {
    for ($x = 0; $x <= count($cars)-1; $x++) { 
        $pusty_koszyk[] = "$pusty_koszyk[$i]=======$cars[$x]";
    }
     
}


echo "<br>";
print_r($pusty_koszyk);
echo "<br>";



require 'includes/footer.php'; ?>

<button action="https://google.com" type="button" class="btn btn-success">Ale ładniucha ze mnie!</button>

<form action="https://google.com">
    <input type="submit" value="Go to Google" />
</form>
