<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" novalidate>
    <input type="hidden" name="id" value="<?= $usuario->getId() ?>">
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input id="nombre" class="form-control" type="text" name="nombre" value="<?= $usuario->getNombre() ?>" required>
    </div>
    <div class="form-group">
        <label for="apellidos">Apellidos:</label>
        <input id="apellidos" class="form-control" type="text" name="apellidos" value="<?= $usuario->getApellidos() ?>" required>
    </div>
    <div class="form-group">
        <label for="telefono">Apellidos:</label>
        <input id="telefono" class="form-control" type="text" name="telefono" value="<?= $usuario->getTelefono() ?>" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input id="email" class="form-control" type="email" name="email" value="<?= $usuario->getEmail() ?>" required>
    </div>
    <div class="form-group">
        <label for="role">Role:</label>
        <input id="role" class="form-control" type="text" name="role" value="<?= $usuario->getRole() ?>" required>
    </div>
    <div class="form-group text-right">
        <button type="submit" class="btn btn-primary">Guardar usuario</button>
    </div>
</form>