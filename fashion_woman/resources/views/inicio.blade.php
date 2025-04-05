@extends('layouts.app')
@section('title','inicio')
@section('content')
<body>
    <!-- Ventana de contenido con carrusel -->
    <div class="content">
        <div class="background-overlay"></div>

        <div class="carousel-container">
            <h1>Bienvenido a nuestra tienda</h1>
            <h3>Explora nuestros productos</h3>

            <!-- Carrusel de imágenes -->
            <div class="carousel">
                <button class="prev" onclick="moveCarousel(-1)">❮</button>
                <div class="carousel-images" id="carousel-images">
                    <img src="img/ropa1.jpg" alt="Imagen 1">
                    <img src="img/ropa2.jpg" alt="Imagen 2">
                    <img src="img/ropa3.jpg" alt="Imagen 3">
                    <img src="img/ropa4.jpg" alt="Imagen 4">
                    <img src="img/ropa7.jpg" alt="Imagen 5">
                    <img src="img/ropa8.jpg" alt="Imagen 6">
                    <img src="img/ropa9.jpg" alt="Imagen 7">
                    <img src="img/ropa10.jpg" alt="Imagen 8">
                </div>
                <button class="next" onclick="moveCarousel(1)">❯</button>
            </div>
        </div>
    </div>
</body>

@endsection

