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
      <div class="contenedor">
        <section class="bienvenidos">
          <h2>Precios de Membresías</h2>
          <p>Las membresías a esta página son opcionales, por si ustedes quieren apoyar a los creadores y desean obtener algunas ventajas a la hora de utilizar la aplicación, de lo contrario puede seguir con la versión gratuita.</p>
        </section>
        <?php
        $baseUrl = 'https://teampmwins.000webhostapp.com';
        ?>  
        <div class="tabla">
          <img src="img/logo.png" alt="">
          <h4>Plan Básico</h4>
          <div class="precio-1"><span class="dolar">$</span>5.00<span class="mes">Mensuales</span></div>
          <span class="mes"><b>Un pago anual de $60</b></span>
          <ul class="lista-precios">
            <li class="lista-espacios">Sin anuncios</li>
            <li class="lista-espacios">Funcionalidad de solo las aplicaciones básicas</li>
            <li class="lista-espacios">Con ciertas limitaciones</li>
            <li class="lista-espacios">Calidad de video soportada hasta 480p</li>
          </ul>
          <form action="pago_opciones.php" method="get">
            <input type="submit" value="CONTRATO MENSUAL" class="boton">
            <input type="hidden" name="plan" value="p_basico" >
          </form>
          <form action="pago_opciones.php" method="get">
            <input type="submit" value="CONTRATO ANUAL" class="boton">
            <input type="hidden" name="plan" value="p_basico_anual" >
          </form>
        </div>
        <div class="tabla hover destacado">
          <img src="img/logo.png" alt="">
          <h4>Plan Intermedio</h4>
					<div class="precio-1">
            <span class="dolar">$</span>15.00<span class="mes">Mensuales</span>
          </div>
          <span class="mes"><b>Un pago anual de $180</b></span>
          <ul class="lista-precios">
            <li class="lista-espacios">Sin anuncios</li>
            <li class="lista-espacios">Funcionalidad de casi todas las aplicaciones</li>
            <li class="lista-espacios">Sin limitaciones</li>
            <li class="lista-espacios">Calidad de video soportada hasta 1080p</li>
          </ul>
          <form action="pago_opciones.php" method="get">
            <input type="submit" value="CONTRATO MENSUAL" class="boton">
            <input type="hidden" name="plan" value="p_inter_mensual">
          </form>
          <form action="pago_opciones.php" method="get">
            <input type="submit" value="CONTRATO ANUAL" class="boton">
            <input type="hidden" name="plan" value="p_inter_anual" >
          </form>
        </div>
        <div class="tabla">
          <img src="img/logo.png" alt="">
          <h4>Plan Premium</h4>
          <div class="precio-1"><span class="dolar">$</span>25.00<span class="mes">Mensuales</span></div>
          <span class="mes"><b>Un pago anual de $300</b></span>
          <ul class="lista-precios">
            <li class="lista-espacios">Sin anuncios</li>
            <li class="lista-espacios">Funcionalidad de todas las aplicaciones</li>
            <li class="lista-espacios">Sin limitacion alguna</li>
            <li class="lista-espacios">Calidad de video soportada hasta 4k</li>
          </ul>
          <form action="pago_opciones.php" method="get">
            <input type="submit" value="CONTRATO MENSUAL" class="boton">
            <input type="hidden" name="plan" value="p_prem_mensual" >
          </form>
          <form action="pago_opciones.php" method="get">
            <input type="submit" value="CONTRATO ANUAL" class="boton">
            <input type="hidden" name="plan" value="p_prem_anual" >
          </form>
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