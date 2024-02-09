function agregarUsuario() {
    var formulario = document.getElementById("miFormulario");

    var nuevoUsuario = {
        nombreCompleto: formulario.nombreCompleto.value,
        id: formulario.id.value,
        pass: formulario.pass.value,
        campana: formulario.campaña.value,
        rut: formulario.rut.value,
        rutExtranjero: formulario.rutExtranjero.value,
        supervisor: formulario.supervisor.value
    };

    // Agregar el nuevo usuario al almacenamiento local
    var usuarios = JSON.parse(localStorage.getItem("usuarios")) || [];
    usuarios.push(nuevoUsuario);
    localStorage.setItem("usuarios", JSON.stringify(usuarios));

    // Actualizar la tabla de usuarios
    actualizarTablaUsuarios();
}

function actualizarTablaUsuarios() {
    var tablaUsuarios = document.getElementById("tablaUsuarios");
    tablaUsuarios.innerHTML = "<tr><th>Nombre completo</th><th>Usuario</th><th>PASS</th><th>Campaña</th><th>RUT</th><th>RUT Extranjero</th><th>Supervisor</th></tr>";

    var usuarios = JSON.parse(localStorage.getItem("usuarios")) || [];
    for (var i = 0; i < usuarios.length; i++) {
        var usuario = usuarios[i];
        var fila = "<tr>";
        fila += "<td>" + usuario.nombreCompleto + "</td>";
        fila += "<td>" + usuario.id + "</td>";
        fila += "<td>" + usuario.pass + "</td>";
        fila += "<td>" + usuario.campana + "</td>";
        fila += "<td>" + usuario.rut + "</td>";
        fila += "<td>" + usuario.rutExtranjero + "</td>";
        fila += "<td>" + usuario.supervisor + "</td>";
        fila += "</tr>";
        tablaUsuarios.innerHTML += fila;
    }
}

// Cargar la tabla de usuarios al cargar la página
window.onload = function() {
    actualizarTablaUsuarios();
};

function editarUsuario(id) {
    // Lógica para editar usuario con el ID proporcionado
    alert('Editar usuario con ID ' + id);
}

function eliminarUsuario(id) {
    // Lógica para eliminar usuario con el ID proporcionado
    alert('Eliminar usuario con ID ' + id);
}





