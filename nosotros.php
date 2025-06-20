<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Página con Encabezado y Menú</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Montserrat&family=Oswald&display=swap" rel="stylesheet" />

  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    .menu {
      background-color: #333;
      overflow: hidden;
      display: flex;
      justify-content: flex-end;
      position: absolute;
      width: 100%;
      top: 0;
      z-index: 2;
      padding-right: 20px;
      font-family: 'Oswald', sans-serif;
    }

    .menu a {
      color: white;
      text-align: center;
      padding: 14px 20px;
      text-decoration: none;
      display: block;
      animation: float 3s ease-in-out infinite;
      transition: color 0.3s ease, text-shadow 0.3s ease;
      cursor: pointer;
    }

    .menu a:hover {
      color: #ffd700;
      text-shadow: 0 0 8px #ffd700;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-6px); }
    }

    header {
      height: 270px;
      position: relative;
      margin-top: 50px;
      overflow: hidden;
      display: flex;
      flex-direction: row;
      z-index: 1;
    }

    .carousel-wrapper {
      position: absolute;
      top: 0;
      left: 0;
      width: 200%;
      height: 100%;
      display: flex;
      animation: scroll 20s linear infinite;
      z-index: 0;
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

    .column {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 20px;
      z-index: 3;
      text-align: center;
      color: black;
      text-shadow: 2px 2px 4px rgba(255,255,255,0.6);
    }

    .left-column h1 {
      font-family: 'Oswald', sans-serif;
      font-size: 3em;
      margin: 0;
    }

    .left-column h2 {
      font-family: 'Montserrat', sans-serif;
      font-size: 1.2em;
      margin-top: 10px;
      animation: float 4s ease-in-out infinite;
    }

    .right-columns {
      flex: 2;
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 30px;
      font-family: 'Montserrat', sans-serif;
      font-size: 1em;
      line-height: 1.6em;
      background-color: rgba(255, 255, 255, 0.6);
      border-radius: 10px;
      margin: 20px;
      color: black;
      text-shadow: none;
    }

    .below-header {
      background-color: #636363;
      color: white;
      display: flex;
      flex-direction: column;
      align-items: center;
      font-family: 'Montserrat', sans-serif;
      padding: 40px 0;
      margin: 0;
      width: 100vw;
      overflow-x: hidden;
    }

    .below-header .container {
      background-color: rgba(255, 255, 255, 0.15);
      padding: 40px 60px;
      border-radius: 12px;
      max-width: 1200px;
      width: 90%;
      box-sizing: border-box;
      color: white;
      text-shadow: none;
      text-align: left;
      font-size: 0.9em;
      line-height: 1.4em;
    }

    .below-header .container h1 {
      font-family: 'Oswald', sans-serif;
      font-size: 2em;
      margin-bottom: 25px;
      text-align: center;
      color: #ffd700;
      text-shadow: 0 0 6px #ffd700;
    }

    .below-header .container h2 {
      font-family: 'Montserrat', sans-serif;
      font-weight: 700;
      font-size: 1.1em;
      margin-top: 25px;
      margin-bottom: 10px;
      color: #ffd700;
      text-shadow: 0 0 4px #ffd700;
    }

    .below-header .container p {
      margin-top: 0;
      margin-bottom: 15px;
    }

    .below-header .image-container {
      margin-top: 30px;
    }

    .below-header .image-container img {
      max-width: 90%;
      height: auto;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
    }

    .recursos-humanos {
      margin-top: 50px;
      background-color: rgba(255, 255, 255, 0.15);
      padding: 40px 60px;
      border-radius: 12px;
      max-width: 1200px;
      width: 90%;
      box-sizing: border-box;
      text-align: left;
      color: white;
      font-size: 0.9em;
      line-height: 1.5em;
    }

    .recursos-humanos h2 {
      font-family: 'Oswald', sans-serif;
      font-size: 1.8em;
      color: #ffd700;
      margin-bottom: 20px;
      text-shadow: 0 0 5px #ffd700;
    }

    .recursos-humanos p {
      font-family: 'Montserrat', sans-serif;
      margin: 0 0 20px 0;
    }

    .toggle-button {
      background-color: #ffd700;
      color: #333;
      border: none;
      padding: 8px 16px;
      font-size: 0.9em;
      font-family: 'Oswald', sans-serif;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      margin-top: 10px;
    }

    .toggle-button:hover {
      background-color: #e6c200;
    }

    .organigrama-img {
      display: none;
      margin-top: 20px;
      max-width: 100%;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
    }

    /* Nuevo estilo para los recuadros/cards */
    .card-container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      margin-top: 40px;
      justify-content: center;
    }

    .card {
      background-color: rgba(255, 255, 255, 0.15);
      border-radius: 12px;
      padding: 20px;
      max-width: 350px;
      width: 100%;
      box-sizing: border-box;
      color: white;
      font-family: 'Montserrat', sans-serif;
      box-shadow: 0 4px 10px rgba(0,0,0,0.4);
      text-align: left;
    }

    .card h3 {
      font-family: 'Oswald', sans-serif;
      color: #ffd700;
      margin-bottom: 15px;
      text-shadow: 0 0 4px #ffd700;
    }

    .card p {
      font-size: 0.9em;
      line-height: 1.4em;
      margin-bottom: 15px;
    }
  </style>

  <script>
    function toggleOrganigrama() {
      const img = document.getElementById("organigramaImage");
      img.style.display = (img.style.display === "none" || img.style.display === "") ? "block" : "none";
    }

    // Función para toggle dinámico de las imágenes dentro de las cards
    function toggleCardImage(idImg) {
      const img = document.getElementById(idImg);
      img.style.display = (img.style.display === "none" || img.style.display === "") ? "block" : "none";
    }
  </script>
