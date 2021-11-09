<?php 
$bytes = random_bytes(5);
$token =bin2hex($bytes);
?>

<script>
    eventListeners();
    function eventListeners() {
        document.querySelector('#formulario').addEventListener('submit', validarCampoEmail);
    }
    function validarCampoEmail(e) {
        e.preventDefault();
        var tipo = document.querySelector('#tipo').value,
        email = document.querySelector('#email').value,
        token = "<?php echo "$token"; ?>"
        console.log(token);
        if(email === ''){
            swal({
                type: 'error',
                title: 'Error!',
                text: 'Campo obligatorio!'
            })
        } else{
            swal({
                title: 'Hemos enviado un codigo a tu correo',
                text: 'Presiona OK para ir a la pagina de verificación',
                type: 'info'
            })
            .then(resultado => {
                window.location.href = ('https://teampmwins.000webhostapp.com/reset.php?email='+email+'&token='+'<?php echo "${token}"; ?>');
            })
            var datos = new FormData();
            datos.append('email', email);
            datos.append('accion', tipo);
            datos.append('token', token);
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'inc/modelos/modelo-admin.php', true);
            xhr.send(datos);
        }
    }
</script>