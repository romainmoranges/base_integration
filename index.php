<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document de base</title>
</head>

<body>
    <div class='svgsprite'>
        <?php include './img/sprite_symbol_pictos.svg' ?>
    </div>


    <h3>Exemple utilisation de svg</h3>
        <svg class='svgicon'>
        <use xlink:href="#greeting"></use>
    </svg> 

<br>
<button id='menu'>Clique sur moi :)</button>

<nav class='main-nav'>
    <ul>
        <li><a href="#">Je suis un item</a></li>
        <li><a href="#">Je suis un item</a></li>
        <li><a href="#">Je suis un item</a></li>
    </ul>
</nav>

<script src="./js/script.js"></script>

</body>

</html>