<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cadastro";
    
    // Cria a conexão
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Verifica a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }
        
    // Define a consulta SQL
    $sql = "SELECT id ,nome, profissao, nascimento, sexo, peso, altura, nacionalidade FROM gafanhotos";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Itera sobre os resultados e imprime os dados
        while($row = $result->fetch_assoc()) {
            echo "<div class='gafanhoto'>
            <p>{$row["id"]}</p>
            <h2>".$row["nome"]."</h2> 
            <p> ola meu nome e ".$row["nome"]." e trabalho com ".$row["profissao"].", tenho 'nascimento' sou do genero ".$row["sexo"].", peso ".$row["peso"]."kg e tenho  ".$row["altura"]."cm de altura ,e sou de ".$row["nacionalidade"]."</p>
            </div>";
        }
    } else {
        echo "0 resultados";
    }

    // Fecha a conexão
    $conn->close();
    ?>
    