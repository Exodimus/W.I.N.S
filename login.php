<?php
session_start();
include 'inc/funciones/funciones.php';
include 'inc/templates/header.php';
if(isset($_GET['cerrar_sesion'])) {
    $_SESSION = array();
}
?>
    <div class="contenedor-formulario">
        <h1>Inicio de Sesion</h1>
        <form id="formulario" class="caja-login" method="post">
            <div class="campo">
                <label for="usuario">Usuario: </label>
                <input type="text" name="usuario" id="usuario" placeholder="Usuario" required>
            </div>
            <div class="campo">
                <label for="password">Contraseña: </label>
                <i class="fas fa-eye" id="icon1" style="position: absolute; right:10px; cursor:pointer;" onclick="mostrarPass()"></i>
                <input type="password" name="pass" id="password" placeholder="Contraseña" required>
            </div>
            <div class="fuerza">
                <div class="campo camp_2">
                    <div class="camp_login">
                        <a href="registro.php" class="options">Crea una cuenta nueva</a>
                        <a href="recov_pass.php" class="options">¿Olvido su contraseña?</a>
                    </div>
                    <input type="hidden" id="tipo" value="login">
                    <input type="submit" class="boton options" value="Iniciar Sesión">
                </div>
            </div>
        </form>
    </div>

    <script>
        function mostrarPass(){
            var tipo = document.getElementById("password");
            if(tipo.type == "password"){
                tipo.type = "text";
            }else{
                tipo.type = "password";
            }
        }
    </script>

<?php
include 'inc/templates/footer-cuenta.php';
?>