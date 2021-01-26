<form action="" method="post" enctype="multipart/form-data" novalidate>
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input id="nombre" class="form-control" type="text" name="nombre" required>
    </div>
    <div class="form-group">
        <label for="categoria">Categoria:</label>
        <input id="categoria" type="text" name="categoria" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="descripcion">Descripcion:</label>
        <textarea id="descripcion" name="overview" class="form-control rounded-0" rows="4"></textarea>
    </div>
    <div class="form-group">
        <label for="precio">Precio:</label>
        <input id="precio" class="form-control" type="text" name="precio" required>
    </div>
    <div class="form-group">
        <label for="imagen">Imagen:</label>
        <input id="imagen" class="form-control" type="file" name="imagen" required>
    </div>
    <div class="form-group text-right">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="/back-productos"><button type="submit" class="btn btn-primary">Ir atrás</button></a>
    </div>
</form>