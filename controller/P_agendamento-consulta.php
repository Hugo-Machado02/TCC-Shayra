<?php
include "V_verifica-login.php"
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="UTF-8" ></script>
  <link rel="stylesheet" type="text/css" href="../view/Sistema.css">
  <link rel="stylesheet" type="text/css" href="../view/style.css">
  <title>Agendamento Consulta</title>
</head>
<body>


    
  <section class="comeco">

    <header class="item_comeco">
             
    <a href="../view/PaginaWEB.html">
        <div class="item_te">
            <span>Garotos de Programa</span>
                
        </div>
    </a>

    <div id="header-user" class="dropdown">
        <div class="user">
            <span class="s-identify">  <?php echo $_SESSION['nome']; ?>
      <i class="fas fa-chevron-down"></i>
      </span>
        </div>
        <ul class="dropdown-menu">
            <li><a><i class="fas fa-user"></i><?php echo $_SESSION ['nome']; ?> | <span class="position"><?php echo $_SESSION ['nome_funcao']; ?></span></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="P_perfil-usuario.php"><i class="far fa-id-card"></i>Meu perfil</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="V_logout.php"><i class="fas fa-sign-out-alt"></i>Sair</a></li>
        </ul>
    </div>
    <nav>

        <div class="menu-btn">
          <i class="fas fa-bars"></i>
        </div>
        <div class="side-bar">
          <div class="close-btn">
            <i class="fas fa-times"></i>
          </div>
          <div class="menu">
          <form class="search-container">
          <div class="input-group" style="padding: 15px 10px 15px 10px;">
          <input type="text" id="procurar_usuario"  class="form-control"placeholder="Pesquisar usuario" autocomplete="off">
                <div class="input-group-append">
                    <button class="btn btn-outline-info" id="procurar_user"><i class="fas fa-search"></i></button>
                </div>
            </div>

    
  </form>
          <div class="item"><a href="#"><i class="fas"></i>*Todos visualiza*</a></div>
          <div class="item"><a href="P_index.php"><i class="fas fa-home"></i>Inicio</a></div>
            <div class="item"><a href="P_internações-uti_leitos.php"><i class="fas fa-th"></i>UTI/Leitos</a></div>

            <div class="item"><a href="#"><i class="fas"></i>*Recepção visualiza*</a></div>
          <div class="item">
              <a class="sub-btn"><i class="fa fa-calendar-check"></i></i>Agendamentos <i class="fas fa-angle-right dropdown"></i></a>
              <div class="sub-menu">
                <a href="P_agendamento-consulta.php" class="sub-item">Consulta</a>
              </div>
              <div class="item"><a href="P_cadastro_Paciente.php"><i class="fa fa-clipboard"></i>Cadastro Paciente</a></div>
              <div class="item"><a href="P_ecala.php"><i class="fas fa-home"></i>Escala</a></div>

              </div>
              <div class="item"><a href="#"><i class="fas"></i>*Medico visualiza*</a></div>
              <div class="item"><a href="P_ecala-Med.php"><i class="fas fa-home"></i>Escala_Med</a></div>

              <div class="item"><a href="#"><i class="fas"></i>*Adm visualiza*</a></div>
              <div class="item"><a href="P_cadastro_Medico.php"><i class="fas fa-home"></i>Cadastro Medico</a></div>

          

            </div>
         
          </div>
        </div>

      </nav>
     
    </header>
    </section>
<br>
<br>
<br>
<br>


