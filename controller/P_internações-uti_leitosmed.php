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
  <title>Uti/leito</title>
</head>
<body>


    
  <section class="comeco">

    <header class="item_comeco">
             
    <a href="P_index.php">
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
  <br>
          <div class="item"><a href="P_indexmed.php"><i class="fas fa-home"></i>Inicio</a></div>
            <div class="item"><a href="P_internações-uti_leitosmed.php"><i class="fas fa-th"></i>UTI/Leitos</a></div>
            <div class="item"><a href="P_escalamed.php"><i class="fas fa-home"></i>Escala_Med</a></div>
         
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

    <div class="row mb-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-blue text-white font-weight-bold">
                    UTI / Leitos
                </div>
                <div class="card-body" id="card-user">

                    <div class="card-body">

                        <div class="row">
                
                            <!--Quarto 1-->
                            <div class="col-md-3">
                
                                <div style="border: 1px solid #ccc; padding: 20px 27px;">
                                    <p class="text-center font-weight-bold text-danger"><a href="" style="color: #4F4F4F;" target="_blank">Quarto 1</a></p>
                                   
                                    <hr class="mb-2">
                                    <div class="info-usuario">
                                        <p><strong>Ocupação:</strong>   <span class="badge badge-danger">Ocupado</span></p>
                                        <p><strong>Nome do Paciente:</strong> Daniel</p>
                                                            </div>
                
                                </div>
                <br>
                            </div>

                            <!--Quarto 2-->
                            <div class="col-md-3">
                
                                <div style="border: 1px solid #ccc; padding: 20px 27px;">
                                    <p class="text-center font-weight-bold text-danger"><a href="" style="color: #4F4F4F;" target="_blank">Quarto 2</a></p>
                                  
                                    <hr class="mb-2">
                                    <div class="info-usuario">
                                        <p><strong>Ocupação:</strong>  <span class="badge badge-success">Livre</span></p>
                                        <p><strong>Nome do Paciente:</strong> </p>
                                                            </div>
                
                                </div>
                <br>
                            </div>
                            
                            <!--Quarto 3-->
                            <div class="col-md-3">
                
                                <div style="border: 1px solid #ccc; padding: 20px 27px;">
                                    <p class="text-center font-weight-bold text-danger"><a href="" style="color: #4F4F4F;" target="_blank">Quarto 3</a></p>
                                    
                                    <hr class="mb-2">
                                    <div class="info-usuario">
                                        <p><strong>Ocupação:</strong>   <span class="badge badge-danger">Ocupado</span></p>
                                        <p><strong>Nome do Paciente:</strong> Jose</p>
                                                            </div>
                
                                </div>
                <br>
                            </div>
                            
                            <!--Quarto 4-->
                            <div class="col-md-3">
                
                                <div style="border: 1px solid #ccc;padding: 20px 27px;">
                                    <p class="text-center font-weight-bold text-danger"><a href="" style="color: #4F4F4F;" target="_blank">Quarto 4</a></p>
                                    
                                    <hr class="mb-2">
                                    <div class="info-usuario">
                                        <p><strong>Ocupação:</strong>  <span class="badge badge-success">Livre</span> </p>
                                        <p><strong>Nome do Paciente:</strong> </p>
                                                            </div>
                
                                </div>
                <br>
                            </div>
                            
                            <!--Quarto 5 -->
                            <div class="col-md-3">
                
                                <div style="border: 1px solid #ccc; padding: 20px 27px;">
                                    <p class="text-center font-weight-bold text-danger"><a href="" style="color: #4F4F4F;" target="_blank">Quarto 5</a></p>
                                    
                                    <hr class="mb-2">
                                    <div class="info-usuario">
                                        <p><strong>Ocupação:</strong>   <span class="badge badge-danger">Ocupado</span></p>
                                        <p><strong>Nome do Paciente:</strong> Maria</p>
                                                            </div>
                
                                </div>
                <br>
                            </div>
                            
                            <!--Quarto 6-->
                            <div class="col-md-3">
                
                                <div style="border: 1px solid #ccc; padding: 20px 27px;">
                                    <p class="text-center font-weight-bold text-danger"><a href="" style="color: #4F4F4F;" target="_blank">Quarto 6</a></p>
                                    
                                    <hr class="mb-2">
                                    <div class="info-usuario">
                                        <p><strong>Ocupação:</strong>   <span class="badge badge-success">Livre</span></p>
                                        <p><strong>Nome do Paciente:</strong> </p>
                                                            </div>
                
                                </div>
                <br>
                            </div>
                            
                            <!--Quarto 7-->
                            <div class="col-md-3">
                
                                <div style="border: 1px solid #ccc; padding: 20px 27px;">
                                    <p class="text-center font-weight-bold text-danger"><a href="" style="color: #4F4F4F;" target="_blank">Quarto 7</a></p>
                                    
                                    <hr class="mb-2">
                                    <div class="info-usuario">
                                        <p><strong>Ocupação:</strong>   <span class="badge badge-danger">Ocupado</span></p>
                                        <p><strong>Nome do Paciente:</strong> Joana</p>
                                                            </div>
                
                                </div>
                <br>
                            </div>
                            <!--Quarto 8-->
                            <div class="col-md-3">
                
                                <div style="border: 1px solid #ccc; padding: 20px 18px;">
                                    <p class="text-center font-weight-bold text-danger"><a href="" style="color: #4F4F4F;" target="_blank">Quarto 8</a></p>
                                    
                                    <hr class="mb-2">
                                    <div class="info-usuario">
                                        <p><strong>Ocupação:</strong>    <span class="badge badge-secondary">Aguardando Limpeza</span></p>
                                        <p><strong>Nome do Paciente:</strong> </p>
                                                            </div>
                
                                </div>
                <br>
                            </div>
                            


                            

                            
                
                            
    </section> 

    
     
<section class="final">
  
  <footer>
    <div class="footer-links">
      <div class="container">
        <a href="P_index.php"><i class="fas fa-home"></i>Início</a>
        <div style="float: right;">
          <a href="P_internações-uti_leitos.php"><i class="fas fa-sync-alt"></i>Atualizar página</a>
          <a href="P_internações-uti_leitos.php#" id="up"><i class="fas fa-arrow-up"></i>Subir</a>
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