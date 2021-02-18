<?php

use App\Entity\Producto;

?>
<div class="container-fluid">
        <div class="row fila-servicios">
            <div class="col-2">
                <div class="sidenav">
                    <a href="tienda.html">Inicio</a>
                    <button class="dropdown-btn">Categorias
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                        <a href="categorias-champu.html">Champús</a>
                        <a href="categorias-tratamientos.html">Tratamientos</a>
                        <a href="categorias-accesorios">Accesorios</a>
                    </div>

                </div>
            </div>

            <div class="col-3 tienda-frontal">
                <div class="gallery-container w-3 h-3">
                    <?php

                    if (empty($errors)) : ?>
                    <div class="gallery-item">
                        <div class="image">
                            <?= generar_imagen_local(Producto::IMAGEN_PATH . '/', $producto->getImagen(),
                                $producto->getNombre()) ?>
                        </div>
                        <div class="row fila-thumbnail">
                            <div class="col-4 col-texto-tienda">
                                <?= generar_imagen_local(Producto::IMAGEN_PATH . '/', $producto->getImagen(),
                                    $producto->getNombre(), 300, 200) ?>
                            </div>
                            <div class="col-4 col-texto-tienda">
                                <?= generar_imagen_local(Producto::IMAGEN_PATH . '/', $producto->getImagen(),
                                    $producto->getNombre(), 300, 200) ?>
                            </div>
                            <div class="col-4 col-texto-tienda">
                                <?= generar_imagen_local(Producto::IMAGEN_PATH . '/', $producto->getImagen(),
                                    $producto->getNombre(), 300, 200) ?>
                            </div>
                        </div>
                        <div class="text">
                            <p<?=$producto->getNombre()?></p>
                            <?= $producto->getPrecio()?>

                        </div>

                    </div>
                </div>
            </div>

            <div class="col-4 descripcion-producto">

                <h2>Kerastase Kit</h2>

                <p class="descripcion-producto"><?= $producto->getDescripcion() ?>
