<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="pt-BR">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Formulario</title>

  <head>
    <title>Formulário-Plano de Saúde</title>
     
  </head>

<body>
<?php

?>


  <div class="form-container">
    <div class="topo"></div> <br><br><br>
    <img class="imagem" src="./assets/fdfdf.png" alt=""><br>

    <article class="plano-saude">
      

      <h1><strong>Formulário de Resumo Anual</strong></h1>

      <p>
      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem distinctio aspernatur fuga dolor voluptate. Et commodi omnis error laborum. Laudantium nostrum omnis rem quis? Consequatur repellendus doloremque suscipit neque sit? <strong>xxx</strong> xxx <strong>xxx</strong> xxx.
      </p>

      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem distinctio aspernatur fuga dolor voluptate. Et commodi omnis error laborum. Laudantium nostrum omnis rem quis? Consequatur repellendus doloremque suscipit neque sit?
      </p>
    </article>

    
    <form class="form1" action="processa.php" method="post">
      <div class="form-title"><strong>Informe seus dados</strong></div>
      <div class="form-topic">
        <label class="form-topic"for="matricula"><strong>Matrícula</strong></label>
        <input name="matricula"
     oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
     type = "number"
     maxlength = "11" required placeholder="Digite sua matrícula">
      </div>

      <div class="form-topic">
        <label class="img" for="nome"><strong>Nome</strong></label>
        <input type="text" maxlenght="3" id="nome" placeholder="Digite seu nome" name="nome" required>
      </div>


      <div class="bk">
        <div class="form-question" required> <strong>Questão 01</strong> Você está satisfeito com a maneira que os serviços do plano de saúde são descritos e comunicados?</div>
        <label class="checkbox-label"><input type="radio" id="perguntaServico1" name="Questao01" value="satisfeito" required> Satisfeito</label>
        <label class="checkbox-label"><input type="radio" id="perguntaServico2" name="Questao01" value="muitosatisfeito" required> Muito Satisfeito</label>
        <label class="checkbox-label"><input type="radio" id="perguntaServico3" name="Questao01" value="insatisfeito" required> Insatisfeito</label>
        <label class="checkbox-label"><input type="radio" id="perguntaServico4" name="Questao01" value="muitoinsatisfeito" required> Muito Insatisfeito</label>
      </div>
      <div class="bk">
        <div class="form-question"> <strong>Questão 02</strong> Qual o seu grau de satisfação com o canal de atendimento da <strong>ASSIM</strong>?</div>
        <label class="checkbox-label"><input type="radio" id="perguntaAtendimento1" name="Questao02" value="satisfeito" required> Satisfeito</label>
        <label class="checkbox-label"><input type="radio" id="perguntaAtendimento2" name="Questao02" value="muitosatisfeito" required> Muito Satisfeito</label>
        <label class="checkbox-label"><input type="radio" id="perguntaAtendimento3" name="Questao02" value="insatisfeito" required> Insatisfeito</label>
        <label class="checkbox-label"><input type="radio" id="perguntaAtendimento4" name="Questao02" value="muitoinsatisfeito" required> Muito Insatisfeito</label>
      </div>

      <div class="bk">
        <div class="form-question"> <strong>Questão 03</strong> Você tem ou teve dificuldade em realizar uma marcação de consulta, exame ou internação?</div>
        <label class="checkbox-label"><input type="radio" id="perguntaPlano1" name="Questao03" value="sim" required> Sim</label>
        <label class="checkbox-label"><input type="radio" id="perguntaPlano2" name="Questao03" value="nao" required> Não</label>
      </div>
      <div class="bk">
        <div class="form-question">  <strong>Questão 04</strong> Qual sua maior dificuldade na utilização dos serviços do plano de saúde? </div>
        <label class="checkbox-label"><input type="radio" id="perguntaConsulta1" name="Questao04" value="Marcação de Consultas" required> Marcação de Consultas</label>
        <label class="checkbox-label"><input type="radio" id="perguntaConsulta2" name="Questao04" value="Realização de Exames" required> Realização de Exames</label>
        <label class="checkbox-label"><input type="radio" id="perguntaConsulta2" name="Questao04" value="Internação em Unidades Hospitalares" required> Internação em Unidades Hospitalares</label>
        <label class="checkbox-label"><input type="radio" id="perguntaConsulta2" name="Questao04" value="Procedimento sem Cobertura" required> Procedimento sem Cobertura</label>
        <label class="checkbox-label"><input type="radio" id="perguntaConsulta2" name="Questao04" value="Não tenho dificuldades" required> Não tenho dificuldades</label>
      </div>
      <div class="bk">
        <div class="form-question"> <strong>Questão 05</strong> Qual o seu grau de satisfação com os serviços prestados?</div>
        <label class="checkbox-label"><input type="radio" id="perguntaSatisfacao1" name="Questao05" value="satisfeito" required> Satisfeito</label>
        <label class="checkbox-label"><input type="radio" id="perguntaSatisfacao2" name="Questao05" value="muitosatisfeito" required> Muito Satisfeito</label>
        <label class="checkbox-label"><input type="radio" id="perguntaSatisfacao3" name="Questao05" value="insatisfeito" required> Insatisfeito</label>
        <label class="checkbox-label"><input type="radio" id="perguntaSatisfacao4" name="Questao05" value="muitoinsatisfeito" required> Muito Insatisfeito</label>
      </div>

      <div class="bk">
        <div class="form-question"> <strong>Questão 06</strong> Você já realizou alguma reclamação direto ao Plano de Saúde que não foi resolvida?</div>
        <label class="checkbox-label"><input type="radio" id="perguntaPlano1" name="Questao06" value="sim" required> Sim</label>
        <label class="checkbox-label"><input type="radio" id="perguntaPlano2" name="Questao06" value="nao" required> Não</label>
      </div>
      <div class="bk">
        <label class="form-question" for="pergunta2"> <strong>Questão 07</strong> Você possui algum <strong>ELOGIO</strong> ou<strong> QUEIXA </strong>relacionado aos serviços do Plano de Saúde?</label>
        <input type="text" maxlenght="255" id="perguntaQueixa1"  placeholder="Digite sua mensagem" name="Questao07" >
      </div>
      <div class="bk">
        <label class="form-question" class="form-question"for="pergunta2"> <strong>Questão 08</strong> Alguns dos seus dependentes no plano possuem <strong>elogio</strong> ou <strong>queixa</strong> relacionado aos serviços do Plano de Saúde? Se <strong>SIM</strong> especificar o nome do Dependente.</label>
        <input type="text" maxlength="255" id="perguntaQueixa2"  placeholder="Digite sua mensagem" name="Questao08" >
      </div>
      <div class="bk">
        <label class="form-question" for="pergunta2"> <strong>Questão 09</strong> Você possui alguma sugestão de melhoria ao Plano de Saúde ?</label>
        <input type="text"  maxlenght="255" id="perguntaQueixa3"  placeholder="Digite sua mensagem" name="Questao09" required>
      </div>
      <div class="bk">
        <div class="form-question"> <strong>Questão 10</strong> Em uma escala de “0” a “10”, qual o seu grau de satisfação com o Plano de Saúde. “0” significa que se sente totalmente insatisfeito: 10 significa que se sente totalmente satisfeito. No meio da escala está o 5 que significa neutro (nem satisfeito nem insatisfeito).</div>
        <label class="checkbox-label"><input type="radio" id="perguntaGrau1" name="Questao10" value="1" required> 1</label>
        <label class="checkbox-label"><input type="radio" id="perguntaGrau2" name="Questao10" value="2" required> 2</label>
        <label class="checkbox-label"><input type="radio" id="perguntaGrau3" name="Questao10" value="3" required> 3</label>
        <label class="checkbox-label"><input type="radio" id="perguntaGrau4" name="Questao10" value="4" required> 4</label>
        <label class="checkbox-label"><input type="radio" id="perguntaGrau5" name="Questao10" value="5" required> 5 (NEUTRO)</label>
        <label class="checkbox-label"><input type="radio" id="perguntaGrau6" name="Questao10" value="6" required> 6</label>
        <label class="checkbox-label"><input type="radio" id="perguntaGrau7" name="Questao10" value="7" required> 7</label>
        <label class="checkbox-label"><input type="radio" id="perguntaGrau8" name="Questao10" value="8" required> 8</label>
        <label class="checkbox-label"><input type="radio" id="perguntaGrau9" name="Questao10" value="9" required> 9</label>
        <label class="checkbox-label"><input type="radio" id="perguntaGrau10"name="Questao10" value="10" required> 10</label>
        
      </div>
      <div class="botao">
      <button class="submit-button" onclick="funcao1()" type="submit">Enviar</button>
      
      <button  class= "submit-button"type="reset"> Limpar formulário</button</span></span>
      </div>
    
         </div>
    </form>
  </div>
</body>

</html>