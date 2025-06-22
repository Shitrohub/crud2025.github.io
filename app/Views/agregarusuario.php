<br>
<br>
<body>
  <div class="container mt-4">
    <h1 class="mb-4">Gestión de Usuarios</h1>

    <form id="formAgregarUsuario" class="mb-4">
      <div class="row g-3">
        <div class="col-md-5">
          <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario" required>
        </div>
        <div class="col-md-5">
          <input type="password" id="clave" name="clave" class="form-control" placeholder="Clave" required>
        </div>
        <div class="col-md-2">
          <button type="submit" class="btn btn-primary w-100">Agregar</button>
        </div>
      </div>
    </form>

    <table id="tablaUsuarios" class="table table-striped">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Usuario</th>
          <th>Clave</th>
        </tr>
      </thead>
      <tbody>
        <!-- Aquí se cargan dinámicamente los usuarios -->
      </tbody>
    </table>
  </div>

 
</body>
</html>