</p>
                <h2 class="nombre-producto"><?= $producto->getPrecio()?></h2>
                <button class="button-three boton-carrito"><i class="fa fa-shopping-cart"></i>Añadir al carrito</button>


            </div>
            <div class="col-2">

            </div>

        </div>
    </div>

    <div class="container-fluid">
        <div class="row titulo-miniaturas-tienda">
            <div class="col-12">
                <h2>Destacados</h2>
                <hr>
                <div class="row productos-miniaturas">
                    <?php

                    foreach ($productos as $producto) { ?>

                        <div class="col-2 miniatura"><?= generar_imagen_local(Producto::IMAGEN_PATH . '/', $producto->getImagen(),
                                $producto->getNombre(), 300, 200) ?>
                            <span><?= $producto->getPrecio() . " " . "€"?></span>
                            <p><?= $producto->getDescripcion() ?></p>
                            <button class="button-three"><i class="fas fa-info-circle"></i>Ver detalles</button>
                            <button class="button-three"><i class="fas fa-shopping-cart"></i>Añadir compra</button>
                        </div>
                        <?php
                    }
                    ?>
                    <?php else :?>

                        <?php foreach ($errors as $error) :?>
                            <h3><?= $error ?></h3>
                        <?php endforeach;?>
                    <?php endif ?>
                    <div class="col-2 miniatura"><img src="img/productos/ampolla-2.jpg" alt="ampolla-2">
                        <span>82,50 €</span>
                        <h2 class="nombre-producto">Mugella & Sulé</h2>
                        <p class="producto-card-text">Ampolla multivitamina. Llena de vitaminas tu cabello con la
                            aplicación de las
                            ampollas Premium Mugella & Sulé. Contiene 6 uds.</p>
                        <div class="row">
                            <button class="button-three"><i class="fas fa-info-circle"></i>Ver detalles</button>
                        </div>
                        <div class="row">
                            <button class="button-three"><i class="fas fa-shopping-cart"></i>Añadir compra</button>
                        </div>


                    </div>
                    <div class="col-2 miniatura"><img src="img/productos/sebastian-hydre.jpg" alt="sebastian-hydre">
                        <span>18,95 €</span>
                        <h2 class="nombre-producto">Sebastian Hydre</h2>
                        <p class="producto-card-text">Sebastian Hydre es un champú hidratante , nutre el cabello y lo deja con un tacto suave y agradable. Disponible en 1000 ml.</p>
                        <div class="row">
                            <button class="button-three"><i class="fas fa-info-circle"></i>Ver detalles</button>
                        </div>
                        <div class="row">
                            <button class="button-three"><i class="fas fa-shopping-cart"></i>Añadir compra</button>
                        </div>
                    </div>
                <div class="col-2 miniatura"><img src="img/productos/ghd-plancha-pro.jpg" alt="ghd-plancha-pro">
                    <span>179,95 €</span>
                    <h2 class="nombre-producto">Plancha GHD</h2>
                    <p class="producto-card-text">Plancha de pelo GHD pro style. Plancha cerámica de alto
                        rendimiento. No daña el cabello. Tiene sensor de temperatura y alarma.</p>
                    <div class="row">
                        <button class="button-three"><i class="fas fa-info-circle"></i>Ver detalles</button>
                    </div>
                    <div class="row">
                        <button class="button-three"><i class="fas fa-shopping-cart"></i>Añadir compra</button>
                    </div>


                </div>
                    <div class="col-2 miniatura"><img src="img/productos/ampollas-salerm.jpg"
                        alt="ampollas-salerm">
                    <span>18,95 €</span>
                    <h2 class="nombre-producto">Salerm</h2>
                    <p class="producto-card-text">Ampollas Salerm multivitaminas, anticaida, reparador, sanificador. Cuida tu cabello al máximo con las ampollas Salerm.</p>
                    <div class="row">
                        <button class="button-three"><i class="fas fa-info-circle"></i>Ver detalles</button>
                    </div>
                    <div class="row">
                        <button class="button-three"><i class="fas fa-shopping-cart"></i>Añadir compra</button>
                    </div>


                </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row titulo-miniaturas-tienda">
                <div class="col-12">
                    <h2>Ofertas</h2>
                    <hr>
                    <div class="row productos-miniaturas">
                        <div class="col-2 miniatura"><img src="img/productos/ghd-secador-flight.jpg"
                                alt="ghd-secador-flight">
                            <span>129,95 €</span>
                            <h2 class="nombre-producto">Secador GHD</h2>
                            <p class="producto-card-text">Secador de pelo GHD de estilo moderno. Cuenta con diferentes
                                modos de secado. Viene con difusor y complementos. Potencia 2000w.</p>
                            <div class="row">
                                <button class="button-three"><i class="fas fa-info-circle"></i>Ver detalles</button>
                            </div>
                            <div class="row">
                                <button class="button-three"><i class="fas fa-shopping-cart"></i>Añadir compra</button>
                            </div>

                        </div>
                        <div class="col-2 miniatura"><img src="img/productos/ghd-plancha-pro.jpg" alt="ghd-plancha-pro">
                            <span>179,95 €</span>
                            <h2 class="nombre-producto">Plancha GHD</h2>
                            <p class="producto-card-text">Plancha de pelo GHD pro style. Plancha cerámica de alto
                                rendimiento. No daña el cabello. Tiene sensor de temperatura y alarma.</p>
                            <div class="row">
                                <button class="button-three"><i class="fas fa-info-circle"></i>Ver detalles</button>
                            </div>
                            <div class="row">
                                <button class="button-three"><i class="fas fa-shopping-cart"></i>Añadir compra</button>
                            </div>


                        </div>
                        <div class="col-2 miniatura"><img
                            src="img/productos/max_ghd_styler_v_gold_nocturne_-_plancha_pelo_ghd_2.jpg"
                            alt="ghd-gold-nocturne">
                        <span>209,95 €</span>
                        <h2 class="nombre-producto">Plancha GHD</h2>
                        <p class="producto-card-text">Plancha GHD Max Styler V Gold Nocturne. Plancha cerámica de
                            alto rendimiento. Resultados excelente, brillo nocturno. Potencia 1800w.</p>
                        <div class="row">
                            <button class="button-three"><i class="fas fa-info-circle"></i>Ver detalles</button>
                        </div>
                        <div class="row">
                            <button class="button-three"><i class="fas fa-shopping-cart"></i>Añadir compra</button>
                        </div>


                    </div>
                        <div class="col-2 miniatura"><img src="img/productos/kerastase-densifique-cure.jpg" alt="kerastase-densifique-cure">
                            <span>45,95 €</span>
                            <h2 class="nombre-producto">Kerastase</h2>
                            <p class="producto-card-text">Kerastase Densifique Cure son unas ampollas diseñadas para darle un mayor volumen a su cabello con un brillo natural.</p>
                            <div class="row">
                                <button class="button-three"><i class="fas fa-info-circle"></i>Ver detalles</button>
                            </div>
                            <div class="row">
                                <button class="button-three"><i class="fas fa-shopping-cart"></i>Añadir compra</button>
                            </div>

                        </div>
                        <div class="col-2 miniatura"><img src="img/productos/loreal-duo.jpg" alt="loreal-duo">
                            <span>26,95 €</span>
                            <h2 class="nombre-producto">Loreal Dúo</h2>
                            <p class="producto-card-text">Acondicionador Loreal Dúo es un producto que protege y repara el cabello gracias a la acción combinada de los 2 productos.</p>
                            <div class="row">
                                <button class="button-three"><i class="fas fa-info-circle"></i>Ver detalles</button>
                            </div>
                            <div class="row">
                                <button class="button-three"><i class="fas fa-shopping-cart"></i>Añadir
                                    compra</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
