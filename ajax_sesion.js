$(document).ready(function(){
    $('form').submit(function(e){
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: 'validar_usuario.php',
            data: formData,
            success: function(response){
                if(response === 'success'){
                    // Si las credenciales son correctas, muestra el mensaje de éxito
                    showSuccess();
                    // Redirecciona a formulario.php después de 3 segundos
                    setTimeout(function(){
                        window.location.href = 'main.php';
                    }, 1000);
                } else {
                    // Si las credenciales son incorrectas, muestra el mensaje de alerta
                    showAlert('Usuario o contraseña incorrecta.');
                }
            },
            error: function(){
                // En caso de error en la solicitud AJAX
                alert('Hubo un error al procesar la solicitud.');
            }
        });
    });
});

function showAlert(message) {
    var alertDiv = $('<div class="alert alert-danger alert-dismissible mt-3" role="alert" style="position: fixed; top: -100px; left: 50%; transform: translateX(-50%); transition: top 0.5s ease-in-out;">' +
                        message +
                        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
                    '</div>');
    $('body').append(alertDiv);
    setTimeout(function(){
        alertDiv.css('top', '10px');
    }, 100);
    setTimeout(function(){
        alertDiv.css('top', '-100px');
    }, 3000);
}

function showSuccess() {
    var successDiv = $('<div id="success-alert" class="alert alert-success mt-3" style="position: fixed; top: -100px; left: 50%; transform: translateX(-50%); transition: top 0.5s ease-in-out;">' +
                        'Has iniciado sesión exitosamente.' +
                    '</div>');
    $('body').append(successDiv);
    setTimeout(function(){
        successDiv.css('top', '10px');
    }, 100);
    setTimeout(function(){
        successDiv.css('top', '-100px');
    }, 3000);
}