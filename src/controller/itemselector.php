<?php
  
 include 'config.php';

    $sql1 = "SELECT sum(answ1)/count(*) FROM aswr_quest";

    $resultado1 = mysqli_query($link, $sql1);

    $linhas1 = mysqli_num_rows($resultado1);


    while($linhas1 = mysqli_fetch_array($resultado1)){
        $perg1 = $linhas1['sum(answ1)/count(*)'];

        }



    $sql2 = "SELECT sum(answ2)/count(*) FROM aswr_quest";

    $resultado2 = mysqli_query($link, $sql2);

    $linha2 = mysqli_num_rows($resultado2);


    while($linhas2 = mysqli_fetch_array($resultado2)){
        $perg2 = $linhas2['sum(answ2)/count(*)'];

        }



    $sql4 = "SELECT sum(answ4)/count(*) FROM aswr_quest";

    $resultado4 = mysqli_query($link, $sql4);

    $linhas4 = mysqli_num_rows($resultado4);


    while($linhas4 = mysqli_fetch_array($resultado4)){
        $perg4 = $linhas4['sum(answ4)/count(*)'];

        }



    $sql6 = "SELECT sum(answ6)/count(*) FROM aswr_quest";

    $resultado6 = mysqli_query($link, $sql6);

    $linhas6 = mysqli_num_rows($resultado6);


    while($linhas6 = mysqli_fetch_array($resultado6)){
        $perg6 = $linhas6['sum(answ6)/count(*)'];

        }



    mysqli_close($link);


?>