<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Figuras geométricas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center mb-4">Elige una figura</h2>
    <form action="formulario.php" method="post" class="mx-auto" style="max-width: 400px;">
        <select name="figura" class="form-select mb-3" required>
            <option value="" disabled <?= empty($_SESSION['figura']) ? 'selected' : '' ?>>Selecciona una figura</option>
            <option value="triangulo" <?= ($_SESSION['figura'] ?? '') === 'triangulo' ? 'selected' : '' ?>>Triángulo</option>
            <option value="cuadrado" <?= ($_SESSION['figura'] ?? '') === 'cuadrado' ? 'selected' : '' ?>>Cuadrado</option>
            <option value="circulo" <?= ($_SESSION['figura'] ?? '') === 'circulo' ? 'selected' : '' ?>>Círculo</option>
        </select>
        <button type="submit" class="btn btn-primary w-100">Continuar</button>
    </form>
</div>

</body>
</html>
