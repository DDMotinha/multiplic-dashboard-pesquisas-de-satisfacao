<?php

    include 'config.php';

    $sql = "SELECT * FROM aswr_quest";
    $result = mysqli_query($link, $sql);

  

    if (mysqli_num_rows($result) > 0) {
    // Liberação de dados em linhas
    echo "<table class='table'><thead class='thead-dark'><tr><th scope='col'>ID</th><th scope='col'>Pergunta 1</th><th scope='col'>Pergunta 2</th><th scope='col'>Pergunta 3</th><th scope='col'>Pergunta 4</th><th scope='col'>Pergunta 5</th><th scope='col'>Pergunta 6</th><th scope='col'>Pergunta 7</th><th scope='col'>Pergunta 8</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["answ1"]."</td><td>".$row["answ2"]."</td><td>".$row["answ3"]."</td><td>".$row["answ4"]."</td><td>".$row["answ5"]."</td><td>".$row["answ6"]."</td><td>".$row["answ7"]."</td><td>".$row["answ8"]."</td></tr>";
    }
    echo "</table>";
    }

    
    mysqli_close($link);

?>