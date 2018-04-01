<?php
    // VERIFICAR SE O USUARIO ESTA AUTENTICADO 
    require './function/verificar_login.php';

    // PEGANDO ID DA DISCIPLINA QUE SERA LISTADO OS ASSUNTO 
    $assunto_id = (isset($_GET['assunto']))? $_GET['assunto'] : null;


    // ADICIONANDO CLASS DE ASSUNTO 
    include './class/questões.php';

    // ESTANCIANDO A CLASS DE ASSUNTO 
    $questões = new Questões();

    // PEGANDO DADOS DA DISCIPLINA PARA EXIBIR NA PAGINA 
    $resultado_assunto = $questões->getInfoAssunto($assunto_id);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Questões - <?php echo $resultado_assunto['disciplina_assunto_nome']; ?></title>
        <!-- ADICIONANDO HEADER PADRÃO -->
        <?php include './template/header.php'; ?>
    </head>
    <body>
        <!-- ADICIONANDO A NAV BAR -->
        <?php include './template/navbar.php'; ?>

        <!-- END NAV BAR -->
        <div class="container">
            <div class="row" >
                <div class="col-md-9">
                    <div class="panel  panel-default">
                        <div class="panel-heading" id="title-panel">
                            Questões - <?php echo $resultado_assunto['disciplina_assunto_nome']; ?>      
                        </div>
                        <div class="panel-body">
                            <ol class="breadcrumb">
                                <li>
                                    <a href="./home">
                                        Disciplinas
                                    </a>
                                </li>
                                <li>
                                    <a href="./assunto?disciplina=<?php echo $resultado_assunto['disciplina_id']; ?>">
                                        <?php echo $resultado_assunto['disciplina_nome_abreviacao']; ?>
                                    </a>
                                </li>
                                <li class="active" >
                                    <a href="./assunto?disciplina=<?php echo $disciplina_id ?>">
                                        Assunto
                                    </a>
                                </li>
                            </ol>

                            <!-- Parte a ser repetida no while -->
                            <div class="panel panel-default" >
                                <div class="panel-heading">
                                    <a href="#">[Assunto 1]</a>
                                </div>
                            </div>
                            <!-- END parte a ser repetida no while -->
                        </div>
                    </div>
                </div>
                <!-- end col-md-6 --> 

                <div class="col-md-3">

                  <div class="panel panel-primary">
                    <div class="panel-heading" id="title-panel-select">Questões Selecionadas</div>
                    <div class="panel-body">
                      Panel content
                    </div>
                    <div class="panel-footer option-select">
                      <div class="btn-group btn-group-justified" role="group" aria-label="...">

                        <div class="btn-group" role="group">
                          <button type="button" class="btn btn-default">Clear All</button>
                        </div>

                        <div class="btn-group" role="group">
                          <button type="button" class="btn btn-default">Delete</button>
                        </div>

                        <div class="btn-group" role="group">
                          <button type="button" class="btn btn-default">Print</button>
                        </div>

                      </div>
                    </div>
                  </div>

                </div>
                <!-- end div col-ms-3  Questões selecionadas -->
            </div>
            <!-- end  row --> 
        </div>
      <!--edn container  -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="js/bootstrap.js"></script>
    </body>
</html>