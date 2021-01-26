
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <form method="post" action="<?php use App\Entity\Producto;
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
    <?php if (empty($productos)) : ?>

        <h3>No se ha encontrado ningún producto</h3>
    <?php else: ?>
        <table class="table table-condensed">
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
            <?php foreach ($productos as $producto) { ?>
                <tr>
                    <td> <?= generar_imagen_local(Producto::IMAGEN_PATH . '/', $producto->getImagen(),
                            $producto->getNombre(), 300, 200) ?> </td>
                    <td><?= $producto->getCategoria() ?></td>
                    <td><?= $producto->getDescripcion() ?></td>
                    <td><?= $producto->getPrecio()?></td>
                    <td style="width: 140px"><a href="/productos/<?= $producto->getId() ?>/edit">
                            <button type="button" class="btn btn-primary"><i class="fa fa-edit"></i></button>
                        </a>
                        <a href="<?=$router->getUrl("productos_delete", ["id"=>$producto->getId()]) ?>">
                            <button type="button" class="btn btn-warning"><i class="fa fa-trash"></i></button>
                        </a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    <?php endif; ?>

    <!-- /.row -->
</div>