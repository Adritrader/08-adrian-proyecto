<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" novalidate>
    <input type="hidden" name="id" value="<?= $producto->getId() ?>">
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input id="nombre" class="form-control" type="text" name="nombre" value="<?= $producto->getNombre() ?>" required>
    </div>
    <div class="form-group">
        <label for="categoria">Categoria</label>
        <select class="form-control" name="categoria" id="categoria"
        <?php foreach ($productos as $producto): ?>
            <option value="<?=$producto->getId() ?>"><?=$producto->getCategoria() ?></option>
        <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="descripcion">Descripcion:</label>
        <textarea id="descripcion" name="descripcion" class="form-control rounded-0" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="precio">Precio:</label>
        <input id="precio" class="form-control" type="text" name="precio" required>
    </div>
    <div class="form-group">
        <label for="imagen">Logo:</label>
        <input type="hidden" name="poster" value="<?= $producto->getImagen() ?>">
        <input id="imagen" class="form-control" type="file" name="imagen" value="<?= $producto->getImagen() ?>" required>
        <small><?= $producto->getImagen() ?></small>
    </div>
    <div class="form-group text-right">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</form>