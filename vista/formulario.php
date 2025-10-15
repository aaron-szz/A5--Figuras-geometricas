<?php

session_start();
$figura = $_POST['figura'] ?? $_SESSION['figura'] ?? '';
$_SESSION['figura'] = $figura;
$datos = $_SESSION['datos'] ?? [];

// Ruta de imagen según figura
$rutaImagen = '';
switch ($figura) {
    case 'triangulo':
        $rutaImagen = '../img/triangulo.webp';
        break;
    case 'cuadrado':
        $rutaImagen = '../img/cuadrado.png';
        break;
    case 'circulo':
        $rutaImagen = '../img/circulo.png';
        break;
    case 'rectangulo':
        $rutaImagen = '../img/rectangulo.svg';
        break;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos de la figura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #ffffffff, #000000ff);
            font-family: 'Segoe UI', sans-serif;
        }

        header {
             background: linear-gradient(to right, #ffffffff, #000000ff);
            color: white;
            padding: 20px 0;
            text-align: center;
            font-size: 2rem;
            font-weight: bold;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        header img {
            width: 80px;
            height: 80px;
            object-fit: contain;
        }

        .card {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            padding: 30px;
            max-width: 400px;
            margin: auto;
            margin-top: 40px;
        }

        .card h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .btn.btn-success.w-100 {
            background-color: #000000ff;
            border: none;
            padding: 10px;
            font-size: 1.2rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn.btn-success.w-100:hover {
            background-color: #000000ff;
        }
    </style>
</head>
<body>
<header class="bg-white text-dark py-3 mb-4 shadow d-flex align-items-center justify-content-center gap-3 border-bottom">
    <?php if ($rutaImagen): ?>
        <img src="<?= $rutaImagen ?>" alt="<?= $figura ?>" style="width: 60px; height: 60px; object-fit: contain;">
    <?php endif; ?>
    <h1 class="mb-0" style="font-size: 2rem;">Figura seleccionada: <?= ucfirst($figura) ?></h1>
</header>



<div class="card">
    <h2>Introduce los datos de <?= ucfirst($figura) ?></h2>

    <form action="resultado.php" method="post">
        <input type="hidden" name="figura" value="<?= $figura ?>">

        <?php if ($figura === "triangulo"): ?>
            <input type="number" name="base" class="form-control mb-3" placeholder="Base"  onblur="validar(this)" required
                   value="<?= $datos['base'] ?? '' ?>">
                   <small id="error-base" class="text-danger mb-3 d-block"></small>
            <input type="number" name="altura" class="form-control mb-3" placeholder="Altura" onblur="validar(this)" required
                   value="<?= $datos['altura'] ?? '' ?>">
                   <small id="error-altura" class="text-danger mb-3 d-block"></small>
        <?php elseif ($figura === "cuadrado"): ?>
            <input type="number" name="lado" class="form-control mb-3" placeholder="Lado" onblur="validar(this)" required
                   value="<?= $datos['lado'] ?? '' ?>">
                   <small id="error-lado" class="text-danger mb-3 d-block"></small>
        <?php elseif ($figura === "circulo"): ?>
            <input type="number" name="radio" class="form-control mb-3" placeholder="Radio" onblur="validar(this)" required
                   value="<?= $datos['radio'] ?? '' ?>">
                   <small id="error-radio" class="text-danger mb-3 d-block"></small>
        <?php elseif ($figura === "rectangulo"): ?>
            <input type="number" name="base" class="form-control mb-3" placeholder="Base" onblur="validar(this)" required
                   value="<?= $datos['base'] ?? '' ?>">
                   <small id="error-base" class="text-danger mb-3 d-block"></small>
            <input type="number" name="altura" class="form-control mb-3" placeholder="Altura" onblur="validar(this)" required
                   value="<?= $datos['altura'] ?? '' ?>">
                   <small id="error-altura" class="text-danger mb-3 d-block"></small>
        <?php endif; ?>

        <button type="submit" class="btn btn-success w-100">Calcular</button>
    </form>
</div>

<script src="../validaciones/validacion.js"></script>


</body>
</html>
