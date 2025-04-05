@extends('layouts.app')
@section('title','registro')
@section('content')
<body>
<div class="container">
        <h2>Registro - Fashion Woman</h2>
        <p>"Únete a nosotros y descubre lo mejor de la moda femenina."</p>

        <!-- Formulario de registro -->
        <form action="{{ route ('registro.store') }}" method="post" id="formulario">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre Completo</label>
                <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre completo" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" placeholder="Ingresa tu correo electrónico" required>
            </div>
            <div class="form-group">
                <label for="contrasena">Contraseña</label>
                <input type="password" id="contrasena" name="contrasena" placeholder="Crea una contraseña" required>
            </div>
            <div class="buttons">
                <button type="submit">Registrate</button>  
            </div>
        </form>

        <div class="login">
            <p>¿Ya tienes cuenta? <a href="login">Inicia sesión aquí</a></p>
        </div>
    </div>
</body>
@endsection
