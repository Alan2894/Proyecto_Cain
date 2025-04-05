// Función para agregar productos al carrito
function agregarAlCarrito(id, nombre, precio) {
    let carrito = JSON.parse(localStorage.getItem("carrito")) || [];

    // Verifica si el producto ya está en el carrito
    let productoExistente = carrito.find(producto => producto.id === id);
    
    if (productoExistente) {
        productoExistente.cantidad++; // Incrementa la cantidad
    } else {
        carrito.push({ id, nombre, precio, cantidad: 1 }); // Agrega el producto al carrito
    }

    // Guarda el carrito actualizado en el localStorage
    localStorage.setItem("carrito", JSON.stringify(carrito));

    // Alerta para mostrar que el producto fue agregado
    alert(nombre + " agregado al carrito.");
}

// Función para mostrar el carrito
function mostrarCarrito() {
    let carrito = JSON.parse(localStorage.getItem("carrito")) || [];
    let listaCarrito = document.getElementById("lista-carrito");
    listaCarrito.innerHTML = ""; // Limpiar el contenido actual

    // Añadir cada producto al carrito flotante
    carrito.forEach(producto => {
        let item = document.createElement("li");
        item.textContent = `${producto.nombre} - $${producto.precio} x ${producto.cantidad}`;
        listaCarrito.appendChild(item);
    });

    // Mostrar el carrito flotante
    document.getElementById("carrito-flotante").style.display = "block";
}

// Función para finalizar la compra
function finalizarCompra() {
    let carrito = JSON.parse(localStorage.getItem("carrito")) || [];

    if (carrito.length === 0) {
        alert("Tu carrito está vacío.");
        return;
    }

    // Aquí puedes agregar la lógica para procesar el pago, por ejemplo, redirigiendo a una página de pago
    alert("Compra finalizada. ¡Gracias por tu compra!");

    // Limpiar el carrito después de la compra
    localStorage.removeItem("carrito");

    // Volver a mostrar el carrito vacío
    mostrarCarrito();
}