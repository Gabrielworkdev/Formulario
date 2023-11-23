<?php
// Configurações do banco de dados
    $servername = "127.0.0.1";
    $username = "roo";
    $password = "";
    $dbname = "avaliacao";

 // Cria uma conexão com o banco de dados
 $conn = new mysqli($servername, $username,$password,$dbname);
 // Verifica a conexão
 if (!$conn) {
    print("Erro na conexão ");
}
    ?>