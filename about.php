<?php
// Acá seteamos la variable title como 'About us' para que, en esta página, se muestre así en el tab (seteado en _header.php).
$title = 'About us';

// y acá requerimos el archivo parcial header.
require('./partials/_header.php');
?>

<div class="container">
    <p><b>Esta simple app fue creada como demostración de los archivos parciales de php, y cómo se pueden utilizar para sacarle más provecho y hacer aplicaciones más limpias y con mejor habilidad de mantenimiento.</b></p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat aspernatur voluptatum, at, odit necessitatibus libero impedit delectus nostrum tempora laborum non ipsam voluptas ea beatae enim optio rem doloremque veritatis.</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat aspernatur voluptatum, at, odit necessitatibus libero impedit delectus nostrum tempora laborum non ipsam voluptas ea beatae enim optio rem doloremque veritatis.</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat aspernatur voluptatum, at, odit necessitatibus libero impedit delectus nostrum tempora laborum non ipsam voluptas ea beatae enim optio rem doloremque veritatis.</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat aspernatur voluptatum, at, odit necessitatibus libero impedit delectus nostrum tempora laborum non ipsam voluptas ea beatae enim optio rem doloremque veritatis.</p>
</div>

<?php
// Llamamos al footer, de la misma manera que llamamos al header más arriba.
require('./partials/_footer.php');