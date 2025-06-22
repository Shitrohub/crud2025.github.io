<body class="welcome-page">

  <!-- Barra de navegación fija arriba -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">MWB</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-motocicleta">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= base_url('/cargarvistainicio') ?>">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/cargaragregarusuario') ?>">Agregar Usuario</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/cargaragregarmotocicleta') ?>">Agregar Motocicleta</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/cargaragregarimagen') ?>">Agregar Imagen</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>



</body>
</html>
<br>
<br>