<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles-back.css">
    <link rel="stylesheet" href="/css/calendar.css">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/template-grid3.css">
    <link rel="stylesheet" href="/css/formulario-reserva.css">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.13/css/all.css">
    <!--<script src="../js/calendar.js"></script>-->
    <title>BackOffice | Joan Bisquert Peluqueros</title>
</head>

<body>
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-header">
                <div class="container-fluid headerContainer">
                    <div class="row fila-header">
                        <div class="col-2 header-logo">
                            <a href="/back-index"><img class="logo" src="/images/design/logo-bueno.png"
                                                              alt="logo"></a>
                        </div>
                        <div class="col-1 navbar iconos-header">
                            <a href="#"><i class="far fa-envelope"></i></a>
                            <a href="#"><i class="far fa-bell"></i></a>

                        </div>

                        <div class="col-6">


                        </div>
                        <div class="col-3">
                            <div class="topnav">

                                <input type="text" placeholder="Buscar..">
                                <a href="#"><i class="fas fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<main>
    <div class="row navbar-vertical">
        <div class="col-12 col-navbar">
            <div class="sidebar">
                <?php require_once '../inc/functions.php';?>
                <a class="<?=isActiveOption(trim($_SERVER['REQUEST_URI'],  "/"), "back-index");?>" href="/back-index"><i class="far fa-calendar-alt"></i>HOME</a>
                <a class="<?=isActiveOption(trim($_SERVER['REQUEST_URI'],  "/"), "back-reservas");?>" href="/back-reservas"><i class="far fa-calendar-alt"></i>CALENDARIO RESERVAS</a>
                <a class="<?=isActiveOption(trim($_SERVER['REQUEST_URI'],  "/"), "back-galeria");?>" href="/back-galeria"><i class="far fa-images"></i>GALERIA</a>
                <a class="<?=isActiveOption(trim($_SERVER['REQUEST_URI'],  "/"), "back-blog");?>"href="/back-blog"><i class="fab fa-blogger-b"></i>BLOG</a>
                <a class="<?=isActiveOption(trim($_SERVER['REQUEST_URI'],  "/"), "back-productos");?>"href="/back-productos"><i class="fas fa-store-alt"></i>PRODUCTOS</a>
                <a class="<?=isActiveOption(trim($_SERVER['REQUEST_URI'],  "/"), "back-pedidos");?>"href="/back-pedidos"><i class="far fa-newspaper"></i>PEDIDOS</a>
                <a class="<?=isActiveOption(trim($_SERVER['REQUEST_URI'],  "/"), "back-usuarios");?>"href="/back-usuarios"><i class="fas fa-user"></i>USUARIOS</a>
            </div>
        </div>
    </div>

    <div class="row">
            <?=$content?>

    </div>

</main>

</body>

</html>