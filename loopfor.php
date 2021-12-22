
<?php 
    $title = "PĘTLOS";
    include 'includes/header.php' 

?>

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


$x = 8;

while($x <= 10) {
  echo "The number is: $x <br>";
  $x++;
}


$x = 1;
do {
  echo "Robię zamieszanie o numerze $x <br>";
  $x++;
} while ($x <= 10);
?>


<?php require 'includes/footer.php'; ?>

