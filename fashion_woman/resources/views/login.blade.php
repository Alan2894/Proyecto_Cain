@extends('layouts.app')
@section('title','Inicio De Sesión')
@section('content')
<body>
    <div class="container">
        <h2>Inicia sesión - Fashion Woman</h2>
        <p>"Descubre lo mejor de la moda femenina."</p>

        <!-- Formulario de inicio de sesión -->
        <form action="{{ route ('login.validar') }}" method="post">
        @csrf
        <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" name="email" placeholder="Ingresa tu correo electrónico" required>
            </div>
            <div class="form-group">
                <label for="contrasena">Contraseña</label>
                <input type="password" name="contrasena" placeholder="Ingresa tu contraseña" required>
            </div>
            <div class="buttons">
                <button type="submit" class="btn">Inicia sesión</button>
            </div>
        </form>

        <div class="login-link">
            <p>"Tu estilo, nuestra inspiración."</p>
        </div>
    </div>
    @if(session('success'))
       <div class="alert alert-success">
           {{ session('success') }}
       </div>
    @endif

    @if(session('error'))
       <div class="alert alert-danger">
           {{ session('error') }}
       </div>
    @endif 
</body>
@endsection
