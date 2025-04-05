<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/sesion.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blusas.css') }}">
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
    <link rel="stylesheet" href="{{ asset('css/chamarras.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pantalones.css') }}">
    <link rel="stylesheet" href="{{ asset('css/registro.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sudaderas.css') }}">
    <link rel="stylesheet" href="{{ asset('css/perfil.css') }}">

    <title>@yield('title')</title>
</head>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Forzar limpieza del modal y backdrop si quedó abierto
        document.querySelectorAll('.modal-backdrop').forEach(el => el.remove());
        document.body.classList.remove('modal-open');
        document.body.style = '';
    });

    // También por si regresa a esta página desde el historial
    window.addEventListener('pageshow', function() {
        document.querySelectorAll('.modal-backdrop').forEach(el => el.remove());
        document.body.classList.remove('modal-open');
        document.body.style = '';
    });
</script>


<body>
  <!-- incluir header -->
   @include('partials.header')  

</body>

    <main class="pb-6">
    @yield('content')
    </main>

    <!-- incluir pie de pagina -->
    @include('partials.footer') 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="{{asset('js/carrito.js')}}"></script>
    <script src="{{asset('js/login.js')}}"></script>
    <script src="{{asset('js/logout.js')}}"></script>
    <script src="{{asset('js/validar.js')}}"></script>
    <script src="{{asset('js/verificarsesion.js')}}"></script>


    
<!-- Script para asegurarnos de que el dropdown de "Bienvenido" funcione correctamente -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const usuarioBtn = document.getElementById('usuarioBtn');
    const dropdownMenu = document.getElementById('usuarioList');
    
    usuarioBtn.addEventListener('click', function(event) {
      event.preventDefault();
      
      // Toggle the dropdown manually
      const isExpanded = usuarioBtn.getAttribute('aria-expanded') === 'true';
      
      // Toggle the 'aria-expanded' attribute
      usuarioBtn.setAttribute('aria-expanded', !isExpanded);
      
      // Show or hide the dropdown
      if (isExpanded) {
        dropdownMenu.classList.remove('show');
      } else {
        dropdownMenu.classList.add('show');
      }
    });
  });
</script>
    <script>
        function openModal(imgElement) {
            // Mostrar la ventana modal
            var modal = document.getElementById('modal');
            var modalImg = document.getElementById('modal-img');
            modal.style.display = 'flex';
            modalImg.src = imgElement.src;
        }

        function closeModal() {
            // Cerrar la ventana modal
            var modal = document.getElementById('modal');
            modal.style.display = 'none';
        }
    </script>

    <script>
        function openModal(imgElement) {
            // Mostrar la ventana modal
            var modal = document.getElementById('modal');
            var modalImg = document.getElementById('modal-img');
            modal.style.display = 'flex';
            modalImg.src = imgElement.src;
        }

        function closeModal() {
            // Cerrar la ventana modal
            var modal = document.getElementById('modal');
            modal.style.display = 'none';
        }
    </script>

    <script>
        let currentIndex = 0;

        function moveCarousel(direction) {
            const images = document.getElementById('carousel-images');
            const totalImages = images.children.length;

            currentIndex += direction;
            if (currentIndex < 0) {
                currentIndex = totalImages - 1;
            } else if (currentIndex >= totalImages) {
                currentIndex = 0;
            }

            const offset = -currentIndex * 320; // 320px es el ancho de las imágenes (ajustar según tamaño de las imágenes)
            images.style.transform = `translateX(${offset}px)`;
        }

        // Mostrar/Ocultar el menú desplegable
        document.getElementById("categoriasBtn").addEventListener("click", function(event) {
            event.preventDefault(); // Evitar recargar la página
            const categoriasList = document.getElementById("categoriasList");
            if (categoriasList.style.display === "block") {
                categoriasList.style.display = "none";
            } else {
                categoriasList.style.display = "block";
            }
        });
    </script>

    <script>
        function openModal(imgElement) {
            // Mostrar la ventana modal
            var modal = document.getElementById('modal');
            var modalImg = document.getElementById('modal-img');
            modal.style.display = 'flex';
            modalImg.src = imgElement.src;
        }

        function closeModal() {
            // Cerrar la ventana modal
            var modal = document.getElementById('modal');
            modal.style.display = 'none';
        }
    </script>

    <script>
        function openModal(imgElement) {
            // Mostrar la ventana modal
            var modal = document.getElementById('modal');
            var modalImg = document.getElementById('modal-img');
            modal.style.display = 'flex';
            modalImg.src = imgElement.src;
        }

        function closeModal() {
            // Cerrar la ventana modal
            var modal = document.getElementById('modal');
            modal.style.display = 'none';
        }
    </script>    

    @yield('scripts')
</body>
</html>
