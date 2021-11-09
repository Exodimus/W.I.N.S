<?php
include 'inc/funciones/funciones.php';
include 'inc/templates/header.php';
if( isset($_GET['email'])  && isset($_GET['token']) ){
    $email = $_GET['email'];
    $token = $_GET['token'];
} else{
    header("Location:login.php");
}
?>
    <div class="contenedor-formulario">
        <h1>Verificar codigo</h1>
        <form id="formulario" class="caja-login caja-recov" action="verificar_token.php" method="post">
            <div class="campo">
                <label for="codigo">Codigo: </label>
                <input type="number" name="codigo" id="codigo" placeholder="Codigo">
                <input type="hidden" name="email" value="<?php echo $email;?>">
                <input type="hidden" name="token" value="<?php echo $token;?>">
            </div>
            <div class="campo camp_2">
                <div class="camp_login">
                        <a href="recov_pass.php" class="options"><i class="fas fa-arrow-circle-left"></i></a>
						</div>
				<input type="submit" class="boton options" value="Restablecer">
            </div>
        </form>
    </div>

<?php
include 'inc/templates/footer-cuenta.php';
?>