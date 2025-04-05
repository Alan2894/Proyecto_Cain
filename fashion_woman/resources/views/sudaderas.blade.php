@extends('layouts.app')
@section('title','sudaderas')
@section('content')
<body>

    <!-- Contenido principal -->
    <div class="content">
        <h1>Categoría Sudaderas</h1>
        <div class="product-container">
            <!-- Producto 1 -->
            <div class="product">
                <img src="img/su1.jpg" alt="Sudadera 1" onclick="openModal(this)">
                <div class="product-info">
                    <p><strong>Sudadera con Capucha</strong></p>
                    <p>Precio: $45.00</p>
                    <p>En existencia: 10</p>
                </div>
            </div>
            <!-- Producto 2 -->
            <div class="product">
                <img src="img/su2.jpg" alt="Sudadera 2" onclick="openModal(this)">
                <div class="product-info">
                    <p><strong>Sudadera Deportiva</strong></p>
                    <p>Precio: $50.00</p>
                    <p>En existencia: 8</p>
                </div>
            </div>
            <!-- Producto 3 -->
            <div class="product">
                <img src="img/su3.jpg" alt="Sudadera 3" onclick="openModal(this)">
                <div class="product-info">
                    <p><strong>Sudadera de Algodón</strong></p>
                    <p>Precio: $40.00</p>
                    <p>En existencia: 12</p>
                </div>
            </div>
            <!-- Producto 4 -->
            <div class="product">
                <img src="img/su4.jpg" alt="Sudadera 4" onclick="openModal(this)">
                <div class="product-info">
                    <p><strong>Sudadera con Estampado</strong></p>
                    <p>Precio: $55.00</p>
                    <p>En existencia: 6</p>
                </div>
            </div>
            <!-- Producto 5 -->
            <div class="product">
                <img src="img/su5.jpg" alt="Sudadera 5" onclick="openModal(this)">
                <div class="product-info">
                    <p><strong>Sudadera Gris Unisex</strong></p>
                    <p>Precio: $47.00</p>
                    <p>En existencia: 15</p>
                </div>
            </div>
            <!-- Producto 6 -->
            <div class="product">
                <img src="img/su6.jpg" alt="Sudadera 6" onclick="openModal(this)">
                <div class="product-info">
                    <p><strong>Sudadera Oversized</strong></p>
                    <p>Precio: $60.00</p>
                    <p>En existencia: 5</p>
                </div>
            </div>
            <!-- Producto 7 -->
            <div class="product">
                <img src="img/su7.jpg" alt="Sudadera 7" onclick="openModal(this)">
                <div class="product-info">
                    <p><strong>Sudadera Vintage</strong></p>
                    <p>Precio: $65.00</p>
                    <p>En existencia: 7</p>
                </div>
            </div>
            <!-- Producto 8 -->
            <div class="product">
                <img src="img/sudadera8.jpg" alt="Sudadera 8" onclick="openModal(this)">
                <div class="product-info">
                    <p><strong>Sudadera Técnica</strong></p>
                    <p>Precio: $72.00</p>
                    <p>En existencia: 9</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Ventana Modal para la imagen ampliada -->
    <div class="modal" id="modal" onclick="closeModal()">
        <span class="modal-close" onclick="closeModal()">X</span>
        <img id="modal-img" src="" alt="Imagen ampliada">
    </div>
</body>
@endsection
