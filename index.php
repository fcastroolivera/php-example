<?php
// Esta variable title la declaramos acá arriba para poder cambiarle el título al tab del navegador, dependiendo de la web. Fijate que la podés encontrar en about.php también.
// En clients.php no está presente para demostrar que podemos dejarlo vacío y que php ponga otro string por defecto (se ve en /partials/_header.php)
// En este caso, y únicamente en index.php, nuestro título será "Inicio".
$title = 'Inicio';

// Acá llamamos al archivo parcial del header, el cual se va a procesar y va a colocarse en esta posición.
require('./partials/_header.php');
?>
<div class="content container">
    <!-- Estructura alternativa para los bloques de control de PHP. Cada uno tiene su propio método alternativo, con su respectivo end. (if, for, foreach, else, while...)
      -->
    <?php for ($i=0; $i < 5; $i++): ?>
        <div class="card">
        <h2>Título del card</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias temporibus eveniet ipsa ipsam repellendus incidunt sint natus minima corrupti totam. Molestiae beatae consequuntur voluptatibus sint temporibus porro placeat, labore vel!</p>
    </div>
    <?php endfor; ?>
</div>
<?php
// Acá hacemos lo mismo que hicimos con el header, pero con el archivo del footer.
require('./partials/_footer.php');