<?php

    require "./sistema/Conexao.php";
    $conexao = (new Conexão("localhost","root","","cadastro"));
    
    require "./sistema/CardDatePerson.php";
    $cards = new CardDatePerson($conexao->conectar());
    
    ?>
  