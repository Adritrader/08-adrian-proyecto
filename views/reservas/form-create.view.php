<form action="" method="post" enctype="multipart/form-data" novalidate>
    <div class="form-group">
        <label for="genre_id">Genre</label>
        <select class="form-control" name="genre_id" id="genre_id"
        <?php foreach ($servicios as $servicio): ?>
            <option value="<?=$servicio->getId() ?>"><?=$servicio->getNombre() ?></option>
        <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="categoria">Hora:</label>
        <input id="categoria" type="text" name="categoria" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="descripcion">Fecha:</label>
        <input id="descripcion" class="form-control" type="text" name="descripcion" required>
    </div>
    <div class="form-group text-right">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</form>