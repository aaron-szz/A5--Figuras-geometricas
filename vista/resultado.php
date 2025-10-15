<?php
session_start();
require_once 'Triangulo.php';
require_once 'Cuadrado.php';
require_once 'Circulo.php';
require_once 'Rectangulo.php';

// Si vienen datos por POST, guárdalos en sesión
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['figura'] = $_POST['figura'] ?? '';
    $_SESSION['datos'] = $_POST;
}



$rutaImagen = '';
switch ($_SESSION['figura'] ?? '') {
    case 'triangulo':
        $rutaImagen = 'img/triangulo.webp';
        break;
    case 'cuadrado':
        $rutaImagen = 'img/cuadrado.png';
        break;
    case 'circulo':
        $rutaImagen = 'img/circulo.png';
        break;
    case 'rectangulo':
        $rutaImagen = 'img/rectangulo.svg';
        break;
}
// Crear objeto según figura
switch ($_SESSION['figura'] ?? '') {
    case "triangulo":
        $base = $_SESSION['datos']['base'] ?? 0;
        $altura = $_SESSION['datos']['altura'] ?? 0;
        $obj = new Triangulo("Triangulo", $base, $altura);
        break;
    case "cuadrado":
        $lado = $_SESSION['datos']['lado'] ?? 0;
        $obj = new Cuadrado("Cuadrado", $lado);
        break;
    case "circulo":
        $radio = $_SESSION['datos']['radio'] ?? 0;
        $obj = new Circulo("Circulo", $radio);
        break;
    case "rectangulo":
        $base = $_SESSION['datos']['base'] ?? 0;
        $altura = $_SESSION['datos']['altura'] ?? 0;
        $obj = new Rectangulo("Rectangulo", $base, $altura);
        break;
    default:
        $obj = null;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-rojo { background-color: #fff8f8ff; color: black; border: none; }
        .btn-rojo:hover { background-color: #615f5fff; }
        .bg-rojo { background-color: #f8f4f4ff; color: black; }
    </style>
</head>
<body class="bg-light">
    
<header class="bg-white text-dark py-3 mb-4 shadow d-flex align-items-center justify-content-center gap-3 border-bottom">
    <?php if ($rutaImagen): ?>
        <img src="<?= $rutaImagen ?>" alt="<?= $_SESSION['figura'] ?? '' ?>" style="width: 60px; height: 60px; object-fit: contain;">
    <?php endif; ?>
    <h1 class="mb-0" style="font-size: 2rem;">Figura seleccionada: <?= ucfirst($_SESSION['figura'] ?? '') ?></h1>
</header>
 
<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-rojo text-center">
            <h3>Resultado</h3>
        </div>
        <div class="card-body">
            <?php if ($obj): ?>
                <?= $obj ?>
            <?php else: ?>
                <p class="text-danger">No se pudo calcular la figura.</p>
            <?php endif; ?>

            <form action="formulario.php" method="post">
                <button type="submit" class="btn btn-dark mt-3 w-100">Modificar datos</button>
            </form>

            <form action="cerrar.php" method="post">
                <button type="submit" class="btn btn-dark mt-3 w-100">Volver al inicio</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
