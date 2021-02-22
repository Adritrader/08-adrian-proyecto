<div class="container-fluid">
        <div class="row fila-formulario">
            <?php var_dump($user); ?>
            <div class="form-style-3 col-4 col-formulario">
                <form action="" method="post" method="post" enctype="multipart/form-data" novalidate>
                    <fieldset>
                        <legend>Datos Personales</legend>
                        <label for="field1"><span>Nombre <span class="required">*</span></span><input type="text"
                                                                                                      class="input-field" name="nombre" value="<?php $user->getNombre() ?>"/></label>
                        <label for="field2"><span>Apellido <span class="required">*</span></span><input type="text"
                                                                                                        class="input-field" name="apellido" value="<?php $user->getApellidos()?>" /></label>
                        <label for="field3"><span>Telefono <span class="required">*</span></span><input type="text"
                                                                                                        class="input-field" name="telefono" value="" /></label>
                        <label for="field4"><span>Servicio<span class="required">*</span></span>
                            <select name="servicio" id="servicio">
                                <?php foreach ($servicios as $servicio): ?>
                                    <option value="<?=$servicio->getId() ?>"><?=$servicio->getNombre() ?></option>
                                <?php endforeach; ?>
                            </select>
                        </label>
                    </fieldset>
                    <fieldset>
                        <legend>Detalles cita</legend>
                        <label for="field6"><span>Fecha <span class="required">*</span></span><input name="fecha" id="fecha"
                                    type="date"></label>
                        <label for="field7"><span>Hora <span class="required">*</span></span>
                            <select name="hora" id="hora">
                                <option value="1">09:30</option>
                                <option value="2">11:00</option>
                                <option value="3">12:00</option>
                                <option value="4">16:30</option>
                                <option value="5">18:00</option>
                                <option value="6">19:00</option>
                            </select></label>
                        <label><span></span><input type="submit" value="Submit" /></label>
                    </fieldset>
                </form>
            </div>

            <div class="row">

            </div>
        </div>
    </div>
</div>
</div>

