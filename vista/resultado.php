<?php
session_start();
$figura = $_SESSION['figura'] ?? '';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de <?= ucfirst($figura) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            background-color: #0d6efd;
            color: white;
            padding: 20px 0;
            text-align: center;
            font-size: 2.2rem;
            font-weight: bold;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .resultado-container {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
        }

        .resultado-box {
            background-color: white;
            border-radius: 12px;
            padding: 40px;
            max-width: 700px;
            width: 100%;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            text-align: center;
            font-size: 1.4rem;
        }

        .btn-volver {
            margin-top: 30px;
            font-size: 1.2rem;
        }

        .btn-volver a {
            text-decoration: none;
            color: white;
        }

        .btn-volver a:hover {
            color: #e2e2e2;
        }
    </style>
</head>
<body>

<header>
    Figura seleccionada: <?= ucfirst($figura) ?>
</header>

<div class="resultado-container">
    <div class="resultado-box">
        <?php
        require_once 'FiguraGeometrica.php';
        require_once 'Triangulo.php';
        require_once 'Cuadrado.php';
        require_once 'Circulo.php';

        switch ($figura) {
            case "triangulo":
                $base = $_POST['base'];
                $altura = $_POST['altura'];
                $triangulo = new Triangulo("Triángulo", $base, $altura);
                echo $triangulo;
                break;

            case "cuadrado":
                $lado = $_POST['lado'];
                $cuadrado = new Cuadrado("Cuadrado", $lado);
                echo $cuadrado;
                break;

            case "circulo":
                $radio = $_POST['radio'];
                $circulo = new Circulo("Círculo", $radio);
                echo $circulo;
                break;
        }
        ?>
        <div class="btn-volver">
            <a href="index.html" class="btn btn-primary">Volver</a>
        </div>
    </div>
</div>

</body>
</html>
