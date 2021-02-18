<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" novalidate>
    <div class="form-group">
        <label for="nombre">Servicio:</label>
        <select class="form-control" name="nombre" id="nombre"
        <?php foreach ($servicios as $servicio): ?>
            <option value="<?=$servicio->getId() ?>"><?=$servicio->getNombre() ?></option>
        <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <select class="form-control" name="hora" id="hora"
        <?php foreach ($reservas as $reserva): ?>
            <option value="<?=$reserva->getId() ?>"><?=$reserva->getHoraCita()->format("H:i:s");  ?></option>
        <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="fecha">Fecha:</label>
        <?php foreach ($reservas as $reserva): ?>
            <option value="<?=$reserva->getId() ?>"><?=$reserva->getFechaCita()->format("Y-m-d");  ?></option>
        <?php endforeach; ?>
    </div>
    <div class="form-group text-right">
        <button type="submit" class="btn btn-primary">Reservar</button>
    </div>
</form>