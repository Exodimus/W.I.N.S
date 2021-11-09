<script src="js/sweetalert2.all.min.js"></script>
<?php 
    $actual = obtenerPaginaActual();
    if($actual === 'registro' || $actual === 'login') {
        echo '<script src="js/formulario.js"></script>';
    }
    if ($actual === 'recov_pass') {
        include 'js/pass_recover.php';
    }
    if ($actual === 'verificar_token') {
        echo '<script src="js/cambiar_password.js"></script>';
    }
?>
</body>
</html>