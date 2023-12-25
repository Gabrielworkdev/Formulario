<?php

//aula parte1
// CONECTANDO COM O BANCO DE DADOS
include_once("conexao.php");
    //é necessário incluir este código abaixo
    $sql = "select * from avaliacao where nome like '%$filtro%'";
    $consulta = mysqli_query($conn, $sql);
    $registros = mysqli_num_rows($consulta);

    $filtro = isset($_GET['filtro'])?$_GET['filtro']:"";
    //comando para filtrar qualquer palavra que o usuário deseja
    //$sql = "select * from usuarios where profissao like '%$filtro%' order by nome";
    //$consulta = mysqli_query($conn, $sql);
    //numero de linhas registros
    //$registros = mysqli_num_rows($consulta);
    //FECHANDO CONEXÃO

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container1">
        <nav>
            <ul class="menu">
                <a href="formulario.php"><li>Cadastro</li></a>
                <!---<a href="consultas.php"><li>Consultas</li></a>---->
            </ul>
        </nav>
        <!--SECAO PARA ENVIAR OS DADOS PARA O BANCO, DIRECIONAR PARA OUTRA PÁGINA-->
        <section><h1>Consultas </h1>
            <hr> <br><br>
            <!----FORMULARIO DE PESQUISA E FILTRO-->
           
            <form  method ="get" action="">
                Filtrar por Nome: <input type="text" name="filtro" class="campo" required autofocus>
                <input type="submit" value=" Pesquisar" class="btn">

            </form>
           

            <?php
            print "Resultado da pesquisa com a palavra: <strong>$filtro</strong> <br><br>";
            print "$registros registros encontrados.";
            print "<br><br><br>";

            //LAÇO DE REPETIÇÃO CONSULTANDO O REGISTRO NO BANCO DE DADOS

            while($exibirRegistros = mysqli_fetch_array($consulta)){
                //$codigo = $exibirRegistros[0];
                $matricula = $exibirRegistros[0];
                $nome = $exibirRegistros[1];
                //$profissao = $exibirRegistros[3];
                //$salario =  $exibirRegistros[4];
                print "<article>";

               print "$matricula<br><br><br>";
                print "$nome<br>";
               // print "$matricula<br>";
                //print "$profissao<br>";
                //print "$salario";


                print"</article>";

            }
            mysqli_close($conn);

            ?>
           
            
        </section>     
    </div>
    
</body>
</html>

<!--CONFIGURANDO PAGINA DE CONSULTA 
 ABRINDO O BD NO SQL  -- USE NOME DO BANCO 

 PESQUISNADO DADOS SELECT * FROM NOME DA TABELA


 aplicando o comando de filtro no banco 

 SELECT * FROM `avaliacao` WHERE 1
-->