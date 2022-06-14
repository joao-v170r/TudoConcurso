<?php
    include 'header.php';
?>
<div class="testbox">
  <form class="pageForm" action="" method="post">
    <h1 class="pageTitle">Questionário</h1>
    <p class="question">Para qual dessas áreas você prefere prestar concurso público?</p>
    <div class="question-answer">
      <label><input class="pageInput" type="radio" value="Judiciario" name="questao1" /> Judiciária</label>
      <label><input class="pageInput" type="radio" value="Segurança" name="questao1" /> Segurança</label>
      <label><input class="pageInput" type="radio" value="Magistério" name="questao1" /> Magistério</label>
      <label><input class="pageInput" type="radio" value="Adminstrativo" name="questao1" /> Administrativa</label>
      <label><input class="pageInput" type="radio" value="Fiscal" name="questao1" /> Fiscal</label>
    </div>
    <p class="question">Para qual dessas áreas você prefere prestar concurso público?</p>
    <div class="question-answer">
      <label><input class="pageInput" type="radio" value="Militar" name="questao2" /> Militar</label>
      <label><input class="pageInput" type="radio" value="Controle" name="questao2" /> Controle</label>
      <label><input class="pageInput" type="radio" value="Lesgislativa" name="questao2" /> Legislativa</label>
      <label><input class="pageInput" type="radio" value="Bancária" name="questao2" /> Bancária</label>
      <label><input class="pageInput" type="radio" value="Alta Gestão" name="questao2" /> Alta Gestão</label>
    </div>
    <p class="question">Em qual região você mora?</p>
    <div class="question-answer">
      <label><input class="pageInput" type="radio" value="Norte" name="questao3" /> Norte</label>
      <label><input class="pageInput" type="radio" value="Nordeste" name="questao3" /> Nordeste</label>
      <label><input class="pageInput" type="radio" value="Sul" name="questao3" /> Sul</label>
      <label><input class="pageInput" type="radio" value="Sudeste" name="questao3" /> Sudeste</label>
      <label><input class="pageInput" type="radio" value="Centro-oeste" name="questao3" /> Centro-oeste</label>
    </div>
    <p class="question">Qual é o seu nível de escolaridade?</p>
    <div class="question-answer">
      <label><input class="pageInput" type="radio" value="Ensino médio completo" name="questao4" /> Ensino médio completo</label>
      <label><input class="pageInput" type="radio" value="Ensino superior incompleto" name="questao4" /> Ensino superior incompleto</label>
      <label><input class="pageInput" type="radio" value="Ensino superior completo" name="questao4" /> Ensino superior completo</label>
      <label><input class="pageInput" type="radio" value="Pós graduação em andamento" name="questao4" /> Pós graduação em andamento</label>
      <label><input class="pageInput" type="radio" value="Pós graduado" name="questao4" /> Pós graduado</label>
    </div>
    <p class="question">Por qual área do conhecimento você se interessa mais?</p>
    <div class="question-answer">
      <label><input class="pageInput" type="radio" value="Ciências Exatas" name="questao5" /> Ciências Exatas</label>
      <label><input class="pageInput" type="radio" value="Ciências Humanas" name="questao5" /> Ciências Humanas</label>
      <label><input class="pageInput" type="radio" value="Direito" name="questao5" /> Direito</label>
      <label><input class="pageInput" type="radio" value="Ciências Biológicas" name="questao5" /> Ciências Biológicas</label>
      <label><input class="pageInput" type="radio" value="Engenharia" name="questao5" /> Engenharia</label>
    </div>
    <p class="question">Você trabalharia fora da região em que você mora atualmente?</p>
    <div class="question-answer">
      <label><input class="pageInput" type="radio" value="none" name="questao6" /> Sim</label>
      <label><input class="pageInput" type="radio" value="none" name="questao6" /> Provavelmente sim</label>
      <label><input class="pageInput" type="radio" value="none" name="questao6" /> Não sei</label>
      <label><input class="pageInput" type="radio" value="none" name="questao6" /> Provavelmente não</label>
      <label><input class="pageInput" type="radio" value="none" name="questao6" /> Não</label>
    </div>
    <p class="question">Qual é a sua pretensão salarial?</p>
    <div class="question-answer">
      <label><input class="pageInput" type="radio" value="1" name="questao7" /> R$1.000 - R$2.000</label>
      <label><input class="pageInput" type="radio" value="2" name="questao7" /> R$2.000 - R$5.000</label>
      <label><input class="pageInput" type="radio" value="5" name="questao7" /> R$5.000 - R$8.000</label>
      <label><input class="pageInput" type="radio" value="8" name="questao7" /> R$8.000 - R$11.000</label>
      <label><input class="pageInput" type="radio" value="11" name="questao7" /> Mais que R$ 11.000</label>
    </div>
    <p class="question">Com qual tipo de material de estudo você tem mais afinidade?</p>
    <div class="question-answer">
      <label><input class="pageInput" type="radio" value="none" name="questao8" /> Apostilas</label>
      <label><input class="pageInput" type="radio" value="none" name="questao8" /> Vídeo-aulas</label>
      <label><input class="pageInput" type="radio" value="none" name="questao8" /> Cursos presenciais</label>
      <label><input class="pageInput" type="radio" value="none" name="questao8" /> Cursos à distância</label>
      <label><input class="pageInput" type="radio" value="none" name="questao8" /> Provas antigas</label>
    </div>
    <p class="question">Sobre qual tipo de concurso você deseja se informar?</p>
    <div class="question-answer">
      <label><input class="pageInput" type="radio" value="none" name="questao9" /> Concurso público municipal</label>
      <label><input class="pageInput" type="radio" value="none" name="questao9" /> Concurso público estadual</label>
      <label><input class="pageInput" type="radio" value="none" name="questao9" /> Concurso público federal</label>
      <label><input class="pageInput" type="radio" value="none" name="questao9" /> Concurso público distrital</label>
      <label><input class="pageInput" type="radio" value="none" name="questao9" /> Todos</label>
    </div>
    <p class="question">Qual carga horária de trabalho seeria ideal para você?</p>
    <div class="question-answer">
      <label><input class="pageInput" type="radio" value="none" name="questao10" /> 20h por semana</label>
      <label><input class="pageInput" type="radio" value="none" name="questao10" /> 30h por semana</label>
      <label><input class="pageInput" type="radio" value="none" name="questao10" /> 40h por semana</label>
      <label><input class="pageInput" type="radio" value="none" name="questao10" /> Mais de 40h por semana</label>
      <label><input class="pageInput" type="radio" value="none" name="questao10" /> Disponibilidade para plantões</label>
    </div>
    <p class="question">Você tem disponibilidade para realizar provas em outras cidades?</p>
    <div class="question-answer">
      <label><input class="pageInput" type="radio" value="none" name="questao11" /> Sim</label>
      <label><input class="pageInput" type="radio" value="none" name="questao11" /> Provavelmente sim</label>
      <label><input class="pageInput" type="radio" value="none" name="questao11" /> Não sei</label>
      <label><input class="pageInput" type="radio" value="none" name="questao11" /> Provavelmente não</label>
      <label><input class="pageInput" type="radio" value="none" name="questao11" /> Não</label>
    </div>
  </form>
</div>
<div class="btn-block">
  <button class="submitButton" type="submit" href="/">Enviar</button>
</div>
<?php
    include 'footer.php';
?>
