<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>URBANTHREADS</title>
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Montserrat&family=Oswald&display=swap" rel="stylesheet" />

  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    html, body {
      width: 100%;
      height: 100%;
      font-family: 'Montserrat', sans-serif;
      background: #636363 url('img/fondo.png') center/cover no-repeat fixed;
      overflow-x: hidden;
      color: #eee;
    }

    .menu {
      background-color: #333;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: fixed;
      width: 100%;
      top: 0;
      z-index: 2;
      padding: 0 20px;
      font-family: 'Oswald', sans-serif;
      height: 50px;
    }

    .menu-logo img { height: 35px; cursor: pointer; }
    .menu-links a {
      color: white;
      padding: 14px 20px;
      text-decoration: none;
      animation: float 3s ease-in-out infinite;
      transition: color 0.3s, text-shadow 0.3s;
    }

    .menu-links a:hover {
      color: #ffd700;
      text-shadow: 0 0 8px #ffd700;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-6px); }
    }

    header {
      height: 220px;
      position: relative;
      margin-top: 50px;
      overflow: hidden;
      width: 100%;
    }

    .carousel-wrapper {
      position: absolute;
      top: 0; left: 0;
      width: 200%;
      height: 100%;
      display: flex;
      animation: scroll 20s linear infinite;
    }

    .carousel-wrapper img {
      width: 100vw;
      height: 100%;
      object-fit: cover;
    }

    @keyframes scroll {
      0% { transform: translateX(0); }
      100% { transform: translateX(-100vw); }
    }

    .title-container {
      position: absolute;
      top: 40%;
      left: 50%;
      transform: translate(-50%, -50%);
      display: flex;
      align-items: center;
      z-index: 3;
    }

    .title-container img { height: 75px; margin-right: 12px; }

    header h1 {
      color: black;
      font-size: 2.8em;
      font-family: 'Oswald', sans-serif;
      text-shadow: 2px 2px 4px rgba(255,255,255,0.6);
    }

    header h2 {
      position: absolute;
      top: 65%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: black;
      font-size: 1.3em;
      font-family: 'Montserrat', sans-serif;
      text-shadow: 1px 1px 3px rgba(255,255,255,0.6);
      z-index: 3;
      animation: float 4s ease-in-out infinite;
    }

    .bottom-container {
      margin: 40px auto;
      max-width: 900px;
      background-color: rgba(255, 255, 255, 0.15);
      padding: 20px 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.3);
      backdrop-filter: blur(4px);
    }

    .card {
      display: flex;
      margin-bottom: 20px;
      background-color: rgba(0,0,0,0.25);
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 2px 8px rgba(0,0,0,0.3);
      align-items: stretch;
      max-width: 700px;
      margin-left: auto;
      margin-right: auto;
    }

    .carousel-card-img {
      flex-shrink: 0;
      background: #222;
      width: 33.33%;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 10px 0;
    }

    .carousel-inner {
      position: relative;
      max-width: 100%;
      height: 300px;
    }

    .carousel-inner img {
      max-width: 100%;
      height: auto;
      max-height: 300px;
      object-fit: contain;
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      margin: auto;
      opacity: 0;
      transition: opacity 1s ease-in-out;
    }

    .carousel-inner img.active {
      opacity: 1;
      position: relative;
    }

    .card-content {
      flex: 1;
      padding: 20px 25px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      color: #eee;
    }

    .card-content h3 {
      font-size: 1.4em;
      color: #ffd700;
      margin-bottom: 10px;
      font-weight: 700;
      text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.4);
    }

    .btn-link {
      align-self: flex-start;
      padding: 8px 18px;
      border: 2px solid #ffd700;
      background: transparent;
      color: #ffd700;
      font-weight: 600;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s, color 0.3s;
      cursor: pointer;
      font-size: 1.1em;
    }

    .btn-link:hover {
      background-color: #ffd700;
      color: #333;
    }

    form label {
      display: block;
      margin-top: 10px;
      margin-bottom: 5px;
      font-weight: 600;
      color: #ffd700;
    }

    form input[type="text"],
    form input[type="file"],
    form textarea {
      width: 100%;
      padding: 8px;
      border-radius: 4px;
      border: none;
      font-size: 1em;
      font-family: 'Montserrat', sans-serif;
      margin-bottom: 10px;
    }

    form textarea {
      resize: vertical;
      min-height: 80px;
    }

    footer {
      text-align: center;
      padding: 20px;
      margin-top: 50px;
      color: #ddd;
      font-size: 0.95em;
    }

    footer p {
      display: inline-block;
      border-bottom: 1px solid #ffd700;
      padding-bottom: 4px;
    }

    @media (max-width: 600px) {
      .card { flex-direction: column; }
      .carousel-card-img { width: 100%; }
      .carousel-inner img {
        max-height: none;
        opacity: 1 !important;
        position: relative;
      }
    }
  </style>
