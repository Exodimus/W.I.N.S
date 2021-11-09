<?php
include 'inc/funciones/conexion.php';
include 'inc/funciones/funciones.php';
$email =$_POST['email'];
$token =$_POST['token'];
$codigo =$_POST['codigo'];
try { 
    $stmt = $conn->prepare("SELECT email, token, codigo FROM password_recover WHERE email = ? AND token = ? AND codigo = ?");
    $stmt->bind_param('ssi', $email, $token, $codigo);
    $stmt->execute();
    if($email) {
        $respuesta = array(
            'respuesta' => true
        );
    }  else {
        $respuesta = array(
            'respuesta' => false
        );
    }
    $stmt->close();
    $conn->close();
}
catch(Exception $e) {
    $respuesta = array(
        'error' => $e->getMessage()
    );
}
?>

<?php
include 'inc/templates/header.php';
?>
    <div class="contenedor-formulario">
        <?php
        if($respuesta){
            ?>
            <h1>Restablecer contraseña</h1>
            <form id="formulario" class="caja-login" method="post">
                <div class="campo">
                    <label for="p1">Nueva contraseña:</label>
                    <i class="fas fa-eye" id="icon1" style="position: absolute; right:10px; cursor:pointer;" onclick="mostrarPass()"></i>
                    <input type="password" name="p2" id="p1" placeholder="Contraseña" required>
                </div>
                <div class="campo">
                    <label for="p2">Confirmar contraseña:</label>
                    <i class="fas fa-eye" id="icon1" style="position: absolute; right:10px; cursor:pointer;" onclick="mostrarPass2()"></i>
                    <input type="password" name="p1" id="p2" placeholder="Confirmar contraseña" required>
                    <input type="hidden" id="email" name="email" value="<?php echo $email?>">
                </div>
                <div class="campo camp_2">
				<div class="camp_login">
                        <a href="reset.php" class="options"><i class="fas fa-arrow-circle-left"></i></a>
						</div>
                    <input type="hidden" id="tipo" value="cambiar">
                    <input type="submit" class="boton options" value="Cambiar">
                </div>
            </form>

            <script>
                function mostrarPass(){
                    var tipo = document.getElementById("p1");
                    if(tipo.type == "password"){
                        tipo.type = "text";
                    }else{
                        tipo.type = "password";
                    }
                }
                function mostrarPass2(){
                    var tipo = document.getElementById("p2");
                    if(tipo.type == "password"){
                        tipo.type = "text";
                    }else{
                        tipo.type = "password";
                    }
                }
            </script>
            
            <?php
        } else{
            ?>
            
            <script>
                swal({
                    type: 'error',
                    title: 'Ups!',
                    text: 'Ocurrio un error'
                })
            </script>
            <?php
        }
        ?>
    </div>

<?php
include 'inc/templates/footer-cuenta.php';
?>