<div class="container">
    <div class="row">
        <div class="col-lg-9 col-md-6 my-5">
            <h1><?= $usuario->getNombre() ?></h1>
            <p class="text-muted"><?= $usuario->getApellidos()?></p>
            <h2><em><?= $usuario->getTelefono() ?></em></h2>
            <h5 class="text-muted">Email</h5>
            <p><?= $usuario->getEmail() ?></p>
            <p><?= $usuario->getRole() ?></p>
        </div>
    </div> <!-- /.row -->
</div> <!-- /.container -->
<form action="<?=$router->getUrl("usuarios_destroy") ?>" method="post" novalidate>
    <input type="hidden" name="id" value="<?= $usuario->getId() ?>">
    <div class="form-group text-left">
        <h4>¿Estas seguro que quieres eliminar el usuario " <?= $usuario->getNombre() ?> "?</h4>
        <button type="submit" name="userAnswer" value="yes" class="btn btn-danger btn-lg">Si</button>
        <button type="submit" name="userAnswer" value="no" class="btn btn-info btn-lg">No</button>
    </div>
</form>
<br><br>


