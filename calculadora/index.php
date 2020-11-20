<?php
session_start();
if (!isset($_SESSION['pantalla'])) {
    $_SESSION['pantalla'] = 0;
    $_SESSION['resultado'] = 0;
    $_SESSION['mostrar'] = 1;
    $_SESSION['opera'] = 0;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Calculadora</title>
</head>

<body>
    <div class="container">
        <div class="f1">
            <?php
            if (isset($_SESSION['mostrar']) && $_SESSION['mostrar'] == 0) {
                echo $_SESSION['resultado'];
            } else {
                echo $_SESSION['pantalla'];
            }
            ?>

        </div>
        <a class="f2 col1" href="codigo/principal.php?7">
            <div class="f2 col1">7</div>
        </a>
        <a class="f2 col2" href="codigo/principal.php?8">
            <div class="f2 col2">8</div>
        </a>
        <a class="f2 col3" href="codigo/principal.php?9">
            <div class="f2 col3">9</div>
        </a>
        <a class="f2 col4" href="codigo/principal.php?DEL">
            <div class="f2 col4">DEL</div>
        </a>
        <a class="f2 col5" href="codigo/principal.php?igual">
            <div class="f2 col5">=</div>
        </a>

        <a class="f3 col1" href="codigo/principal.php?4">
            <div class="f3 col1">4</div>
        </a>
        <a class="f3 col2" href="codigo/principal.php?5">
            <div class="f3 col2">5</div>
        </a>
        <a class="f3 col3" href="codigo/principal.php?6">
            <div class="f3 col3">6</div>
        </a>
        <a class="f3 col4" href="codigo/principal.php?multi">
            <div class="f3 col4">X</div>
        </a>
        <a class="f3 col5" href="codigo/principal.php?ac">
            <div class="f3 col5">AC</div>
        </a>

        <a class="f4 col1" href="codigo/principal.php?1">
            <div class="f4 col1">1</div>
        </a>
        <a class="f4 col2" href="codigo/principal.php?2">
            <div class="f4 col2">2</div>
        </a>
        <a class="f4 col3" href="codigo/principal.php?3">
            <div class="f4 col3">3</div>
        </a>
        <a class="f4 col4" href="codigo/principal.php?suma">
            <div class="f4 col4">+</div>
        </a>
        <a class="f4 col5" href="codigo/principal.php?rest">
            <div class="f4 col5">-</div>
        </a>

    </div>
</body>

</html>

<?php
/*
echo "Pantalla " . $_SESSION['pantalla'];
echo "Resultado " . $_SESSION['resultado'];
echo "Mostrar " . $_SESSION['mostrar'];
echo "oper" . $_SESSION['opera'];
*/

