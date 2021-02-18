<div class="container-fluid">
    <div class="row fila-inputs-productos">
        <div class="col-4">
            <form method="post" action="<?php use App\Entity\Registra;
            $_SERVER["PHP_SELF"]; ?>"
                  class="form-inline">
                <div class="form-group">
                    <input name="text" id="text" value="<?= ($_POST["text"]) ?? "" ?>"
                           type="text" placeholder="Buscar" aria-label="Search">
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="optradio" id="hora" value="hora">&nbsp;Hora
                        &nbsp;
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-inline">
                        <input class="form-check-input" type="radio" name="optradio" id="fecha" value="fecha">&nbsp;Fecha
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
    <div class="container">
        <div class="row">
            <div class="col-4">
                <?php if (empty($registra)) : ?>
                    <h3>No se ha encontrado ninguna reserva</h3>
                <?php else: ?>
                    <div><a style="text-decoration: none; color: white" class="btn btn-primary" href="/reservas/create"><button class="button-two">
                                <i class="fa fa-plus-circle">
                                </i> Añadir reserva</button></a>
                    </div>
                    <table id="tabla-usuarios">
                        <tr>
                            <th>ID</th>
                            <th>Usuario</th>
                            <th>Servicio</th>
                            <th>Hora</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </tr>

                        <?php foreach ($registra as $reserva) { ?>
                            <tr>
                                <td><?= $reserva->getUsuarioId() ?></td>
                                <td><?= $reserva->getServicioId() ?></td>
                                <td><?= $reserva->getHoraCita()->format("H:i:s") ?></td>
                                <td><?= $reserva->getFechaCita()->format("Y-m-d") ?></td>
                                <td><a href="/reservas/<?= $reserva->getId() ?>/edit">
                                        <button type="button" class="button-two"><i class="fa fa-edit"></i>Editar</button>
                                    </a>
                                    <a href="<?= $router->getUrl("reservas_delete", ["id" => $reserva->getId()]) ?>">
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
</div>