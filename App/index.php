<?php 
header('Content-Type: text/html; charset=utf-8');

include './templates/header.php';
?>

<div class="container">
    <div class="row">
        <div class="col text-center">
            <h1>Bienvenido a Draft App</h1>
        </div>
    </div>
</div>

<div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">Descripción de Secciones</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="feature col">
            <h3 class="fs-2">Autorización</h3>
            <p>
                Ve a <strong>Autorización</strong> para obtener las credenciales del correo de gmail
                sobre el que se harán las operaciones
            </p>
            <a href="auth.php" class="icon-link">
                Ir a Autorización
                <svg class="bi">
                    <use xlink:href="#chevron-right"></use>
                </svg>
            </a>
        </div>
        <div class="feature col">
            <h3 class="fs-2">Draft App</h3>
            <p>
                Ve a <strong>Draft App</strong> para correr el script generador de borradores.
                Descargará los correos de la cuenta autorizada y creará borradores usando chatgpt
            </p>
            <a href="draftapp.php" class="icon-link">
                Draft App
                <svg class="bi">
                    <use xlink:href="#chevron-right"></use>
                </svg>
            </a>
        </div>
        <div class="feature col">

            <h3 class="fs-2">Ajustes</h3>
            <p>
                En <strong>Ajustes </strong> tendrás las opciones disponibles para personalizar la ejecución del script.
            </p>
            <a href="setup.php" class="icon-link">
                Ajustes
                <svg class="bi">
                    <use xlink:href="#chevron-right"></use>
                </svg>
            </a>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
</script>
</body>

</html>