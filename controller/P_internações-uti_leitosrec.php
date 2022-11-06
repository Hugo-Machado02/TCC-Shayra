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
            <li><a><i class="fas fa-user"></i> <?php echo $_SESSION['nome']; ?> | <span class="position"><?php echo $_SESSION['nome_funcao'] ?></span></a></li>
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
          <div class="item"><a href="P_indexrec.php"><i class="fas fa-home"></i>Inicio</a></div>
            <div class="item"><a href="P_internações-uti_leitosrec.php"><i class="fas fa-th"></i>UTI/Leitos</a></div>
          <div class="item">
              <a class="sub-btn"><i class="fa fa-calendar-check"></i></i>Agendamentos <i class="fas fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                  <a href="P_agendamento-consulta.php" class="sub-item">Consulta</a>
                </div>
                  <div class="item"><a href="P_cadastro_Paciente.php"><i class="fa fa-clipboard"></i>Cadastro Paciente</a></div>
                  <div class="item"><a href="P_ecala.php"><i class="fas fa-home"></i>Escala</a></div>
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

<?php
include('conexao_BD.php');
$sql = mysqli_query($conexao, "SELECT l.id_leitos, p.nome FROM leitos as l LEFT JOIN paciente as p ON (l.id_paciente = p.id) ORDER BY l.id_leitos");

echo "<table style='text-align:center'; border=''>";
    echo "<tr class='listarPaciente'>";
        echo "<td><strong>Quarto | Leito</strong></td>";
        echo "<td><strong>paciente</strong></td>";
        echo "<td><strong>Ocupação</strong></td>";
        echo "</tr>";
while ($listagem = mysqli_fetch_array($sql))
{
    $leitos = $listagem['id_leitos'];
    $nomePaciente = $listagem['nome'];
    $ocupacao = "Ocupado";

        echo "<tr>";
            echo "<td id='dados1'>$leitos</td>";
            echo "<td id='dados2'>$nomePaciente</td>";
            if($nomePaciente == ''){
              echo "<td id='dados3'>Livre</td>";
            }
            if($nomePaciente = $nomePaciente){
              echo "<td id='dados3'>$ocupacao</td>";
            }
        echo "</tr>";
}
echo "</table>";

?>
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