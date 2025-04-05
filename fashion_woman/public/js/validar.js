// Convierte el nombre a mayúsculas automáticamente al escribir
document.getElementById('nombre').addEventListener('input', function() {
    this.value = this.value.toUpperCase();
});

// Función para validar el formulario de registro
document.getElementById('formulario-registro').addEventListener('submit', function(event) {
    event.preventDefault();  // Evita que se envíe el formulario sin validación

    // Obtener los valores del formulario
    var name = document.getElementById('nombre').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('conntrasena').value;
    var confirmPassword = document.getElementById('contrasena').value;

    // Validación de nombre (todo en mayúsculas, pero ya se convierte automáticamente)
    var nameValid = /^[A-Z\s]+$/.test(name);
    if (!nameValid) {
        alert("El nombre debe estar en mayúsculas.");
        return;
    }

    // Validación de correo electrónico
    var emailValid = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/.test(email);
    if (!emailValid) {
        alert("Por favor ingresa un correo electrónico válido.");
        return;
    }

    // Validación de contraseña (mínimo 8 caracteres, al menos una mayúscula, una minúscula y un número)
    var passwordValid = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/.test(password);
    if (!passwordValid) {
        alert("La contraseña debe tener al menos 8 caracteres, con al menos una mayúscula, una minúscula y un número.");
        return;
    }

    // Validación de confirmación de contraseña
    if (password !== confirmPassword) {
        alert("Las contraseñas no coinciden.");
        return;
    }

    // Si todo es válido, puedes enviar el formulario (en este caso, se redirige a la acción deseada)
    alert("Formulario enviado correctamente.");
    // Aquí puedes usar el método de enviar formulario como normalmente lo harías:
    // this.submit();
});