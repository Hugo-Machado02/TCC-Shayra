<?php
include "V_verifica-login.php";
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
  <title>Pagina de Início</title>
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
            <span class="s-identify"> <?php echo $_SESSION['nome']; ?>
      <i class="fas fa-chevron-down"></i>
      </span>
        </div>
        <ul class="dropdown-menu">
            <li><a><i class="fas fa-user"></i><?php echo $_SESSION['nome']; ?> | <span class="position"><?php echo $_SESSION['nome_funcao']; ?></span></a></li>
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
  <br>
            <div class="item"><a href="P_indexadm.php"><i class="fas fa-home"></i>Inicio</a></div>
            <div class="item"><a href="P_internações-uti_leitosadm.php"><i class="fas fa-th"></i>UTI/Leitos</a></div>
            <div class="item"><a href="P_cadastro_Medico.php"><i class="fas fa-home"></i>Cadastro Medico</a></div>
         
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
  <div class="container">
   
      
     <br>

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header dark-blue text-center text-light">
                      UTI
                    </div>
                    <div class="tester">
                       Apenas <span class="teste">para</span>
                        teste teste teste teste teste teste teste teste
                        <br>
                      <br>
                      <br>
                      <br>
                    </div>
                </div>
            </div>

            
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header dark-blue text-center text-light">
                    Paciente
                    </div>
                    <div class="tester">
                      Apenas <span class="teste">para</span>
                      teste teste teste teste teste teste teste teste
                      <br>
                      <br>
                      <br>
                      <br>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header dark-blue text-center text-light">
                      Medico
                    </div>
                    <div class="tester">
                     Apenas <span class="teste">para</span>
                    teste teste teste teste teste teste teste teste
                    <br>
                      <br>
                      <br>
                      <br>
                    </div>
                </div>
            </div>
        </div>

        <div class="row my-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header dark-blue text-center text-light">
                      Painel de Controle
                    </div>
                    <div class="tester">
                      Apenas <span class="teste">para</span>
                      teste teste teste teste teste teste teste teste
                      <br>
                      <br>
                      <br>
                      <br>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header dark-blue text-center text-light">
                      Painel de Controle
                    </div>
                    <div class="tester">
                      Apenas <span class="teste">para</span>
                    teste teste teste teste teste teste teste teste
                    <br>
                      <br>
                      <br>
                      <br>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                  <div class="card-header dark-blue text-center text-light">
                    Painel de Controle
                  </div>
                  <div class="tester">
                    Apenas <span class="teste">para</span>
                    teste teste teste teste teste teste teste teste
                    <br>
                      <br>
                      <br>
                      <br>
                  </div>
              </div>
          </div>
      </div>
      <div class="row my-4">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header dark-blue text-center text-light">
                  Painel de Controle
                </div>
                <div class="tester">
                  Apenas <span class="teste">para</span>
                  teste teste teste teste teste teste teste teste
                  <br>
                      <br>
                      <br>
                      <br>
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
          <a href="P_index.php"><i class="fas fa-sync-alt"></i>Atualizar página</a>
          <a href="P_index.php#" id="up"><i class="fas fa-arrow-up"></i>Subir</a>
        </div>
      </div>
      <script>(function ($) {'use strict';$(function () {$('#up').on('click', function () {$('html, body').stop().animate({scrollTop: 0}, 'medium');});});}(jQuery));</script>
    </div>
    <div class="footer-credits">
      <div class="container">
        <div class="official" data-toggle="tooltip" data-placement="top" title="" data-original-title="Grupo oficial da RCC"></div>
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