<?php
include 'inc/funciones/funciones.php';
include 'inc/templates/header.php';
?>
    <div class="contenedor-formulario">
        <h1>Registro</h1>
        <form id="formulario" class=" caja-login" method="post">
            <div class="campo">
                <label for="usuario">Usuario: </label>
                <input type="text" name="usuario" id="usuario" placeholder="Usuario" required>
            </div>
            <div class="campo">
                <label for="email">Correo Electronico: </label>
                <input type="email" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="campo">
                <label for="password">Contraseña: </label>
                <i class="fas fa-eye" id="icon1" style="position: absolute; right:10px; cursor:pointer;" onclick="mostrarPass()"></i>
                <input type="password" name="pass" id="password" placeholder="Contraseña" required>
            </div>
            <div class="campo">
                <label for="password">Confirmar Contraseña: </label>
                <i class="fas fa-eye" id="icon2" style="position: absolute; right:10px; cursor:pointer;" onclick="mostrarPass2()"></i>
                <input type="password" name="pass" id="pass2" placeholder="Contraseña" required>
            </div>
            <div class="fuerza">
                <div class="campo camp_2">
                    <a href="login.php" class="options">Inicia Sesión Aquí</a>
                    <input type="hidden" id="tipo" value="crear">
                    <input type="submit" class="boton options" value="Crear cuenta">
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
        function mostrarPass2(){
            var tipo = document.getElementById("pass2");
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