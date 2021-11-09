eventListeners();
function eventListeners() {
    document.querySelector('#formulario').addEventListener('submit', validarContraseña);
}
function validarContraseña(e) {
    e.preventDefault();
    var p1 = document.querySelector('#p1').value,
    p2 = document.querySelector('#p2').value,
    tipo = document.querySelector('#tipo').value,
    email = document.querySelector('#email').value
    if(p1 === '' || p2 === '' ){
        swal({
            type: 'error',
            title: 'Error!',
            text: 'Ambos campos son obligatorios!'
        })
    } else{
        if(p1 === p2 ){
            console.log("son iguales");
            var datos = new FormData();
            datos.append('password', p1);
            datos.append('accion', tipo);
            datos.append('email', email);
            var xhr = new XMLHttpRequest();
                xhr.open('POST', 'inc/modelos/modelo-admin.php', true);
                xhr.onload = function(){
                    if(this.status === 200) {
                        var respuesta = JSON.parse(xhr.responseText);
                        console.log(respuesta);
                        if(respuesta.respuesta === 'correcto') {
                            if(respuesta.tipo === 'cambiar'){
                                swal({
                                    title: 'Contraseña cambiada correctamente',
                                    text: 'Presiona OK para ir al login',
                                    type: 'success'
                                })
                                .then(resultado => {
                                    if(resultado.value) {
                                        window.location.href = 'login.php';
                                    }
                                })
                            }
                        } else {
                            swal({
                                title: 'Error',
                                text: 'Usuario o contraseña incorrectas',
                                type: 'error'
                            })
                        }
                    }
                }
                xhr.send(datos);
            } else{
                swal({
                    type: 'error',
                    title: 'Error!',
                    text: 'Las contraseñas no coinciden!'
                })
            } 
        }
    }