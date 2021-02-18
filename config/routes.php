<?php

/* Default routes */
$router->get("old", "DefaultController", "index");
$router->get("contact", "DefaultController", "contact");
$router->post("contact", "DefaultController", "contact");
$router->get("api/demo", "DefaultController", "demo");

/* My routes Front-End */
$router->get("", "MyController", "index");
$router->get("servicios", "MyController", "servicios");
$router->get("quienes-somos", "MyController", "quienesSomos");
$router->get("galeria", "MyController", "galeria");
$router->get("blog", "MyController", "blog");
$router->get("reserva-cita", "MyController", "reservaCita");
$router->get("contacto", "MyController", "contacto");
$router->get("tienda", "MyController", "tienda");
$router->get("signup", "MyController", "signup");
$router->get("perfil", "MyController", "perfil");
$router->get("perfil", "MyController", "single-page");


/* Movies routes

$router->get("movies", "MovieController", "index", [], "", "ROLE_USER");
$router->post("movies", "MovieController", "filter", [], "", "ROLE_USER");

$router->get("movies/:id/show", "MovieController", "show",
    ["id" => "number"], "movies_show");

$router->get("movies/create", "MovieController", "create");
$router->post("movies/create", "MovieController", "store");

$router->get("movies/:id/edit", "MovieController", "edit", ["id" => "number"]);
$router->post("movies/:id/edit", "MovieController", "edit", ["id" => "number"]);

$router->get("movies/:id/delete", "MovieController", "delete", ["id"=>"number"], "movies_delete");
$router->post("movies/delete", "MovieController", "destroy", [],"movies_destroy");

/* Partners routes */
$router->get("partners", "PartnerController", "index", [], "partners_index", "ROLE_ADMIN");
$router->post("partners", "PartnerController", "filter", [], "partners_filter", "ROLE_ADMIN");

$router->get("partners/create", "PartnerController", "create", [], "partners_create", "ROLE_ADMIN");
$router->post("partners/create", "PartnerController", "store", [], "partners_store", "ROLE_ADMIN");

$router->get("partners/:id/edit", "PartnerController", "edit", ["id"=>"number"], "partners_edit", "ROLE_ADMIN");
$router->post("partners/:id/edit", "PartnerController", "update", ["id"=>"number"], "partners_update", "ROLE_ADMIN");

$router->get("partners/:id/delete", "PartnerController", "delete", ["id"=>"number"], "partners_delete", "ROLE_ADMIN");
$router->post("partners/delete", "PartnerController", "destroy", [], "partners_destroy", "ROLE_ADMIN");


/*Login routes */
$router->get("login", "AuthController", "login");
$router->post("login", "AuthController", "checkLogin");

/*Logout routes */

$router->get("logout", "AuthController", "logout");
$router->post("logout", "AuthController", "checkLogin");


/* BackOffice routes */

$router->get("back-index", "BackController", "backIndex");
$router->get("back-reservas", "BackController", "backReservas");
$router->get("back-galeria", "BackController", "backGaleria");
$router->get("back-blog", "BackController", "backBlog");
$router->get("back-productos", "BackController", "backProductos");
$router->get("back-pedidos", "BackController", "backPedidos");
$router->get("back-usuarios", "BackController", "backUsuarios");


/*BackOffice Productos routes*/

$router->get("productos", "BackController", "index", [], "producto_index", "ROLE_ADMIN");

$router->post("productos", "BackController", "filter", [], "producto_filter", "ROLE_ADMIN");
$router->get("productos/create", "BackController", "createProducto", [], "producto_create", "ROLE_ADMIN");
$router->post("productos/create", "BackController", "storeProducto", [], "producto_store", "ROLE_ADMIN");
$router->get("productos/:id/edit", "BackController", "editProducto", ["id" => "number"], "producto_edit", "ROLE_ADMIN");
$router->post("productos/:id/edit", "BackController", "updateProducto", ["id" => "number"], "producto_update", "ROLE_ADMIN");
$router->get("productos/:id/show", "ProductoController", "showProducto", ["id" => "number"], "producto_show");
$router->get("productos/:id/delete", "BackController", "deleteProducto", ["id" => "number"],"productos_delete", "ROLE_ADMIN");
$router->post("productos/delete", "BackController", "destroyProducto", [], "productos_destroy", "ROLE_ADMIN");


/*BackOffice Pedidos routes */

$router->get("pedidos", "BackController", "index", [], "pedidos_index", "ROLE_ADMIN");
$router->post("pedidos", "BackController", "filter", [], "pedidos_filter", "ROLE_ADMIN");
$router->get("pedidos/create", "BackController", "createPedido", [], "pedidos_create", "ROLE_ADMIN");
$router->post("pedidos/create", "BackController", "storePedido", [], "pedidos_store", "ROLE_ADMIN");
$router->get("movies/:id/edit", "MovieController", "edit", ["id" => "number"]);
$router->post("movies/:id/edit", "MovieController", "edit", ["id" => "number"]);
$router->get("pedidos/:id/show", "BackController", "showPedido",
    ["id" => "number"], "pedidos_show");
$router->get("pedidos/delete", "BackController", "deletePedido", [],"pedidos_delete", "ROLE_ADMIN");


/* BackOffice Usuarios routes */

$router->get("usuarios", "BackController", "index", [], "usuarios_index", "ROLE_ADMIN");
$router->post("usuarios", "BackController", "filter", [], "usuarios_filter", "ROLE_ADMIN");
$router->get("usuarios/create", "BackController", "createUsuario", [], "usuarios_create", "ROLE_ADMIN");
$router->post("usuarios/create", "BackController", "storeUsuario", [], "usuarios_store", "ROLE_ADMIN");
$router->get("usuarios/:id/edit", "UsuarioController", "editUsuario", ["id" => "number"],"usuarios_edit", "ROLE_ADMIN");
$router->post("usuarios/:id/edit", "UsuarioController", "editUsuario", ["id" => "number"], "usuarios_update", "ROLE_ADMIN");
$router->get("usuarios/:id/show", "BackController", "showUsuario",
    ["id" => "number"], "usuarios_show");
$router->get("usuarios/:id/delete", "UsuarioController", "deleteUsuario", ["id" => "number"],"usuarios_delete", "ROLE_ADMIN");
$router->post("usuarios/delete", "UsuarioController", "destroyUsuario", [], "usuarios_destroy", "ROLE_ADMIN");


/* BackOffice Reservas routes */

$router->get("back-reservas", "RegistraController", "index", [], "registra_index", "ROLE_ADMIN");

$router->post("registra", "BackController", "filter", [], "reservas_filter", "ROLE_ADMIN");
$router->get("registra/create", "BackController", "createRegistra", [], "reservas_create", "ROLE_ADMIN");
$router->post("registra/create", "BackController", "storeRegistra", [], "reservas_store", "ROLE_ADMIN");
$router->get("movies/:id/edit", "MovieController", "edit", ["id" => "number"]);
$router->post("movies/:id/edit", "MovieController", "edit", ["id" => "number"]);
$router->get("registra/:id/show", "BackController", "show",
    ["id" => "number"], "usuarios_show");
$router->get("registra/:id/delete", "RegistraController", "deleteRegistra", ["id" => "number"],"reservas_delete", "ROLE_ADMIN");
$router->post("registra/delete", "RegistraController", "destroyRegistra", [], "reservas_destroy", "ROLE_ADMIN");
