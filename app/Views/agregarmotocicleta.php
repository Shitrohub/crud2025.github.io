<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Gestión de Motocicleta</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
  <h1 class="mb-4">Gestión de Motocicletas</h1>

  <div class="row g-3 mb-4">
    <div class="col-md-5">
      <input type="text" id="marca" class="form-control" placeholder="marca">
    </div>
    <div class="col-md-5">
      <input type="text" id="modelo" class="form-control" placeholder="modelo">
    </div>
    <div class="col-md-5">
      <input type="text" id="año" class="form-control" placeholder="año">
    </div>
    <div class="col-md-5">
      <input type="text" id="precio" class="form-control" placeholder="precio">
    </div>
    <div class="col-md-2">
      <button type="button" class="btn btn-primary w-100" onclick="motocicleta()">Agregar</button>
    </div>
  </div>

  <table id="tablamotocicleta" class="table table-striped">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Año</th>
        <th>Precio</th>
      </tr>
    </thead>
    <tbody>
      <!-- Filas dinámicas -->
    </tbody>
  </table>
</div>



</body>
</html>
