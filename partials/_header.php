<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Acá ponemos el título de la página, el cual se lo podemos pasar con la variable $title. -->
    <!-- El título siempre se debe declarar ANTES de poner el require() en una de las páginas. -->
    <title><?= isset($title) ? $title . ' | Facebook' : 'Facebook' ?></title>

    <link rel="stylesheet" href="res/styles.css">
</head>
<body>
<nav>
    <div class="container">
        <h1>Facebook</h1>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="clients.php">Clientes</a></li>
            <li><a href="about.php">Sobre nosotros</a></li>
        </ul>
    </div>
</nav>