<?php include 'includes/header.php' ?>

    
<?php
$favcolor = "blue";

switch ($favcolor) {
  case "red":
    echo '<h3 <br style="color: red">Your favorite color is red! </br> </h3>';
    break;
  case "blue":
    echo '<h3 <br style="color: blue">Your favorite color is blue! </br> </h3>';
    break;
  case "green":
    echo '<h3 <br style="color: green">Your favorite color is green! </br> </h3>';;
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
?>





<?php include 'includes/footer.php' ?>