</head>
<body>

<?php
echo '
  <div class="menu">
    <a href="index.php">Inicio</a>
    <a href="nosotros.php">Nosotros</a>
    <a href="contacto.php">Contacto</a>
  </div>
';
?>

<header>
  <div class="carousel-wrapper">
    <img src="img/encabezadocostal.png" alt="Imagen 1" />
    <img src="img/encabezadocostal.png" alt="Imagen 2" />
  </div>

  <div class="column left-column">
    <h1>URBANTHREADS</h1>
    <h2>Reinventa. Reúsa. Resalta!</h2>
  </div>

  <div class="column right-columns">
    <p>
      <strong>Objetivo general:</strong><br>
      Consolidar a Urban Threads como una empresa líder en la restauración y reciclaje
      de prendas de vestir, mediante la oferta de productos de moda sostenible y de alta
      calidad, minimizando el impacto ambiental derivado del consumo textil y
      fomentando una cultura de responsabilidad social y ecológica en la industria de la
      moda.
    </p>
  </div>
</header>

<!-- Sección Estrategias -->
<section class="below-header">
  <div class="container">
    <h1>ESTRATEGIAS</h1>

    <h2>1. Implantación de procesos de restauración y reciclaje eficientes:</h2>
    <p>Desarrollar e integrar metodologías innovadoras para la restauración, personalización y reciclaje de prendas, asegurando altos estándares de calidad y durabilidad en los productos terminados.</p>

    <h2>2. Alianzas estratégicas con centros de acopio y diseñadores locales:</h2>
    <p>Establecer convenios con organizadores, tiendas de segunda mano y diseñadores sustentables para asegurar un flujo constante de prendas reutilizables y fomentar el diseño colaborativo de nuevas piezas.</p>

    <h2>3. Campañas de concentración y marketing educativo:</h2>
    <p>Desarrollar campañas de comunicación enfocadas en educar al consumidor sobre el impacto ambiental de la industria textil y los beneficios de la moda sostenible. Utilizar redes sociales, eventos y colaboraciones con influencers para posicionar a la marca como un referente en consumo responsable.</p>

    <div class="image-container">
      <img src="img/organigramagnl.png" alt="Estrategias Urbanas" />
    </div>

    <!-- Recursos Humanos + Organigrama -->
    <div class="recursos-humanos">
      <h2>Recursos Humanos</h2>
      <p>
        Fortalecer el talento humano de Urban Threads mediante la implementación de
        programas de reconocimiento, desarrollo profesional y mejora de condiciones
        laborales, con el fin de aumentar la motivación, el compromiso y el rendimiento de
        los colaboradores.
      </p>

      <button class="toggle-button" onclick="toggleOrganigrama()">Organigrama</button>
      <img id="organigramaImage" class="organigrama-img" src="img/organigramarh.png" alt="Organigrama" />

      <!-- Aquí empiezan los recuadros/cards -->
      <div class="card-container">

        <div class="card">
          <h3>Sistemas</h3>
          <p>Desarrollar y mantener sistemas de software eficientes y sostenibles que apoyen
los procesos de producción, gestión y comercialización de la empresa,
contribuyendo a minimizar el impacto ambiental y maximizar la calidad y eficiencia
en la entrega de productos de moda sostenible</p>
          <button class="toggle-button" onclick="toggleCardImage('imgEquipoDiseno')">Ver más</button>
          <img id="imgEquipoDiseno" class="organigrama-img" src="img/organigramasis.png" alt="Equipo de Diseño" />
        </div>

        <div class="card">
          <h3>Contabilidad</h3>
          <p>Garantizar una gestión financiera, eficaz mediante el registro preciso el análisis
oportuno y el cumplimiento normativo de las operaciones contables de la empresa</p>
          <button class="toggle-button" onclick="toggleCardImage('imgAreaProduccion')">Ver más</button>
          <img id="imgAreaProduccion" class="organigrama-img" src="img/organigramaconta.png" alt="Área de Producción" />
        </div>

        <div class="card">
          <h3>Mercadotecnia</h3>
          <p>Aumentar las ventas y la participación de mercado de la empresa, mediante la
creación y promoción de productos o servicios que satisfagan las necesidades y
deseos de los clientes</p>
          <button class="toggle-button" onclick="toggleCardImage('imgMarketingVentas')">Ver más</button>
          <img id="imgMarketingVentas" class="organigrama-img" src="img/organigramamerca.png" alt="Marketing y Ventas" />
        </div>
         <div class="card">
          <h3>Producción</h3>
          <p>Reciclar, ahorrar materiales y restaurar la ropa, de manera que una prenda vieja sea
reutilizable nuevamente, de manera que preserve su calidad y autenticidad original,
ayudando a reducir la explotación de materias primas.
</p>
          
        </div>

      </div> <!-- fin card-container -->

    </div> <!-- fin recursos-humanos -->
  </div> <!-- fin container -->
</section>

</body>
</html>
