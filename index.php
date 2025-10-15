<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Figuras geométricas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to right, #ffffffff, #000000ff);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Segoe UI', sans-serif;
    }

    .card {
      background-color: white;
      border-radius: 20px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
      padding: 30px;
      width: 100%;
      max-width: 500px;
      text-align: center;
    }

    .card h2 {
      margin-bottom: 30px;
      color: #333;
      font-weight: bold;
    }

    .grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
    }

    .figura-btn {
      background-color: transparent;
      border: none;
      border-radius: 15px;
      cursor: pointer;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
      padding: 0;
      height: 120px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .figura-btn:hover {
      transform: scale(1.05);
      box-shadow: 0 0 10px rgba(0,0,0,0.3);
    }

    .figura-btn img {
      width: 100px;
      height: 100px;
      object-fit: contain;
      border-radius: 15px;
    }
  </style>
</head>
<body>

  <div class="card">
    <h2>Elige una figura</h2>
    <form action="./vista/formulario.php" method="post">
      <input type="hidden" name="figura" id="figuraSeleccionada">
      <div class="grid">
        <button type="submit" class="figura-btn" onclick="seleccionar('triangulo')">
          <img src="./img/triangulo.webp" alt="Triángulo">
        </button>
        <button type="submit" class="figura-btn" onclick="seleccionar('cuadrado')">
          <img src="./img/cuadrado.png" alt="Cuadrado">
        </button>
        <button type="submit" class="figura-btn" onclick="seleccionar('circulo')">
          <img src="./img/circulo.png" alt="Círculo">
        </button>
        <button type="submit" class="figura-btn" onclick="seleccionar('rectangulo')">
          <img src="./img/rectangulo.svg" alt="Rectángulo">
        </button>
      </div>
    </form>
  </div>

  <script>
    function seleccionar(figura) {
      document.getElementById('figuraSeleccionada').value = figura;
    }
  </script>

</body>
</html>
