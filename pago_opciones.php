<?php
include 'inc/funciones/sesiones.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <title>Membresias</title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel ="shortcut icon" href="img/teampm.png">

  <link rel="stylesheet" href="css/general.css">
  <link rel="stylesheet" href="css/caja-body.css">
  <link rel="stylesheet" href="css/precio.css">

  <link rel="stylesheet" href="css/normalize.css">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

  <script src="https://kit.fontawesome.com/3688897a60.js" crossorigin="anonymous"></script>
  <script src="js/sidebar.js" type="module"></script>
</head>

<body>
  <div class="sidebar close">
    <div class="logo-details">
      <img src="img/teampm.png" class="logo"></img>
      <span class="logo_name">W.I.N.S.</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href= "index.php">
          <i class= "fas fa-house-user"></i>
          <span class="link_name">Inicio</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="index.php">Inicio</a></li>
        </ul>
      </li>
      <li>
        <div class="icon-link">
          <a href="#">
            <i class="fas fa-music"></i>
            <span class="link_name">Audio</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Audio</a></li>
          <li><a href="music.php" class="local">Archivo Local</a></li>
          <li><a href="https://www.spotify.com/" target="_blank" class="spotify">Spotify</a></li>
          <li><a href="https://music.youtube.com" target="_blank" class="ytmusic">Youtube Music</a></li>
          <li><a href="https://www.deezer.com/mx/" target="_blank" class="deezer">Deezer</a></li>
          <li><a href="https://www.apple.com/la/itunes/" target="_blank" class="itunes">Itunes</a></li>
          <li><a href="https://www.shazam.com/es/home" target="_blank" class="shazam">Shazam</a></li>
          <li><a href="#">Otros servicios:</a>
            <form method="get" action="https://www.google.com/search">
              <input type="search" name="q" results="5" placeholder="Buscar" class="buscador">
              <button type="submit">Buscar</button>
              <input type="hidden" name="sitesearh">
            </form>
          </li>
        </ul>
      </li>
      <ul class="nav-links">
        <li>
          <div class="icon-link">
            <a href="#">
              <i class="fas fa-video"></i>
              <span class="link_name">Video</span>
            </a>
            <i class='bx bxs-chevron-down arrow'></i>
          </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="#">Video</a></li>
            <li><a href="video.php" class="local">Archivo Local</a></li>
            <li><a href="https://www.netflix.com/" target="_blank" class="netflix">Netflix</a></li>
            <li><a href="https://youtube.com" target="_blank" class="ytmusic">Youtube</a></li>
            <li><a href="https://www.primevideo.com/" target="_blank" class="shazam">Amazon Prime</a></li>
            <li><a href="https://www.twitch.tv/" target="_blank" class="deezer">Twitch</a></li>
            <li><a href="https://www.facebook.com/gaming/h" target="_blank" class="fb">FB Gaming</a></li>
            <li><a href="#">Otros servicios:</a>
              <form method="get" action="https://www.google.com/search">
                <input type="search" name="q" results="5" placeholder="Buscar" class="buscador">
                <button type="submit">Buscar</button>
                <input type="hidden" name="sitesearh">
              </form>
            </li>
          </ul>
        </li>
        <li>
          <div class="icon-link">
            <a href="#">
              <i class="fas fa-info-circle"></i>
              <span class="link_name">Acerca</span>
            </a>
            <i class='bx bxs-chevron-down arrow' ></i>
          </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="#">Acerca</a></li>
            <li><a href="empresa.php" class="local">Empresa</a></li>
            <li><a href="empresa.php" class="local">Empleado</a></li>
            <li><a href="empresa.php" class="local">Misión</a></li>
            <li><a href="empresa.php" class="local">Visión</a></li>
          </ul>
        </li>
        <li>
          <div class="profile-details">
            <div class="profile-content">
              <img src="img/perfil.gif" alt="profile">
            </div>
            <div class="name-job">
              <div class="profile_name"><center>Usuario:</center></div>
              <div class="job"><center>Team PM:</center></div>
            </div>
            <div class="name-job">
              <div class="profile_name"><center><?php echo $_SESSION['nombre']?></center></div>
              <div class="job"><center>V 1.0</center></div>
            </div>
          </div>
        </li>
      </ul>
    </div>

    <section class="home-section">
      <div class="home-content">
        <i class='bx bx-menu' ></i>
        <a class="free" href="index.php">WINS</a> 
        <a class ="sesion" href="login.php?cerrar_sesion=true">Cerrar Sesion</a>
      </div>
      <div class="contenedor-beta">
        <h2>Opciones de pago</h2>
        <div class="contenedor-pago">
          <div class="tabla-pago">
            <img src="img/paypal.png" alt="paypal">
            <h3>Pagar con Paypal</h3>
			<br>
            <?php 
            $_GET['plan'];
            $baseUrl = 'http://localhost/W.I.N.S';
            switch ($_GET['plan']) {
              case "p_basico":
              echo "<h4>Plan seleccionado: Básico</h4><br>";
              echo "
              <form action='https://www.sandbox.paypal.com/cgi-bin/webscr' method='post' id='form_pay'>
              <input type='hidden' name='business' value='sb-747mxu3801682@business.example.com'>
              <input type='hidden' name='cmd' value='_xclick'>
              <input type='hidden' name='item_name' id='' value='Plan Básico'>
              <input type='hidden' name='amount' id='' value='5.00'>
              <input type='hidden' name='quantity' id='' value='1'>
              <input type='hidden' name='currency_code' value='USD'>
              <input type='hidden' name='lc' value='es_ES'>
              <input type='hidden' name='no_shipping' value='1'>
              <input type='hidden' name='image_url' value='https://i.ibb.co/3BzFJWB/circular-transparente-logo-modified-min.png'>
              <input type='hidden' name='return' value='${baseUrl}/receptor.php'>
              <input type='hidden' name='cancel_return' value='${baseUrl}/membresias.php'>
              <input type='submit' value='CONTRATAR' class='boton'>
              </form>";
              break;
			  case "p_basico_anual":
                echo "<h4>Plan seleccionado: Básico Anual</h4><br>";
                echo "
                <form action='https://www.sandbox.paypal.com/cgi-bin/webscr' method='post' id='form_pay'>
                <input type='hidden' name='business' value='sb-747mxu3801682@business.example.com'>
                <input type='hidden' name='cmd' value='_xclick'>
                <input type='hidden' name='item_name' id='' value='Plan Básico Anual'>
                <input type='hidden' name='amount' id='' value='60'>
                <input type='hidden' name='quantity' id='' value='1'>
                <input type='hidden' name='currency_code' value='USD'>
                <input type='hidden' name='lc' value='es_ES'>
                <input type='hidden' name='no_shipping' value='1'>
                <input type='hidden' name='image_url' value='https://i.ibb.co/3BzFJWB/circular-transparente-logo-modified-min.png'>
                <input type='hidden' name='return' value='${baseUrl}/receptor.php'>
                <input type='hidden' name='cancel_return' value='${baseUrl}/membresias.php'>
                <input type='submit' value='CONTRATAR' class='boton'>
                </form>";
                break;
                case "p_inter_anual":
              echo "<h4>Plan seleccionado: Intermedio anual</h4><br>";
              echo "
              <form action='https://www.sandbox.paypal.com/cgi-bin/webscr' method='post' id='form_pay'>
              <input type='hidden' name='business' value='sb-747mxu3801682@business.example.com'>
              <input type='hidden' name='cmd' value='_xclick'>
              <input type='hidden' name='item_name' id='' value='Plan Intermedio Anual'>
              <input type='hidden' name='amount' id='' value='180'>
              <input type='hidden' name='quantity' id='' value='1'>
              <input type='hidden' name='currency_code' value='USD'>
              <input type='hidden' name='lc' value='es_ES'>
              <input type='hidden' name='no_shipping' value='1'>
              <input type='hidden' name='image_url' value='https://i.ibb.co/3BzFJWB/circular-transparente-logo-modified-min.png'>
              <input type='hidden' name='return' value='${baseUrl}/receptor.php'>
              <input type='hidden' name='cancel_return' value='${baseUrl}/membresias.php'>
              <input type='submit' value='CONTRATAR' class='boton'>
              </form>";
              break;
              case "p_inter_mensual":
              echo "<h4>Plan seleccionado: Intermedio mensual</h4><br>";
              echo "
              <form action='https://www.sandbox.paypal.com/cgi-bin/webscr' method='post' id='form_pay'>
              <input type='hidden' name='business' value='sb-747mxu3801682@business.example.com'>
              <input type='hidden' name='cmd' value='_xclick'>
              <input type='hidden' name='item_name' id='' value='Plan Intermedio mensual'>
              <input type='hidden' name='amount' id='' value='15'>
              <input type='hidden' name='quantity' id='' value='1'>
              <input type='hidden' name='currency_code' value='USD'>
              <input type='hidden' name='lc' value='es_ES'>
              <input type='hidden' name='no_shipping' value='1'>
              <input type='hidden' name='image_url' value='https://i.ibb.co/3BzFJWB/circular-transparente-logo-modified-min.png'>
              <input type='hidden' name='return' value='${baseUrl}/receptor.php'>
              <input type='hidden' name='cancel_return' value='${baseUrl}/membresias.php'>
              <input type='submit' value='CONTRATAR' class='boton'>
              </form>";
              break;
              case "p_prem_anual":
              echo "<h4>Plan seleccionado: Premium anual</h4><br>";
              echo "
              <form action='https://www.sandbox.paypal.com/cgi-bin/webscr' method='post' id='form_pay'>
              <input type='hidden' name='business' value='sb-747mxu3801682@business.example.com'>
              <input type='hidden' name='cmd' value='_xclick'>
              <input type='hidden' name='item_name' id='' value='Plan Premium anual'>
              <input type='hidden' name='amount' id='' value='300'>
              <input type='hidden' name='quantity' id='' value='1'>
              <input type='hidden' name='currency_code' value='USD'>
              <input type='hidden' name='lc' value='es_ES'>
              <input type='hidden' name='no_shipping' value='1'>
              <input type='hidden' name='image_url' value='https://i.ibb.co/3BzFJWB/circular-transparente-logo-modified-min.png'>
              <input type='hidden' name='return' value='${baseUrl}/receptor.php'>
              <input type='hidden' name='cancel_return' value='${baseUrl}/membresias.php'>
              <input type='submit' value='CONTRATAR' class='boton'>
              </form>";
              break;
              case "p_prem_mensual":
              echo "<h4>Plan seleccionado: Premium mensual</h4><br>";
              echo "
              <form action='https://www.sandbox.paypal.com/cgi-bin/webscr' method='post' id='form_pay'>
              <input type='hidden' name='business' value='sb-747mxu3801682@business.example.com'>
              <input type='hidden' name='cmd' value='_xclick'>
              <input type='hidden' name='item_name' id='' value='Plan Premium anual'>
              <input type='hidden' name='amount' id='' value='25'>
              <input type='hidden' name='quantity' id='' value='1'>
              <input type='hidden' name='currency_code' value='USD'>
              <input type='hidden' name='lc' value='es_ES'>
              <input type='hidden' name='no_shipping' value='1'>
              <input type='hidden' name='image_url' value='https://i.ibb.co/3BzFJWB/circular-transparente-logo-modified-min.png'>
              <input type='hidden' name='return' value='${baseUrl}/receptor.php'>
              <input type='hidden' name='cancel_return' value='${baseUrl}/membresias.php'>
              <input type='submit' value='CONTRATAR' class='boton'>
              </form>";
              break;
            }
            ?>
          </div>
          <div class="tabla-pago">
            <img src="img/bitcoin.png" alt="bitcoin">
            <h3>Pagar con Bitcoin</h3>
			<br>
            <?php
            function planBtc($direccionbtc){
              $url = "http://api.coindesk.com/v1/bpi/currentprice.json";
              $stats = json_decode(file_get_contents($url), true);
              $btcValue = $stats['bpi']['USD']['rate_float'];
              $btcValuePrice = (float) $btcValue;
              $message = '<br><div class="btc-message">Esta transacción sera verificada manualmente. Cuando completes la transacción, envía el comprobante de pago a teampm2022@gmail.com</div>';
              switch ($_GET['plan']) {
                case "p_basico":
                echo "<h4>Plan seleccionado: Básico</h4><br>";
                $usdCost = 5;
                $convertedCost = $usdCost / $btcValuePrice;
                $convertedCostFormat = number_format($convertedCost, 8);
                echo "<p class='btc'>Dirección BTC: $direccionbtc</p><br>";
                echo "<p class='btc'>El costo en dólares es $$usdCost equivalente a $convertedCostFormat BTC</p><br>";
                echo "<img src='img/btc_qr.png' class='qr'><br>";
                echo $message;
                break;
				case "p_basico_anual":
                  echo "<h4>Plan seleccionado: Básico</h4><br>";
                  $usdCost = 60;
                  $convertedCost = $usdCost / $btcValuePrice;
                  $convertedCostFormat = number_format($convertedCost, 8);
                  echo "<p class='btc'>Dirección BTC: $direccionbtc</p><br>";
                  echo "<p class='btc'>El costo en dólares es $$usdCost equivalente a $convertedCostFormat BTC</p><br>";
                  echo "<img src='img/btc_qr.png' class='qr'><br>";
                  echo $message;
                  break;
                case "p_inter_anual":
                echo "<h4>Plan seleccionado: Intermedio anual</h4><br>";
                $usdCost = 180;
                $convertedCost = $usdCost / $btcValuePrice;
                $convertedCostFormat = number_format($convertedCost, 8);
                echo "<p class='btc'>Dirección BTC: $direccionbtc</p><br>";
                echo "<p class='btc'>El costo en dólares es $$usdCost equivalente a $convertedCostFormat BTC</p><br>";
                echo "<img src='img/btc_qr.png' class='qr'><br>";
                echo $message;
                break;
                case "p_inter_mensual":
                echo "<h4>Plan seleccionado: Intermedio mensual</h4><br>";
                $usdCost = 15;
                $convertedCost = $usdCost / $btcValuePrice;
                $convertedCostFormat = number_format($convertedCost, 8);
                echo "<p class='btc'>Dirección BTC: $direccionbtc</p><br>";
                echo "<p class='btc'>El costo en dólares es $$usdCost equivalente a $convertedCostFormat BTC</p><br>";
                echo "<img src='img/btc_qr.png' class='qr'><br>";
                echo $message;
                break;
                case "p_prem_anual":
                echo "<h4>Plan seleccionado: Premium anual</h4><br>";
                $usdCost = 300;
                $convertedCost = $usdCost / $btcValuePrice;
                $convertedCostFormat = number_format($convertedCost, 8);
                echo "<p class='btc'>Dirección BTC: $direccionbtc</p><br>";
                echo "<p class='btc'>El costo en dólares es $$usdCost equivalente a $convertedCostFormat BTC</p><br>";
                echo "<img src='img/btc_qr.png' class='qr'><br>";
                echo $message;
                break;
                case "p_prem_mensual":
                echo "<h4>Plan seleccionado: Premium mensual</h4><br>";
                $usdCost = 25;
                $convertedCost = $usdCost / $btcValuePrice;
                $convertedCostFormat = number_format($convertedCost, 8);
                echo "<p class='btc'>Dirección BTC: $direccionbtc</p><br>";
                echo "<p class='btc'>El costo en dólares es $$usdCost equivalente a $convertedCostFormat BTC</p><br>";
                echo "<img src='img/btc_qr.png' class='qr'><br>";
                echo $message;
                break;
              }
            }
            planBtc('36LBuGZo1rw7HNRwYWMXL4KV73TNkja3rF');
            ?>
          </div>
        </div>
      </div>

      <div class="footer">
        <div class="top">
          <div class="logo-details">
            <img src="img/teampm.png" class="logo2"></img>
            <span class="logo_name">WINS</span>
          </div>
          <div class="media-icons">
            <a href="https://www.facebook.com/Team-PM-101910268942359"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/TeamPM7"><i class="fab fa-twitter"></i></a>
            <a href="https://www.youtube.com/channel/UCuKuPvNszfCzxSMcCR0cozA"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
        <div class="bottom-details">
          <div class="bottom_text">
            <span class="copyright_text">Copyright 2021 Team PM. Todos los derechos reservados</span>
            <span class="policy_terms">
              <a href="empresa.php">Politicas de privacidad</a>
              <a href="empresa.php">Terminos y condiciones</a>
            </span>
          </div>
        </div>
      </div>
    </section>
 </body>
</html>