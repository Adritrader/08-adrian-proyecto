<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles-back.css">
    <link rel="stylesheet" href="../css/calendar.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/table.css">
    <link rel="stylesheet" href="../css/template-grid3.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
                            <a href="back-reservas.html"><img class="logo" src="../images/design/logo-bueno.png"
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
                <a href="/back-index"><i class="far fa-calendar-alt"></i>HOME</a>
                <a href="/back-reservas"><i class="far fa-calendar-alt"></i>CALENDARIO RESERVAS</a>
                <a href="/back-galeria"><i class="far fa-images"></i>GALERIA</a>
                <a href="/back-blog"><i class="fab fa-blogger-b"></i>BLOG</a>
                <a href="/back-productos" class="active"><i class="fas fa-store-alt"></i>TIENDA</a>
                <a href="/back-pedidos"><i class="far fa-newspaper"></i>PEDIDOS</a>
                <a href="/back-usuarios"><i class="fas fa-border-all"></i>USUARIOS</a>
            </div>
        </div>
    </div>


    <?=$content?>

</main>

</body>

</html>