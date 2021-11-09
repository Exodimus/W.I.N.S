eventListeners();
function eventListeners() {
    document.querySelector('#formulario').addEventListener('submit', validarRegistro);
}

function validarRegistro(e) {
    e.preventDefault();
    var usuario = document.querySelector('#usuario').value,
    password = document.querySelector('#password').value,
    tipo = document.querySelector('#tipo').value
    if (document.querySelector('#email') != null) {
        var email = document.querySelector('#email').value
    }
    if(document.querySelector('#pass2') === null){
        var pass2 = document.querySelector('#password').value
    } else{
        var pass2 = document.querySelector('#pass2').value
    }
    if(usuario === '' || password === '' || email === '' || pass2 === ''){
        swal({
            type: 'error',
            title: 'Error!',
            text: 'Ambos campos son obligatorios!'
        })
    } else {
        if(password === pass2){
            var datos = new FormData();
            datos.append('usuario', usuario);
            datos.append('password', password);
            datos.append('email', email);
            datos.append('accion', tipo);
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'inc/modelos/modelo-admin.php', true);
            xhr.onload = function(){
                if(this.status === 200) {
                    var respuesta = JSON.parse(xhr.responseText);
                    console.log(respuesta);
                    if(respuesta.respuesta === 'correcto') {
                        if(respuesta.tipo === 'crear') {
                            swal({
                                title: 'Usuario Creado',
                                text: 'Presiona OK para ir al login',
                                type: 'success'
                            })
                            .then(resultado => {
                                if(resultado.value) {
                                    window.location.href = 'login.php';
                                }
                            })
                        } else if(respuesta.tipo === 'login'){
                            swal({
                                title: 'Login Correcto',
                                text: 'Presiona OK para ir a la app',
                                type: 'success'
                            })
                            .then(resultado => {
                                if(resultado.value) {
                                    window.location.href = 'index.php';
                                }
                            })
                        }
                    } else{
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