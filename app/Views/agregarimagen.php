<br>
<br>
<body>
  <div class="container mt-4">
    <h1 class="mb-4">Subir Imágenes</h1>
    <form method="post" enctype="multipart/form-data" action="<?= base_url('/subirimagen') ?>">
      <div class="mb-3">
        <input type="file" name="imagen" class="form-control" accept="image/*" required>
      </div>
      <button type="submit" class="btn btn-primary">Subir</button>
    </form>
<div id="galeria" style="display: flex; flex-wrap: wrap; gap: 16px; margin-top: 20px;">
  <?php if (isset($imagenes) && count($imagenes) > 0): ?>
    <?php foreach ($imagenes as $img): ?>
      <div style="width:300px;height:300px;border:2px dashed #ccc;display:flex;flex-direction:column;align-items:center;justify-content:center;position:relative;">
        <img src="<?= base_url('uploads/' . $img) ?>" style="max-width:100%;max-height:80%;">
        <form method="post" action="<?= base_url('/eliminarimagen') ?>" style="margin-top:8px;">
          <input type="hidden" name="imagen" value="<?= $img ?>">
          <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar esta imagen?')">Eliminar</button>
        </form>
      </div>
    <?php endforeach; ?>
  <?php else: ?>
    <span style="color:#aaa;">No hay imágenes subidas</span>
  <?php endif; ?>
</div>