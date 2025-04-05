@extends('layouts.app')
@section('title','blusas')
@section('content')
<body>

    <!-- Contenido principal -->
    <div class="content">
        <h1>Categoría Blusas</h1>
        <div class="product-container">
            
            <!-- Producto 2 -->
            <div class="product" data-id="2" data-nombre="Blusa Azul" data-precio="20.00">
                <img src="img/blusa2.jpg" alt="Blusa 2" onclick="openModal(this)">
                <div class="product-info">
                    <p><strong>Blusa Azul</strong></p>
                    <p>Precio: $20.00</p>
                    <p>En existencia: 8</p>
                    <button onclick="agregarAlCarrito(2, 'Blusa Azul', 20.00)">Agregar al carrito</button>
                </div>
            </div>
            <!-- Producto 3 -->
            <div class="product" data-id="3" data-nombre="Blusa Blanca" data-precio="30.00">
                <img src="img/blusa3.jpg" alt="Blusa 3" onclick="openModal(this)">
                <div class="product-info">
                    <p><strong>Blusa Blanca</strong></p>
                    <p>Precio: $30.00</p>
                    <p>En existencia: 12</p>
                    <button onclick="agregarAlCarrito(3, 'Blusa Blanca', 30.00)">Agregar al carrito</button>
                </div>
            </div>
            <!-- Producto 4 -->
            <div class="product" data-id="4" data-nombre="Blusa Negra" data-precio="28.00">
                <img src="img/blusa4.jpg" alt="Blusa 4" onclick="openModal(this)">
                <div class="product-info">
                    <p><strong>Blusa Negra</strong></p>
                    <p>Precio: $28.00</p>
                    <p>En existencia: 10</p>
                    <button onclick="agregarAlCarrito(4, 'Blusa Negra', 28.00)">Agregar al carrito</button>
                </div>
            </div>
            <!-- Producto 5 -->
            <div class="product" data-id="5" data-nombre="Blusa Rosa" data-precio="22.00">
                <img src="img/ropa15.jpg" alt="Blusa 5" onclick="openModal(this)">
                <div class="product-info">
                    <p><strong>Blusa Rosa</strong></p>
                    <p>Precio: $22.00</p>
                    <p>En existencia: 20</p>
                    <button onclick="agregarAlCarrito(5, 'Blusa Rosa', 22.00)">Agregar al carrito</button>
                </div>
            </div>
            <!-- Producto 6 -->
            <div class="product" data-id="6" data-nombre="Blusa Verde" data-precio="24.00">
                <img src="img/blusa6.jpg" alt="Blusa 6" onclick="openModal(this)">
                <div class="product-info">
                    <p><strong>Blusa Verde</strong></p>
                    <p>Precio: $24.00</p>
                    <p>En existencia: 18</p>
                    <button onclick="agregarAlCarrito(6, 'Blusa Verde', 24.00)">Agregar al carrito</button>
                </div>
            </div>
            <!-- Producto 7 -->
            <div class="product" data-id="7" data-nombre="Blusa Beige" data-precio="26.00">
                <img src="img/blusa5.jpg" alt="Blusa 7" onclick="openModal(this)">
                <div class="product-info">
                    <p><strong>Blusa Beige</strong></p>
                    <p>Precio: $26.00</p>
                    <p>En existencia: 9</p>
                    <button onclick="agregarAlCarrito(7, 'Blusa Beige', 26.00)">Agregar al carrito</button>
                </div>
            </div>
            <!-- Producto 8 -->
            <div class="product" data-id="8" data-nombre="Blusa Roja" data-precio="27.00">
                <img src="img/blusa7.jpg" alt="Blusa 8" onclick="openModal(this)">
                <div class="product-info">
                    <p><strong>Blusa Roja</strong></p>
                    <p>Precio: $27.00</p>
                    <p>En existencia: 5</p>
                    <button onclick="agregarAlCarrito(8, 'Blusa Roja', 27.00)">Agregar al carrito</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Ventana Modal para la imagen ampliada -->
    <div class="modal" id="modal" onclick="closeModal()">
        <span class="modal-close" onclick="closeModal()">X</span>
        <img id="modal-img" src="" alt="Imagen ampliada">
    </div>

    <!-- Carrito flotante -->
    <div id="carrito-flotante">
        <h3>Carrito de Compras</h3>
        <ul id="lista-carrito"></ul>
        <button onclick="finalizarCompra()">Finalizar Compra</button>
    </div>

    <!-- Botón para abrir el carrito -->
    <button id="btn-carrito" onclick="mostrarCarrito()">🛒</button>

@endsection
