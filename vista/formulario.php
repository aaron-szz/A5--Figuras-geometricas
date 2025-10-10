<?php
session_start();

// Guardar figura en sesión
if (isset($_POST['figura'])) {
    $_SESSION['figura'] = $_POST['figura'];
}
$figura = $_SESSION['figura'] ?? '';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos de la figura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
         header {
            background-color: #0d6efd;
            color: white;
            padding: 20px 0;
            text-align: center;
            font-size: 2.2rem;
            font-weight: bold;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .btn.btn-success.w-100 {
            background-color: #0d6efd;
            border: none;
            padding: 10px;
            font-size: 1.2rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

    </style>
</head>
<body class="bg-light">

 <header class="bg-primary text-white text-center py-3 mb-4 shadow">
    <h1 class="mb-0">Figura seleccionada: <?= ucfirst($figura) ?></h1>
    </header>
<div class="container mt-5">
    <h2 class="text-center mb-4">Introduce los datos de <?= ucfirst($figura) ?></h2>

¡

   



    <form action="resultado.php" method="post" class="mx-auto" style="max-width: 400px;">
        <input type="hidden" name="figura" value="<?= $figura ?>">

        <?php if ($figura === "triangulo"): ?>
            <input type="number" name="base" class="form-control mb-3" placeholder="Base" required
                   value="<?= $_SESSION['base'] ?? '' ?>">
            <input type="number" name="altura" class="form-control mb-3" placeholder="Altura" required
                   value="<?= $_SESSION['altura'] ?? '' ?>">
        <?php elseif ($figura === "cuadrado"): ?>
            <input type="number" name="lado" class="form-control mb-3" placeholder="Lado" required
                   value="<?= $_SESSION['lado'] ?? '' ?>">
        <?php elseif ($figura === "circulo"): ?>
            <input type="number" name="radio" class="form-control mb-3" placeholder="Radio" required
                   value="<?= $_SESSION['radio'] ?? '' ?>">
        <?php endif; ?>

        <button type="submit" class="btn btn-success w-100">Calcular</button>
    </form>
</div>

</body>
</html>
