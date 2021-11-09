<?php
include 'inc/funciones/sesiones.php';
$paypal_hostname = 'www.sandbox.paypal.com';
$pdt_identity_token = 'M7OmFmn860XiHYyV5IaVItKsmrZPkotV3JrLsf2dxqKJBi--PGxzdZDs2ni';
$tx = $_GET['tx'];
$query = "cmd=_notify-synch&tx=$tx&at=$pdt_identity_token";
$request = curl_init();
curl_setopt($request, CURLOPT_URL, "https://$paypal_hostname/cgi-bin/webscr");
curl_setopt($request, CURLOPT_POST, TRUE);
curl_setopt($request, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($request, CURLOPT_POSTFIELDS, $query);
curl_setopt($request, CURLOPT_SSL_VERIFYPEER, TRUE);
curl_setopt($request, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($request, CURLOPT_HTTPHEADER, array("Host: $paypal_hostname"));
$response = curl_exec($request);
curl_close($request);
if (!$response) {
  echo "Error";
  return;
}
$lines = explode("\n", trim($response));
$keyarray = array();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>W.I.N.S: Gracias</title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel ="shortcut icon" href="img/teampm.png">

  <link rel="stylesheet" href="css/general.css">
  <link rel="stylesheet" href="css/caja-body.css">
  
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
      <li>
        <div class="icon-link">
          <a href="#">
            <i class="fas fa-video"></i>
            <span class="link_name">Video</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Video</a></li>
          <li><a href="video.php" class="local"> Archivo Local</a></li>
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
            <i class="fas fa-shopping-cart"></i>
            <span class="link_name">Membresia</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Membresia</a></li>
		  <li><a href="membresias.php" class="local">Tipos</a></li>
          <li><a href="pago_opciones.php?plan=p_basico" class="local">Basico M.</a></li>
		  <li><a href="pago_opciones.php?plan=p_basico_anual" class="local">Basico A.</a></li>
          <li><a href="pago_opciones.php?plan=p_inter_mensual" class="local">Inter M.</a></li>
          <li><a href="pago_opciones.php?plan=p_inter_anual" class="local">Inter A.</a></li>
          <li><a href="pago_opciones.php?plan=p_prem_mensual" class="local">Premium M.</a></li>
          <li><a href="pago_opciones.php?plan=p_prem_anual" class="local">Premium A.</a></li>
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
      <div class="content">
        <div class="card">
            <h1><center>¡Hemos procesado tu pago exitosamente!</center></h1>
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