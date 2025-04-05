@extends('layouts.app')
@section('title','pantalones')
@section('content')
<body>

    <!-- Contenido principal -->
    <div class="content">
        <h1>Categoría Pantalones</h1>
        <div class="product-container">
            <!-- Producto 1 -->
            <div class="product">
                <img src="img/pantalon1.jpg" alt="Pantalón 1" onclick="openModal(this)">
                <div class="product-info">
                    <p><strong>Pantalón Casual</strong></p>
                    <p>Precio: $35.00</p>
                    <p>En existencia: 10</p>
                </div>
            </div>
            <!-- Producto 2 -->
            <div class="product">
                <img src="img/pantalon2.jpg" alt="Pantalón 2" onclick="openModal(this)">
                <div class="product-info">
                    <p><strong>Pantalón Skinny</strong></p>
                    <p>Precio: $40.00</p>
                    <p>En existencia: 8</p>
                </div>
            </div>
            <!-- Producto 3 -->
            <div class="product">
                <img src="img/pantalon3.jpg" alt="Pantalón 3" onclick="openModal(this)">
                <div class="product-info">
                    <p><strong>Pantalón Formal</strong></p>
                    <p>Precio: $50.00</p>
                    <p>En existencia: 15</p>
                </div>
            </div>
            <!-- Producto 4 -->
            <div class="product">
                <img src="img/pantalon4.jpg" alt="Pantalón 4" onclick="openModal(this)">
                <div class="product-info">
                    <p><strong>Pantalón de Jeans</strong></p>
                    <p>Precio: $45.00</p>
                    <p>En existencia: 12</p>
                </div>
            </div>
            <!-- Producto 5 -->
            <div class="product">
                <img src="img/pantalon5.jpg" alt="Pantalón 5" onclick="openModal(this)">
                <div class="product-info">
                    <p><strong>Pantalón Deportivo</strong></p>
                    <p>Precio: $30.00</p>
                    <p>En existencia: 18</p>
                </div>
            </div>
            <!-- Producto 6 -->
            <div class="product">
                <img src="img/pantalon6.jpg" alt="Pantalón 6" onclick="openModal(this)">
                <div class="product-info">
                    <p><strong>Pantalón Cargo</strong></p>
                    <p>Precio: $38.00</p>
                    <p>En existencia: 14</p>
                </div>
            </div>
            <!-- Producto 7 -->
            <div class="product">
                <img src="img/pantalon7.jpg" alt="Pantalón 7" onclick="openModal(this)">
                <div class="product-info">
                    <p><strong>Pantalón de Lino</strong></p>
                    <p>Precio: $42.00</p>
                    <p>En existencia: 9</p>
                </div>
            </div>
            <!-- Producto 8 -->
            <div class="product">
                <img src="img/pantalon8.jpg" alt="Pantalón 8" onclick="openModal(this)">
                <div class="product-info">
                    <p><strong>Pantalón Estilo Jogger</strong></p>
                    <p>Precio: $28.00</p>
                    <p>En existencia: 7</p>
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
