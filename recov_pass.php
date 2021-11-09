<?php
include 'inc/funciones/funciones.php';
include 'inc/templates/header.php';
?>
    <div class="contenedor-formulario">
        <h1>Ingresa tu Email</h1>
        <form id="formulario" class="caja-login caja-recov" method="post">
            <div class="campo">
                <label for="email">Email: </label>
                <input type="email" name="email" id="email" placeholder="Email">
            </div>
            <div class="campo recov camp_2">
			<div class="camp_login">
                        <a href="login.php" class="options"><i class="fas fa-arrow-circle-left"></i></a>
						</div>
                <input type="hidden" id="tipo" value="restablecer">
                <input type="submit" class="boton" value="Restablecer">
            </div>
        </form>
    </div>

<?php
include 'inc/templates/footer-cuenta.php';
?>