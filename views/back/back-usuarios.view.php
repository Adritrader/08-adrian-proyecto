<div class="container">
    <div class="row fila-inputs">
        <div class="col-lg-12">
            <form method="post" action="<?php use App\Entity\Usuario;

            $_SERVER["PHP_SELF"]; ?>"
                  class="form-inline">
                <div class="form-group">
                    <input name="text" id="text" value="<?= ($_POST["text"]) ?? "" ?>"
                           type="text" placeholder="Buscar" aria-label="Search">
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="optradio" id="nombre" value="nombre">&nbsp;Nombre
                        &nbsp;
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-inline">
                        <input class="form-check-input" type="radio" name="optradio" id="email" value="email">&nbsp;Email
                        &nbsp;
                    </label></div>
                <div class="form-check-inline">
                    <label class="form-check-inline">
                        <input class="form-check-input" type="radio" name="optradio" id="both" value="Ambos" checked>&nbsp;Ambos
                        &nbsp;
                    </label>
                </div>
                <div class="form-group">
                    <button style="margin-top: 15px; margin-left: 0px" class="button-four" type="submit" name="botonFiltrar">
                        Buscar
                    </button>
                </div>
            </form>
        </div>
        <p><?= $error ?? "" ?></p>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
    <?php if (empty($usuarios)) : ?>
        <h3>No se ha encontrado ningún usuario</h3>
    <?php else: ?>
        <div><button class="button-two"><a style="text-decoration: none; color: white" class="btn btn-primary" href="/usuarios/create"
                                           title="create a new partner"><i class="fa fa-plus-circle">
                    </i>Añadir usuario</a></button>
        </div>
        <table>
            <tr style="border: 1px">
                <th>ID</th>
                <th>Nombre<a href="/usuarios?order=title&&tipo=ASC"><i
                                class="fa fa-arrow-down"></i></a>
                    <a href="/usuarios?order=title&&tipo=DESC"><i
                                class="fa fa-arrow-up"></i></a></th>
                <th>Apellidos</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Roles<a href="/usuarios?roles=release_date&amp;tipo=ASC"><i
                                class="fa fa-arrow-down"></i></a>
                    <a href="/usuarios?order=release_date&amp;tipo=DESC"><i
                                class="fa fa-arrow-up"></i></a></th>
                <th>Acciones</th>
            </tr>
            <?php foreach ($usuarios as $usuario) { ?>
                <tr>
                    <td><?= $usuario->getId() ?></td>
                    <td><?= $usuario->getNombre() ?></td>
                    <td><?= $usuario->getApellidos() ?></td>
                    <td><?= $usuario->getTelefono() ?></td>
                    <td><?= $usuario->getEmail() ?></td>
                    <td><?= $usuario->getRole() ?></td>
                    <td><a href="/usuarios/<?= $usuario->getId() ?>/edit">
                            <button type="button" class="button-two"><i class="fa fa-edit"></i>Editar</button>
                        </a>
                        <a href="<?= $router->getUrl("usuarios_delete", ["id" => $usuario->getId()]) ?>">
                            <button type="button" class="button-two"><i class="fa fa-trash"></i>Borrar</button>
                        </a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    <?php endif; ?>
            </div>
    </div>
</div>