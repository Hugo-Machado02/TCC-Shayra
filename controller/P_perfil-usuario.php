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
  <title>Meu Perfil</title>

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
        <li><a><i class="fas fa-user"></i> <?php echo $_SESSION['nome']; ?> | <span class="position"><?php echo $_SESSION['nome_funcao']; ?> </span></a></li>
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
    <div class="container" style="min-height: 100%;">
        <div class="row my-3">
            <div class="col-lg-5 col-xl-4 card-profile">
                <div class="card shadow-sm">
                    <div class="card-body" id="card-user">
                        <div class="d-flex justify-content-center">
                            <div class="img-habbo2" id="img-avatar">
                                <img src="imagens/foto_perfil_hiago.png">
                               
                            </div>
                        </div>
                        <hr>
                        <div class="tab-content mt-4">

                            <div role="tabpanel" class="tab-pane active tab-formatacao" id="page1">

                                <!--SE FOR RECEPCIONISTA-->
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-1"><p><strong>Nome</strong></p></div>
                                    </div>

                                    <div class="col-6">
                                        <span><?php echo $_SESSION['nome']; ?></span>
                                    </div>
                                </div>

                                

                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-1"><p><strong>Cargo:</strong></p></div>
                                    </div>

                                    <div class="col-6">
                                        <span><?php echo $_SESSION['nome_funcao']; ?></span>
                                    </div>
                                </div>

                                

                               

                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-1"><p><strong>CPF:</strong></p></div>
                                    </div>

                                    <div class="col-6">
                                        <span><?php echo $_SESSION['cpf']; ?></span>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-1"><p><strong>Identidade:</strong></p></div>
                                    </div>

                                    <div class="col-6">
                                        <span> 0000000</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-1"><p><strong>Data de Nascimento:</strong></p></div>
                                    </div>

                                    <div class="col-6">
                                        <span><?php echo $_SESSION['Nascimento_Med']; ?></span>
                                    </div>
                                </div>

                                                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-1"><p><strong>Especialização:</strong></p></div>
                                        </div>

                                        <div class="col-6">
                                            <span><?php echo $_SESSION['Especialidade_Med']; ?></span>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-1"><p><strong>CRM:</strong></p></div>
                                        </div>

                                        <div class="col-6">
                                            <span><?php echo $_SESSION['crmMedico']; ?></span>
                                        </div>
                                    </div>
                                           <!--Dados dos medicos(as) acaba aqui-->             

                           
                        
                        <hr>

                                                <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Funções</th>
                                <th scope="col">   </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <p><strong>Senha:</strong>
                                       <a href="P_alterar-senha-usuarios.php"><span class="badge badge-danger">Alterar</span></a>
                                                             </p>
                                </td>
                                
                                <td> <p><strong>Foto de Perfil:</strong>
                                  <a href="#">  <span class="badge badge-danger">Alterar</span></a>
                                                         </p></td>


                            </tr>
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
                </div>
            </div>
        
    <div class="col-lg-7 col-xl-8" style="min-width: 390px;">
        <div class="card card-body">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                <li class="nav-item">
                    <a class="nav-link active" id="pills-timeline-tab" data-toggle="pill" href="" role="tab" aria-controls="pills-timeline" aria-selected="true">Linha do tempo</a>
                </li>

              

                <li class="nav-item">
                    <a href="P_postagens-do-usuario.php" target="_blank" class="nav-link">Postagens</a>
                </li>

                
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-timeline" role="tabpanel" aria-labelledby="pills-timeline-tab">
                                                    <ul class="timeline">
                                                                                                            <li>
                                    <div class="timeline-badge secondary"><i class="fas fa-info"></i></div>
                                    <div class="timeline-panel" id="441645">
                                        <div class="timeline-heading">
                                                                                                    <h4 class="timeline-title">Cadastro de paciente</h4>
                                                                                                <p class="text-muted"><i class="fas fa-info-circle"></i> 11 Ago 2022 19:14 por <a href="">hiagocarlos</a></p>
                                        </div>
                                        <div class="timeline-body">
                                            
                                        <p class="mb-3"><span style="text-decoration: underline;">  hiagocarlos</span> escreveu: </p>
					<p><strong>Seu cargo e nick: </strong>Téc. Informática Hiago </p>
					<p><strong>Nome do Paciente: </strong> Luiz Guilherme</p>
                    <p><strong>Indentidade do Paciente:</strong> 1234567</p>
                    <p><strong>CFP do Paciente:</strong> 1234567</p>
                    <p><strong>Data: </strong> 12/08/2022</p>
                    <hr>
                    <br>
        
                                            <div class="timeline-badge secondary"><i class="fas fa-info"></i></div>
                                            <div class="timeline-panel" id="433835">
                                                <div class="timeline-heading">
                                                                                                            <h4 class="timeline-title">Agendamento de consulta</h4>
                                                                                                        <p class="text-muted"><i class="fas fa-info-circle"></i> 11 Ago 2022 19:14 por <a href="">hiagocarlos</a></p>
                                                </div>
                                                <div class="timeline-body">
                                                    
                                                <p class="mb-3"><span style="text-decoration: underline;">  hiagocarlos</span> escreveu: </p>
					<p><strong>Seu cargo e nick: </strong>Téc. Informática Hiago </p>
					<p><strong>Nome do Paciente: </strong> Shaywa</p>
                    <p><strong>Horário: </strong> 14:30</p>
                    <p><strong>Data: </strong> 12/08/2022</p>
				
                                                    <hr>
                                                </div>
                                            </div>
                                        </li>
        </div>
        
        
    </div>


    
    
    
    
    </section> 

    
     
<section class="final">
  
  <footer>
    <div class="footer-links">
      <div class="container">
        <a href="P_index.php"><i class="fas fa-home"></i>Início</a>
        <div style="float: right;">
          <a href="P_perfil-usuario.php"><i class="fas fa-sync-alt"></i>Atualizar página</a>
          <a href="P_perfil-usuario.php#" id="up"><i class="fas fa-arrow-up"></i>Subir</a>
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