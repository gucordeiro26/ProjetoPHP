<?php

    require 'conexao.php';

    // Declaração SQL a ser executada
    $sql = "SELECT * FROM Clientes";

    // Executa a declaração SQL e retorna o resultado
    $result = $connection->query($sql);

    // Verificar se há linhas de registros no resultado
    if ($result->num_rows > 0) {

        // Faz Loop em cada registro recuperado
        while ($row = $result->fetch_assoc()) {
            // Access the data in each row
                    echo $row["CodCli"] . '<br>';
                    echo $row["Nome"] . '<br>';
                    echo $row["Contato"] . '<br>';
                    echo $row["Cargo"] . '<br>';
                    echo $row["Endereco"] . '<br>';
                    echo $row["Cidade"] . '<br>';
                    echo $row["Regiao"] . '<br>';
                    echo $row["CEP"] . '<br>';
                    echo $row["Pais"] . '<br>';
                    echo $row["Telefone"] . '<br>';
                    echo $row["Fax"] . '<br>';
        }

    } else {
        echo "Nenhum registro encontrado!";
    }

?>