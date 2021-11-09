<?php
include 'inc/funciones/sesiones.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <title>Empresa</title>

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
          <h1>Empresa:</h1><hr>
          <br>
          <p>WINS inicio de la idea de un grupo de estudiantes de crear un programa de Sistema Web que es multifunciones para dar entretenimiento a los usuarios, ya sea al reproducir contenido multimedia, tanto de video como de audio, ya sea para que lo usen con archivos local o desde la web.</p>
          <br>
          <p>Esta empresa se creó como trabajo de exposición estudiantil y pensado como a futuro ser un programa de renombre para nuestro país, teniendo en mente el ayudar a lo más posible al uso de ella, ya sé que bastante minimalista a la hora de ejecutar el programa y de fácil utilidad para el usuario.</p>
          <br>
          <p>Fundada en 2021 se quiere lograr formar que WINS se vuelva uno de los más importantes programas Web en El Salvador, por ello se brinda un muy estricto y rígido mantenimiento al programa, a la hora de arreglas bugs, se solucionan de una manera rápida y eficaz.</p>
          <br>
          <h1>Empleados:</h1><hr>
          <br>
          <p>Los empleados que conforman este equipo son estudiantes de bachillerato certificados por Insafort y la fundación de Carlos Slim, siendo los empleados los siguientes:</p>
          <br>
          <li>Carlos Rivera Perez:<br>Líder del equipo conformado, aportando la mayor parte de la creación del programa, ayudando en solucionesd e bugs y areas de mantenimiento del programa, siendo el líder también dirige a el resto de los empleados en WINS.</li>
          <br>
          <li>Jorge Miguel Alberto:<br>Ayudo mucho en la creacion del programa de video tanto local como web, tanto en ayuda con el tema del los metodos de suscripciones que tiene la app, y ayuda en el mantenimiento de la app en general, ayudando con nuevas ideas innovadoras.</li>
          <br>
          <li>Oscar Argueta Ortiz:<br>El empleado aporto al programa WINS en el área de soporte técnico, ayudo en la creación del prgrama, en las secciones, siendo el segundo pilar central de la empresa aportando las ideas innovadoras para un mejor rendimiento y mantenimiento del programa.</li>
          <br>
          <li>Mario Zaldaña Orellana: <br>Ayudo en la creación del diseño de nuestro programa con ayuda de Oscar, además ayudo con la elecciónes de actualizaciones futuras que tendra el programa, simplemente una mente creativa para servicio al cliente que ironía....</li>
          <br>
          <h1>Misión:</h1><hr>
          <br>
          <p>Ser una empresa que elaborara sistemas webs para un buen funcionamiento para usuarios, ya sea con su buen rendimiento y su accesibilidad y disponibles tanto en dispositivos móviles y en computadoras, así garantizamos una buena experiencia para los usuarios que usen la web.</p>
          <br>
          <h1>Visión:</h1><hr>
          <br>
          <p>Convertirnos en una empresa referencia en la creación de sistemas webs con una mejor accesibilidad y un buen rendimiento, y mejorar la experiencia de los usuarios al navegar por la web siendo de buena calidad y garantizar un trabajo de excelente rendimiento.</p>
          <br>
          <h1>Politicas de Privacidad: </h1><hr>
          <br>
          <p>Es importante declarar los reglamentos que ocupamos en WINS, ya sea de las políticas de cancelamiento de suscripciones, como y normas y valores que siguen los empleados con su trabajo.</p>
          <br>
          <p>Las normas que se siguen son las siguientes:</p>
          <br>
          <li>No se dará nombres o información personal de los trabajadores (haciendo que los nombres dados sean alias o ficticios de los trabajadores), junto a que el personal que entrega no debe interferir en las suscripciones de los usuarios.</li>
          <br>
          <li>En caso de que compre una suscripción y no se le valide, comunicarse con el personal para que se valide su suscripción.</li>
          <br>
          <li>Si tiene algún problema con la calidad de los videos, puede contactar con el personal que administra el área multimedia video.</li>
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