</head>
<body>

  <div class="menu">
    <a href="index.php" class="menu-logo">
      <img src="img/back.png" alt="Logo UrbanThreads" />
    </a>
    <div class="menu-links">
      <a href="index.php">Inicio</a>
      <a href="nosotros.php">Nosotros</a>
      <a href="contacto.php">Contacto</a>
    </div>
  </div>

  <header>
    <div class="carousel-wrapper">
      <img src="img/encabezadocostal.png" alt="Imagen 1" />
      <img src="img/encabezadocostal.png" alt="Imagen 2" />
    </div>

    <div class="title-container">
      <img src="img/logo.png" alt="Logo UrbanThreads" />
      <h1>URBANTHREADS</h1>
    </div>
    <h2>Reinventa. Reúsa. Resalta!</h2>
  </header>

  <section class="bottom-container">
    <!-- Remaster Extremo con formulario -->
    <div class="card">
      <div class="carousel-card-img">
        <div class="carousel-inner">
          <img src="img/gabardinavieja.png" class="active" alt="Remaster Extremo 1">
          <img src="img/gabardinanew.png" alt="Remaster Extremo 2">
        </div>
      </div>
      <div class="card-content">
        <h3>Remaster Extremo</h3>

        <form id="pedidoForm" action="pedido3.php" method="post" enctype="multipart/form-data">
          <label for="nombre">Nombre:</label>
          <input type="text" id="nombre" name="nombre" required>

          <label for="apellido">Apellido:</label>
          <input type="text" id="apellido" name="apellido" required>

          <label for="direccion">Dirección:</label>
          <input type="text" id="direccion" name="direccion" required>

          <label for="ciudad">Ciudad:</label>
          <input type="text" id="ciudad" name="ciudad" required>

          <label for="codigo_postal">Código Postal:</label>
          <input type="text" id="codigo_postal" name="codigo_postal" required>

          <label for="imagen">Foto de la prenda:</label>
          <input type="file" id="imagen" name="imagen" accept="image/*" required>

          <label for="especificaciones">Especificaciones del diseño:</label>
          <textarea id="especificaciones" name="especificaciones" placeholder="Describe aquí los detalles de la transformación..." required></textarea>

          <button type="submit" class="btn-link">REALIZAR PEDIDO</button>
        </form>
      </div>
    </div>
  </section>

  <footer>
    <p>URBAN THREADS S.A. MEXICO ©</p>
  </footer>

  <script>
    // Carrusel
    document.querySelectorAll('.carousel-inner').forEach(carousel => {
      const imgs = carousel.querySelectorAll('img');
      let i = 0;
      if (imgs.length > 1) {
        setInterval(() => {
          imgs[i].classList.remove('active');
          i = (i + 1) % imgs.length;
          imgs[i].classList.add('active');
        }, 4000);
      }
    });

    // Mensaje de éxito y redirección
    document.getElementById('pedidoForm').addEventListener('submit', function(e) {
      e.preventDefault(); // Previene el envío real
      alert('¡Pedido enviado correctamente!');
      window.location.href = 'index.php';
    });
  </script>

</body>
</html>
