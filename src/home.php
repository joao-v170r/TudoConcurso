<?php
    include 'header.php';
?>
<div class="body-content"> 
    <div class="row">
        <?php for($i = 0; $i < 5; $i++){ ?>
        <div class=" col-6">
            <div class="card card-notice">
                <img src="../assets/img/livros.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Concurso DPE PR</h5>
                    <p class="card-text"> A Defensoria Pública do Paraná divulgou o regulamento de seu novo concurso para o quadro de servidores. O regulamento vai nortear a contratação da banca e a elaboração do edital, que vai ofertar vagas para cargos de níveis superior, médio e médio/técnico.</p>
                    <p class="card-text"><small class="text-muted">Comissão formada</small></p>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card card-notice">
                <img src="../assets/img/livros.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Concurso DPE PR</h5>
                    <p class="card-text"> A Defensoria Pública do Paraná divulgou o regulamento de seu novo concurso para o quadro de servidores. O regulamento vai nortear a contratação da banca e a elaboração do edital, que vai ofertar vagas para cargos de níveis superior, médio e médio/técnico.</p>
                    <p class="card-text"><small class="text-muted">Comissão formada</small></p>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>     
</div>
<script>
</script>
<?php
    include 'footer.php';
?>