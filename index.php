<html>
<head>

<?php 

include "statistics.php";
/// AÑADE EL CODIGO NECESARIO PARA PODER ACCEDER AL CONTENIDO DEL FICHERO statistics.php

?>

</head>


<body>

<form method="post" action="index.php">
  Game Name: <input type="text" name="gameName">
  Team name: <input type="text" name="tName">
  Team number: <input type="text" name="number">
  Won yes: <input type="radio" name="wonYes">
  Won no: <input type="radio" name="wonNo">
  Score: <input type="text" name="score">
  Date: <input type="date" name="date">

  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['gameName'];
  $tName = $_POST['tName'];
  $teamMembers = $_POST['number'];
  $score = $_POST['score'];
  $date = $_POST['date'];

}



EJEMPLO:
     
    $db = new DBManager();
    
    $stat = new Statistics($name, $tName, $teamMembers, $score, true, $date);
    $db->insertStatistics($stat);

    $statsArray = $db->getStatistics();

    echo "<ul>";
    foreach ($statsArray as $stats){
        echo "<li>$stats</li>";
      
    }
    echo "<ul>";
    
   

?>

</body>

</html>