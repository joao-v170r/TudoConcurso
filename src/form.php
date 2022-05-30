<?php
    include 'header.php';
?>
<div class="testbox">
  <form class="pageForm" action="/">
    <h1 class="pageTitle">Questionário</h1>
    <p class="question">Para qual área você deseja prestar concurso público?</p>
    <div class="question-answer">
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Judiciária</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Segurança</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Magistério</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Administrativa</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Fiscal</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Militar</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Controle</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Legislativa</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Bancária</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Alta Gestão</label>
    </div>
    <p class="question">Em qual região você mora?</p>
    <div class="question-answer">
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Norte</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Nordeste</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Sul</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Sudeste</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Centro-oeste</label>
    </div>
    <p class="question">Qual é o seu nível de escolaridade?</p>
    <div class="question-answer">
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Ensino médio completo</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Ensino superior incompleto</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Ensino superior completo</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Pós graduação em andamento</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Pós graduado</label>
    </div>
    <p class="question">Por qual área do conhecimento você se interessa mais?</p>
    <div class="question-answer">
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Ciências Exatas</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Ciências Humanas</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Direito</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Ciências Biológicas</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Engenharia</label>
    </div>
    <p class="question">Você trabalharia fora da região em que você mora atualmente?</p>
    <div class="question-answer">
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Sim</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Provavelmente sim</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Não sei</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Provavelmente não</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Não</label>
    </div>
    <p class="question">Qual é a sua pretensão salarial?</p>
    <div class="question-answer">
      <label><input class="pageInput" type="radio" value="none" name="visited" /> R$1.000 - R$2.000</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> R$2.000 - R$5.000</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> R$5.000 - R$8.000</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> R$8.000 - R$11.000</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Mais que R$ 11.000</label>
    </div>
    <p class="question">Com qual tipo de material de estudo você tem mais afinidade?</p>
    <div class="question-answer">
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Apostilas</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Vídeo-aulas</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Cursos presenciais</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Cursos à distância</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Provas antigas</label>
    </div>
    <p class="question">Sobre qual tipo de concurso você deseja se informar?</p>
    <div class="question-answer">
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Concurso público municipal</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Concurso público estadual</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Concurso público federal</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Concurso público distrital</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Todos</label>
    </div>
    <p class="question">Qual carga horária de trabalho seeria ideal para você?</p>
    <div class="question-answer">
      <label><input class="pageInput" type="radio" value="none" name="visited" /> 20h por semana</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> 30h por semana</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> 40h por semana</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Mais de 40h por semana</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Disponibilidade para plantões</label>
    </div>
    <p class="question">Você tem disponibilidade para realizar provas em outras cidades?</p>
    <div class="question-answer">
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Sim</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Provavelmente sim</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Não sei</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Provavelmente não</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Não</label>
    </div>
  </form>
</div>
<div class="btn-block">
  <button class="submitButton" type="submit" href="/">Enviar</button>
</div>
<?php
    include 'footer.php';
?>