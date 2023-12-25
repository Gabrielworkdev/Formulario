<?php

//segunda pag
include_once("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST"){
   $matricula = $_POST["matricula"];
    $nome = $_POST["nome"];
    $Questao01 = $_POST["Questao01"];
    $Questao02 = $_POST["Questao02"];
    $Questao03 = $_POST["Questao03"];
   //$Questao04 = $_POST["Questao04"];
    //$Questao05 = $_POST["Questao05"];
    //$Questao06 = $_POST["Questao06"];
    //$Questao07 = $_POST["Questao07"];
    //$Questao08 = $_POST["Questao08"];
    //$Questao09 = $_POST["Questao09"];
    //$Questao10 = $_POST["Questao10"];
}
    
    // Prepara a instrução SQL para a inserção
    $sql = "INSERT INTO avaliacao(matricula,nome,Questao01,Questao02,Questao03) VALUES ( '$matricula','$nome','$Questao01','$Questao02','$Questao03')";
    $salvar = mysqli_query($conn, $sql);

    // linha que serão afetadas durante a consulta
    $linhas = mysqli_affected_rows($conn)
    // Executa a inserção


//mysqli_close($conn)
?>
<?php
if($conn->query($sql) === TRUE){
  echo  "Dados inseridos com sucesso!";
}else{
  echo "Erro na inserção: " . $conn->error;
}
//echo  Fecha a conexão
$conn->close();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retorno</title>
    
</head>
<body>
<form action="formulario.php" method= "POST">
<h1> Obrigado por preencher nosso formulário !</h1>
</form>




<button class="btn"><a href="./formulario.php">voltar</button></a>
<button class="btn"><a href="./consulta.php">consultar</button></a>
      <?php
      if(linhas == 1){
                print"Consulta";
      }else{
                print"você já preencheu este formulário.<br> Entre em contato com a T.I caso precise alterar algo.";
      }
              
      ?>

     
</body>
</html>