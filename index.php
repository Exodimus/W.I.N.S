<?php
include 'inc/funciones/sesiones.php';
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <title>WINS</title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel ="shortcut icon" href="img/teampm.png">

  <link rel="stylesheet" href="css/general.css">
  <link rel="stylesheet" href="css/caja-body.css">

  <link rel="stylesheet" href="css/normalize.css">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  
  <script src="https://kit.fontawesome.com/3688897a60.js" crossorigin="anonymous"></script>
  <script src="js/sidebar.js" type="module"></script>
  <script src="js/descarga.js" type="module"></script>
  <script src="js/sliders.js" type="module"></script>
</head>

<body>
  <div class="sidebar close">
    <div class="logo-details">
      <img src="img/teampm.png" class="logo"></img>
      <span class="logo_name">W.I.N.S.</span>
    </div>
    <ul class="nav-links">
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
          <li><a href="https://music.youtube.com" target="_blank" class="ytmusic">YT Music</a></li>
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
      <span class="text">WINS</span>
      <a class ="sesion" href="login.php?cerrar_sesion=true">Cerrar Sesion</a>
    </div>
    <div class="contenedor-beta">
      <h1 class="welcome">Bienvenido '<?php echo $_SESSION['nombre']?>' a la primera version publica de WINS</h1>

      <div class="adblock">
        <div class="wrapper">
          <div class="right-W">
            <div class="about">
              <p>Felizmente Team PM muestra al público la primera versión del proyecto W.I.N.S. le damos como descarga completamente gratuita.</p>
            </div>

            <div class="download-container">
              <a href="#" class="download-btn"><i class="fab fa-windows"></i> Descarga 32 Bits<i class="fas fa-download"></i></a>
              <div class="countdown"></div>
              <div class="pleaseWait-text">Espere un momento..</div>
              <div class="manualDownload-text">Si la descarga no se inició automáticamente, <a href="" class="manualDownload-link">haga click aqui.</a>
			  </div>
            </div>
			<br>
            <div class="download-container-2">
              <a href="#" class="download-btn-2"><i class="fab fa-windows"></i> Descarga 64 Bits<i class="fas fa-download"></i></a>
              <div class="countdown-2"></div>
              <div class="pleaseWait-text-2">Espere un momento..</div>
              <div class="manualDownload-text-2">Si la descarga no se inició automáticamente, <a href="" class="manualDownload-link-2">haga click aqui.</a>
              </div>
            </div>
          </div>
          
          <div class="left-W">
            <ul>
              <div class="news">Novedades:</div>
              <li>Reproductor de música de archivos locales</li>
              <li>Reproductor de video de archivos locales</li>
              <li>Compra una membresías con bitcoins o dólares</li>
              <li>Elegir reproductores webs externos</li>
              <li>Entre otros...</li>
            </ul>
          </div>
        </div>
        <br>
        <div class="slider">
          <div class="slide active">
            <img src="img/1.png" alt="imagen 1">
            <div class="info">
              <h2>Lanzamiento Publico</h2>
              <br>
              <p>Por parte del Team PM nos complace anunciar el lanzamiento de la primera versión pública del 'proyecto WINS', luego de un tiempo de desarrollo se presenta para el ojo público, con la posibilidad de usarse de forma de web y como instalable para PC.</p>
            </div>
          </div>
          <div class="slide">
            <img src="img/2.png" alt="imagen 2">
            <div class="info">
              <h2>Flamante reproductor de música</h2>
              <br>
              <p>En el 'proyecto WINS', se presenta en estado de recién lanzamiento un reproductor de música por medio de lectura de archivos locales.</p>
            </div>
          </div>
          <div class="slide">
            <img src="img/3.png" alt="imagen 3">
            <div class="info">
              <h2>Nuevo reproductor de video</h2>
              <br>
              <p>Junto al lanzamiento del 'proyecto WINS' se presenta un reproductor de videos que lee sus videos de forma local desde su dispositivo.</p>
            </div>
          </div>
          <div class="slide">
            <img src="img/4.png" alt="imagen 4">
            <div class="info">
              <h2>¡Hágase miembro de WINS!</h2>
              <br>
              <p>Se le proporciona al usuario la opción de hacerse miembro de la nueva comunidad de WINS por medio de una membresía de 3 categorías con opciones de pago mensual o anual.</p>
            </div>
          </div>
          <div class="slide">
            <img src="img/5.png" alt="imagen 5">
            <div class="info">
              <h2>Compártenos tus ideas</h2>
              <br>
              <p>En caso tener alguna duda, idea que le parezca útil de decir o apoyo para nuestro equipo por favor háganosla saber en nuestra sección de contactanos y con gusto el Team PM la leerá.</p>
            </div>
          </div>
          <div class="navigation">
            <i class="fas fa-chevron-left prev-btn"></i>
            <i class="fas fa-chevron-right next-btn"></i>
          </div>
          <div class="navigation-visibility">
            <div class="slide-icon active"></div>
            <div class="slide-icon"></div>
            <div class="slide-icon"></div>
            <div class="slide-icon"></div>
            <div class="slide-icon"></div>
          </div>
        </div>
        <br>
        <div class="comments">
          <div class="caja">
            <div class="image-box">
              <img src="img/contacto.png">
            </div>
            <form id="contact-form" method="post">
              <div class="topic">Contactanos:</div>
              <div class="input-box">
                <input type="text" name="nombre" id="nombre" required>
                <label>Escribe tu nombre</label>
              </div>
              <div class="input-box">
                <input type="email" name="email" id="email" required>
                <label>Escribe tu correo</label>
              </div>
              <div class="input-box">
                <input type="text" name="asunto" id="asunto" required>
                <label>Escribe el asunto</label>
              </div>
              <div class="message-box">
                <textarea name="mensaje" id="mensaje"></textarea>
                <label>Escribe tu mensaje</label>
              </div>
              <div class="input-box">
                <input type="submit" value="Enviar" name="enviar">
              </div>
            </form>
          </div>
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
  <script>
    (function () {
      document.querySelector('#contact-form').addEventListener('submit', contactEnviar)
    }()); 

    function contactEnviar(e) {
      e.preventDefault();
      let nombre = document.querySelector("#nombre").value,
          email = document.querySelector("#email").value,
          asunto = document.querySelector("#asunto").value,
          mensaje = document.querySelector("#mensaje").value

      let datos = new FormData();
      datos.append('nombre', nombre)
      datos.append('email', email)
      datos.append('asunto', asunto)
      datos.append('mensaje', mensaje)
      const xhr = new XMLHttpRequest();
      xhr.open("POST", "inc/funciones/correos.php", true)
      xhr.onload = function () {
        if (this.status === 200) {
          swal({
            title: 'Correo enviado correctamente',
            type: 'success'

          })
        }
      }
      xhr.send(datos)
    }



</script>
<script src="js/sweetalert2.all.min.js"></script>
</body>
</html>