<section class="meio">
   
    <div class="container my-3" style="min-height: 100%;">
        <div id="requerimentos">

            <div class="row">

                <div class="col-lg-4 col-md-12">

                    <div class="card card-general shadow-sm">

                        <div class="card-title">
                            <span>Instruções</span>
                        </div>

                        <div class="card-body">
                            <p>1. Selecione o formulário</p>
    <select name="" id="select-form" class="custom-select my-3">
        <option data-target="#form-agendamento">01 - Formulário de Agendamento de Consultas
        </option>
          <!-- FORMULÁRIO QUE SO ADM CONSEGUE VER-->
          <option data-target="#form-atualizacao">02 - Atualizar
                                </option>
                               <!-- ATÉ AQUI-->
    </select>

    <p>2. Preencha o formulário</p>
    <p>3. Envie (:</p>
</div>

</div>

</div> <!-- Fim col-md-4 -->

<div class="col-lg-8 col-md-12">

<div id="form-agendamento" class="selected">

<div class="card mb-3 shadow-sm card-general">
    <div class="card-title">
        <span>Formulário de Agendamento de Consultas</span>
    </div>

    <div class="card-body">
        <div>
            Utilize este formulário para marcar consultas.
        </div>
        <hr>

        <form action="" method="post" class="form-general">
            <input type="hidden" name="_token" value="gm73b4Z9e5M4WyYZRyRjBs170EGBRUjyjKgCnj9Y">                                    <input type="hidden" name="acao" value="3">
            <div class="form-group row">
                <div class="col-md-6">
                    <label>SEU NOME</label>
                    <input type="text" name="usuario" class="form-control" maxlength="50" placeholder="Ex: hiagocarlos" required="">
                </div>

                <div class="col-md-6 spacing">
                    <label>Nome do Paciente</label>
                    <input type="text" name="usuario_sofreu_acao" class="form-control" maxlength="50" placeholder="Ex: Cesar" required="">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 spacing">
                    <label>Horário</label>
                    <input type="text" name="usuario_sofreu_acao" class="form-control" maxlength="50" placeholder="Ex: Cesar" required="">
                </div>

                <div class="col-md-6 spacing">
                    <label>Medico</label>
                        <input type="text" name="usuario_sofreu_acao"  class="form-control" class="form-control" maxlength="50" placeholder="Ex: Cesar" required="">
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 spacing">
                <label>Data</label>
                        <input type="text" name="usuario_sofreu_acao"  class="form-control" class="form-control" maxlength="50" placeholder="Ex: Cesar" required="">
                </div>
                <div class="col-md-6 spacing">
                        <label>Normas</label>
                        <p><span class="badge bg-principal text-white">INFO</span> Ao preencher este
                            requerimento, atesto que li e estou em total acordo com as normas de
                            Cadastro.</p>
                    </div>
</div>
           

            <button class="btn btn-send">Enviar</button>

        </form>
    </div>
</div>
</div> <!-- Fim da div#form-agendamento -->
</div> <!-- Fim da row -->
</div>  <!-- Fim div#requerimentos -->

<div class="card mb-4 shadow-sm" id="442325" style="border-color: #ccc">

    <div class="card-header text-white font-weight-bold bg-primary">
        <span>Atualização do Centro de Recursos Humanos</span> <small>- 11 Ago 2022 18:47:48</small>
    </div>

    <div class="card-body">

        <div class="row">

            <div class="col-md-3">

                <div style="border: 1px solid #ccc; padding: 10px 18px;">
                    <p class="text-center font-weight-bold text-danger"><a href="" style="color: #4F4F4F;" target="_blank">Gessika</a></p>
                    <div class="img-habbo"></div>
                    <hr class="mb-2">
                    <div class="info-usuario">
                        <p><strong>Mensagens:</strong> 1 </p>
                        <p><strong>Cargo:</strong> Adm</p>
                                                                            
                                            </div>

                </div>

            </div>

            <div class="col-md-9">

            
					<div style="min-height: 250px;">
						<div class="text-center texto-vertical">
							<p class="mb-3 font-weight-bold" style="text-decoration: underline;">Atualização realizada!</p>
							<p><strong>Membro do C.R.H responsável pela atualização:</strong> Gessika</p>
							<p><strong>Data da atualização:</strong> 11 Ago 2022 - 19:47:48</p>
						</div>
					</div>
				

            <!-- [SE O REQUERIMENTO FOR DO TIPO ATUALIZACAO_CRH, TODO O CÓDIGO ABAIXO SERÁ DESCONSIDERADO] -->
            
            </div>
        </div>

    </div>

</div>

<div class="card mb-4 shadow-sm" id="442204" style="border-color: #ccc">

    <div class="card-header text-white font-weight-bold bg-primary">
        <span>Agendamento</span> <small>- 11 Ago 2022 19:12:53</small>
    </div>

    <div class="card-body">

        <div class="row">

            <div class="col-md-3">

                <div style="border: 1px solid #ccc; padding: 25px 18px;">
                    <p class="text-center font-weight-bold text-danger"><a href="" style="color: #4F4F4F;" target="_blank">Hiago</a></p>
                   <div class="img-habbo"></div>
                    <hr class="mb-2">
                    <div class="info-usuario">
                        <p><strong>Mensagens:</strong> 1 </p>
                        <p><strong>Cargo:</strong> Téc. em Informatica</p>
                                            </div>

                </div>

            </div>

            <div class="col-md-9">

          
					<p class="mb-3"><span style="text-decoration: underline;">  hiagocarlos</span> escreveu: </p>
					<p><strong>Seu cargo e nick: </strong>Téc. Informática Hiago </p>
					<p><strong>Nome do Paciente: </strong> Luiz Guinherme </p>
                    <p><strong>Horário: </strong> 14:30</p>
                    <p><strong>Data: </strong> 12/08/2022</p>

					<p class="mt-2 font-weight-bold">[x] Li e concordo com as normas de postagem de agendamento.</p>
				

             <!-- [SE O REQUERIMENTO FOR DO TIPO ATUALIZACAO_CRH, TODO O CÓDIGO ABAIXO SERÁ DESCONSIDERADO] -->
            
            <hr class="hr">
                <p><strong>Status:</strong>
               <span class="badge badge-danger">Reprovado</span>
                                    </p>

                <p><strong>Usuário responsável:</strong> Gessika </p>
                <p><strong>Motivo:</strong> Nome do paciente errado </p>
                <p class="mb-2"><strong>Data da decisão: </strong>11 Ago 2022 - 19:30:48</p>

                
                                <a href="" class="badge badge-secondary">Cancelar</a>
                                <br>
                                <br>
                                 <!-- [SE O REQUERIMENTO FOR DO TIPO ADM, TODO O CÓDIGO ABAIXO SERÁ DESCONSIDERADO] -->
                              <a href="#">        <span  onclick="javascript:abrir('P_aprovar_Agendamento-Consulta.php');" class="badge badge-success">Atualizar</span>  </a>   
                                
                            
            </div>
        </div>

    </div>

</div>

    </section> 

    
     
<section class="final">
  
  <footer>
    <div class="footer-links">
      <div class="container">
        <a href="P_index.php"><i class="fas fa-home"></i>Início</a>
        <div style="float: right;">
          <a href="P_agendamento-consulta.php"><i class="fas fa-sync-alt"></i>Atualizar página</a>
          <a href="P_agendamento-consulta.php#" id="up"><i class="fas fa-arrow-up"></i>Subir</a>
        </div>
      </div>
      <script>(function ($) {'use strict';$(function () {$('#up').on('click', function () {$('html, body').stop().animate({scrollTop: 0}, 'medium');});});}(jQuery));</script>
    </div>
    <div class="footer-credits">
      <div class="container">
        <div class="credits">
          <div class="clearfix"></div>
          <i class="fas fa-code"></i>Desenvolvido por: Garotos de Programa<br>
          <i class="fas fa-paint-brush"></i>Desenhado por: Hiago Carlos<br>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </footer>
</section>
<script>
    $(document).ready(function () {
        $('#select-form').on('change', function (e) {
            var optionSelected = $(this).find(':selected');
            var targetID = optionSelected[0].dataset.target;

            // Aplicar classe d-none para div com classe selected
            $('.selected').addClass('d-none');

            // Remover classe selected da div com classe selected
            $('.selected').removeClass('selected');

            // Remover classe d-none para div com id target
            $(targetID).removeClass('d-none');

            // Aplicar classe selected para div com id target
            $(targetID).addClass('selected');
        });
    });

        $(document).ready(function(){

          $('.sub-btn').click(function(){
            $(this).next('.sub-menu').slideToggle();
            $(this).find('.dropdown').toggleClass('rotate');
          });

          $('.menu-btn').click(function(){
            $('.side-bar').addClass('active');
            $('.menu-btn').css("visibility", "hidden");
          });

          $('.close-btn').click(function(){
            $('.side-bar').removeClass('active');
            $('.menu-btn').css("visibility", "visible");
          });

          $('#header-user').click(function(event) {
    $('#header-user').toggleClass('visible');
    event.stopPropagation();
    if ($('#header-notif').hasClass('visible')) {
      $('#header-notif').removeClass('visible');
    }
  });
  $(document).click(function(){
    $("#header-user").removeClass('visible');
    $('#header-notif').removeClass('visible');
  });

        });
    </script>
  
</body>
</html>