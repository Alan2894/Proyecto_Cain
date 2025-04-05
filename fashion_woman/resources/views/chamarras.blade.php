@extends('layouts.app')
@section('title','chamarras')
@section('content')
<body>

    <!-- Contenido principal -->
    <div class="content">
        <h1>Categoría Chamarras</h1>
        <div class="product-container">
            <!-- Producto 1 -->
            <div class="product">
                <img src="img/ch1.jpg" alt="Chamarra 1" onclick="openModal(this)">
                <div class="product-info">
                    <p><strong>Chamarra de Cuero</strong></p>
                    <p>Precio: $85.00</p>
                    <p>En existencia: 5</p>
                </div>
            </div>
            <!-- Producto 2 -->
            <div class="product">
                <img src="img/ch2.jpg" alt="Chamarra 2" onclick="openModal(this)">
                <div class="product-info">
                    <p><strong>Chamarra Abrigada</strong></p>
                    <p>Precio: $90.00</p>
                    <p>En existencia: 8</p>
                </div>
            </div>
            <!-- Producto 3 -->
            <div class="product">
                <img src="img/ch3.jpg" alt="Chamarra 3" onclick="openModal(this)">
                <div class="product-info">
                    <p><strong>Chamarra Impermeable</strong></p>
                    <p>Precio: $75.00</p>
                    <p>En existencia: 12</p>
                </div>
            </div>
            <!-- Producto 4 -->
            <div class="product">
                <img src="img/ch4.jpg" alt="Chamarra 4" onclick="openModal(this)">
                <div class="product-info">
                    <p><strong>Chamarra de Invierno</strong></p>
                    <p>Precio: $100.00</p>
                    <p>En existencia: 6</p>
                </div>
            </div>
            <!-- Producto 5 -->
            <div class="product">
                <img src="img/ch5.jpg" alt="Chamarra 5" onclick="openModal(this)">
                <div class="product-info">
                    <p><strong>Chamarra de Lana</strong></p>
                    <p>Precio: $65.00</p>
                    <p>En existencia: 15</p>
                </div>
            </div>
            <!-- Producto 6 -->
            <div class="product">
                <img src="img/ch6.jpg" alt="Chamarra 6" onclick="openModal(this)">
                <div class="product-info">
                    <p><strong>Chamarra Casual</strong></p>
                    <p>Precio: $55.00</p>
                    <p>En existencia: 20</p>
                </div>
            </div>
            <!-- Producto 7 -->
            <div class="product">
                <img src="img/ch7.jpg" alt="Chamarra 7" onclick="openModal(this)">
                <div class="product-info">
                    <p><strong>Chamarra de Invierno con Capucha</strong></p>
                    <p>Precio: $110.00</p>
                    <p>En existencia: 4</p>
                </div>
            </div>
            <!-- Producto 8 -->
            <div class="product">
                <img src="img/ch8.jpg" alt="Chamarra 8" onclick="openModal(this)">
                <div class="product-info">
                    <p><strong>Chamarra Puffer</strong></p>
                    <p>Precio: $95.00</p>
                    <p>En existencia: 10</p>
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
