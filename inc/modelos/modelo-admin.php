<?php
$accion = $_POST['accion'];
$email = $_POST['email'];
if (isset($_POST['password'])) {
    $password = $_POST['password'];
}
if (isset($_POST['usuario'])) {
    $usuario = $_POST['usuario'];
}
if($accion === 'crear') {
    $opciones = array(
        'cost' => 12
    );
    $hash_password = password_hash($password, PASSWORD_BCRYPT, $opciones);
    include '../funciones/conexion.php';
    
    try {
        $stmt = $conn->prepare("INSERT INTO usuarios (usuario, email, password) VALUES (?, ?, ?) ");
        $stmt->bind_param('sss', $usuario, $email, $hash_password);
        $stmt->execute();
        if($stmt->affected_rows > 0) {
            $respuesta = array(
                'respuesta' => 'correcto',
                'id_insertado' => $stmt->insert_id,
                'tipo' => $accion
            );
        }  else {
            $respuesta = array(
                'respuesta' => 'error'
            );
        }
        $stmt->close();
        $conn->close();
    } catch(Exception $e) {
        $respuesta = array(
            'error' => $e->getMessage()
        );
    }
    
    echo json_encode($respuesta);
}

if($accion === 'login') {
    
    include '../funciones/conexion.php';
    
    try {
        $stmt = $conn->prepare("SELECT usuario, id, password FROM usuarios WHERE usuario = ?");
        $stmt->bind_param('s', $usuario);
        $stmt->execute();
        $stmt->bind_result($nombre_usuario, $id_usuario, $pass_usuario);
        $stmt->fetch();
        if($nombre_usuario){
            if(password_verify($password,$pass_usuario )){
                session_start();
                $_SESSION['nombre'] = $usuario;
                $_SESSION['id'] = $id_usuario;
                $_SESSION['login'] = true;
                $respuesta = array(
                    'respuesta' => 'correcto',
                    'nombre' => $nombre_usuario,
                    'tipo' => $accion
                );
            } else {
                $respuesta = array(
                        'resultado' => 'Password Incorrecto'
                );
            }

        } else {
            $respuesta = array(
                'error' => 'Usuario no existe'
            );
        }
        $stmt->close();
        $conn->close();
    } catch(Exception $e) {
        $respuesta = array(
            'pass' => $e->getMessage()
        );
    }
    
    echo json_encode($respuesta);
}


if($accion === 'restablecer') {
    include '../funciones/conexion.php';
    include '../funciones/mail_reset.php';
    include '../../js/pass_recover.php';
    
    try {
        $stmt = $conn->prepare("INSERT INTO password_recover(email, token, codigo) VALUES (?, ?, ?)");
        $stmt->bind_param('ssi', $email, $token, $codigo);
        $stmt->execute();
        if($stmt->affected_rows > 0) {
            $respuesta = array(
                'respuesta' => 'correcto',
                'id_insertado' => $stmt->insert_id,
                'tipo' => $accion
            );
            echo '<p>Verifica tu email para restablecer tu cuenta</p>';
        }  else {
            $respuesta = array(
                'respuesta' => 'error'
            );
        }
        $stmt->close();
        $conn->close();
    } catch(Exception $e) {
        $respuesta = array(
            'error' => $e->getMessage()
        );
    }
    
    echo json_encode($respuesta);
}

if($accion === 'cambiar') {
    $opciones = array(
        'cost' => 12
    );
    $hash_password = password_hash($password, PASSWORD_BCRYPT, $opciones);
    include '../funciones/conexion.php';
    
    try {
            $stmt = $conn->prepare("UPDATE usuarios SET password=? WHERE email=?");
            $stmt->bind_param('ss', $hash_password, $email);
            $stmt->execute();
            if($stmt->affected_rows > 0) {
                $respuesta = array(
                    'respuesta' => 'correcto',
                    'email' => $email,
                    'tipo' => $accion
                );
            }  else {
                $respuesta = array(
                    'respuesta' => 'error'
                );
            }
            $stmt->close();
            $conn->close();

    } catch(Exception $e) {
        $respuesta = array(
            'error' => $e->getMessage()
        );
    }
    echo json_encode($respuesta);
}








