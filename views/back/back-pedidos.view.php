
<div class="container">
    <div class="row">
        <div class="col-12">
            <form method="post" action="<?php use App\Entity\Pedido;
            $_SERVER["PHP_SELF"]; ?>"
                  class="form-inline  justify-content-center my-4">
                <div class="form-group">
                    <input name="text" class="form-control mr-sm-4"
                           value="<?= ($_POST["text"]) ?? "" ?>"
                           type="text" placeholder="Buscar" aria-label="Search">
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="optradio" id="nombre" value="nombre">&nbsp;Nombre                        &nbsp;
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-inline">
                        <input class="form-check-input" type="radio" name="optradio" id="descripcion" value="descripcion">&nbsp;Descripcion                        &nbsp;
                    </label></div>
                <div class="form-check-inline">
                    <label class="form-check-inline">
                        <input class="form-check-input" type="radio" name="optradio" id="both" value="Ambos" checked>&nbsp;Ambos                        &nbsp;
                    </label>
                </div>
                <div class="form-group">
                    <button class="form-control btn btn-secondary my-2 my-sm-0" type="submit" name="botonFiltrar">Buscar</button>
                </div>
            </form>
            <div class="text-right mb-3"><a class="btn btn-primary" href="/productos/create"
                                            title="create a new partner"> <i class="fa fa-plus-circle">
                    </i>Añadir producto</a>
            </div>
        </div>

        <p><?= $error ?? ""
            ?></p>
    </div>
    <?php if (empty($pedidos)) : ?>

        <h3>No se ha encontrado ningún pedido</h3>
    <?php else: ?>

    <div class="container">
        <table>
            <tr>
                <th>Imagen</th>
                <th>Nombre <a href="/movies?order=title&&tipo=ASC"><i
                            class="fa fa-arrow-down"></i></a>
                    <a href="/movies?order=title&&tipo=DESC"><i
                            class="fa fa-arrow-up"></i></a></th>
                <th>Categoría</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
            <?php foreach ($pedidos as $pedido) { ?>
                <tr>
                    <td><?= $pedido->getId() ?></td>
                    <td><?= $pedido->getPrecio() ?></td>
                    <td><?= $pedido->getFecha()->format("d-M-Y")?></td>
                    <td><?= $pedido->getEstado() ?></td>
                    <td><?= $pedido->getRealizaId()?></td>
                    <td><?= $pedido->getRealizaUsuarioId() ?></td>
                    <td style="width: 140px"><a href="/pedidos/<?= $pedido->getId() ?>/edit">
                            <button type="button" class="btn btn-primary"><i class="fa fa-edit"></i></button>
                        </a>
                        <a href="<?=$router->getUrl("pedidos_delete", ["id"=>$pedido->getId()]) ?>">
                            <button type="button" class="btn btn-warning"><i class="fa fa-trash"></i></button>
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