
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Helamigos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <h1>Helamigos</h1>

    <img src="img/helao.png" alt="Logo de Helamigos" width="200">

    <h2>¿Quiénes somos?</h2>

    <p>En Helamigos creemos que no hay nada mejor que un buen helado acompañado de la mejor compañía.</p>

    <p>Somos una heladería para amigos y familias, con sabores deliciosos y divertidos.</p>

    <h2>Nuestros sabores</h2>

    <div class="sabores">

        <div class="helado">
            <img src="img/chicle.jpg" alt="Helado de chicle">
            <h3>Chicle</h3>
            <p>Precio: $7000</p>
        </div>

        <div class="helado">
            <img src="img/RON.jpg" alt="Helado de ron con pasas">
            <h3>Ron con pasas</h3>
            <p>Precio: $4000</p>
        </div>

        <div class="helado">
            <img src="img/arandano.jpg" alt="Helado de arándano">
            <h3>Arándano</h3>
            <p>Precio: $10.000</p>
        </div>

        <div class="helado">
            <img src="img/vainilla.jpg" alt="Helado de vainilla">
            <h3>Vainilla</h3>
            <p>Precio: $3.000</p>
        </div>

    </div>

    <h2>Promociones</h2>

    <p>Tenemos promociones especiales para disfrutar nuestros helados.</p>

    <a href="Promociones.html">Ver nuestras promociones</a>

    <hr>
    <section class="seccion" id="infor">
        <article class="infor">
    <h2>Información del negocio</h2>

    <?php
    $nombre = "Helamigos";
    $administrador = "Ruben Gomez";
    $ciudad = "Pasto, Nariño";

    echo "Nombre: " . $nombre . "<br>";
    echo "Administrador: " . $administrador . "<br>";
    echo "Ciudad: " . $ciudad;
    ?>
    </article>
    </section>
    <hr>
    <section class="seccion" id="men">
        <article class="men">
    <h2>Mensaje de bienvenida</h2>

    <?php
    $edad = 20;

    if ($edad >= 18) {
        echo "¡Bienvenido! Conoce nuestras promociones especiales";
    } else {
        echo "¡Bienvenido! Descubre nuestros deliciosos sabores";
    }
    ?>
    </article>
    </section>
    <hr>
    <section class="seccion" id="prom">
        <article class="prom">
    <h2>Promoción según el día</h2>

    <?php
    $dia = "martes";

    if ($dia == "martes") {
        echo "¡Hoy tenemos 2x1 en conos!";
    } else {
        echo "Hoy puedes disfrutar de nuestros sabores habituales";
    }
    ?>
    </article>
    </section>
    <hr>
    <section class="" id="dispo">
    <article class="dispo">
    <h2>Disponibilidad de un sabor</h2>

    <?php
    $disponible = true;

    if ($disponible == true) {
        echo "¡Este sabor está disponible!";
    } else {
        echo "Lo sentimos, este sabor está agotado";
    }
    ?>
    </article>
    </section>
    <hr>

    <h2>Contacto</h2>

    <p>Helamigos - Pasto, Nariño</p>
    <p>Teléfono: 316 715 0147</p>
    <p>Correo: contacto@helamigos.com</p>

</body>
</html>
