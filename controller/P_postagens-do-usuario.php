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
  <title>Postagem do usuário</title>
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
        <li><a><i class="fas fa-user"></i> <?php echo $_SESSION['nome']; ?> | <span class="position">Téc. em Informatica</span></a></li>
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

<section class="meio">
<div class="container my-3" style="min-height: 100%;">

<div class="row mb-2">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-blue text-white font-weight-bold">
                hiagocarlos
            </div>
            <div class="card-body" id="card-user">

                 <strong>Páginas: </strong><a href="" class="btn btn-outline-dark">1</a> <a href="" class="btn btn-dark">2</a> 
                                                                        <div class="card my-3 shadow-sm" style="border-color: #ccc">

                        <div class="card-header text-white font-weight-bold bg-dark">
                            <span class="text-warning">Cadastro de Paciente</span>
                            <small>- 11 Ago 2022 20:00</small>
                        </div>

                        <div class="card-body">

                            <div class="row">

                                <div class="col-md-3">

                                    <div style="border: 1px solid #ccc; padding: 10px 18px;">
                                        <p class="text-center font-weight-bold text-danger">hiagocarlos</p>
                                        <div class="img-habbo">
                                           
                                        </div>
                                        <hr class="mb-2">
                                        <div class="info-usuario">
                                            <p><strong>Mensagens:</strong> 1 </p>
                                            <p><strong>Cargo:</strong> Téc. Informática
                                            </p>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-9">

                                
                                <p class="mb-3"><span style="text-decoration: underline;">  hiagocarlos</span> escreveu: </p>
					<p><strong>Seu cargo e nick: </strong>Téc. Informática Hiago </p>
					<p><strong>Nome do Paciente: </strong> Shaywa</p>
                    <p><strong>Indentidade do Paciente:</strong> 1234567</p>
                    <p><strong>CPF do Paciente:</strong> 1234567</p>
                    <p><strong>Data: </strong> 12/08/2022</p>
        

                                <!-- [SE O REQUERIMENTO FOR DO TIPO ATUALIZACAO_CRH, TODO O CÓDIGO ABAIXO SERÁ DESCONSIDERADO] -->
                                                                                    <hr class="hr">
                                                                                    <p><strong>Status:</strong>
                                    <span class="badge badge-secondary">Aguardando</span>
                                    </p>

                <p><strong>Usuário responsável:</strong> </p>
                <p><strong>Motivo:</strong>  </p>
                <p class="mb-2"><strong>Data da decisão: </strong></p>

                                                                                    
                                </div>
                            </div>

                        </div>

                    </div>
                                                                        <div class="card my-3 shadow-sm" style="border-color: #ccc">

                        <div class="card-header text-white font-weight-bold bg-dark">
                            <span class="text-warning">Agendamento de Consulta</span>
                            <small>- 11 Ago 2022 19:12</small>
                        </div>

                        <div class="card-body">

                            <div class="row">

                                <div class="col-md-3">

                                    <div style="border: 1px solid #ccc; padding: 10px 18px;">
                                        <p class="text-center font-weight-bold text-danger">hiagocarlos</p>
                                        <div class="img-habbo">
                                            
                                        </div>
                                        <hr class="mb-2">
                                        <div class="info-usuario">
                                            <p><strong>Mensagens:</strong> 1</p>
                                            <p><strong>Cargo:</strong> Téc. Informática
                                            </p>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-9">

                                
                                <p class="mb-3"><span style="text-decoration: underline;">  hiagocarlos</span> escreveu: </p>
					<p><strong>Seu cargo e nick: </strong>Téc. Informática Hiago </p>
					<p><strong>Nome do Paciente: </strong> Luiz Guinherme </p>
                    <p><strong>Horário: </strong> 14:30</p>
                    <p><strong>Data: </strong> 12/08/2022</p>
        

                                <!-- [SE O REQUERIMENTO FOR DO TIPO ATUALIZACAO_CRH, TODO O CÓDIGO ABAIXO SERÁ DESCONSIDERADO] -->
                                                                                    <hr class="hr">
                                                                                    <p><strong>Status:</strong>
               <span class="badge badge-danger">Reprovado</span>
                                    </p>

                <p><strong>Usuário responsável:</strong> Gessika </p>
                <p><strong>Motivo:</strong> Nome do paciente errado </p>
                <p class="mb-2"><strong>Data da decisão: </strong>11 Ago 2022 - 19:30:48</p>

                                                                                    
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
          <a href="P_postagens-do-usuario.php"><i class="fas fa-sync-alt"></i>Atualizar página</a>
          <a href="P_postagens-do-usuario.php#" id="up"><i class="fas fa-arrow-up"></i>Subir</a>
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