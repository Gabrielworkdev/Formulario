<?php
// Configurações do banco de dados
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "cadastro";

 // Cria uma conexão com o banco de dados
 $conn = mysqli_connect($servername, $username,$password,$dbname);
 // Verifica a conexão
 if (!$conn) {
    print("Erro na conexão ");
}
?>