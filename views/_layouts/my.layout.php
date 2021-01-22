<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/template-grid3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="js/app.js"></script>
    <title>Home | Juan Bisquert Peluqueros</title>
</head>

<body onload="docReady()">
<header>
    <audio autoplay loop id="audio" src="audio/cancion.mp3"></audio>
    <div class="container-fluid headerContainer">
        <div class="row fila-header">
            <div class="col-3 header-logo">
                <a href="home.html"><img class="logo" src="/images/design/logo-bueno.png" alt="logo"></a>
            </div>

            <div class="col-5 horario">

                <div class="row fila-banner">

                    <div class="col-3 reloj">
                        <div class="row fila-reloj">

                            <i class="fa fa-clock"></i>
                            <p>Lunes a Viernes</p>
                            <p>09:30 - 13:00</p>
                            <p>16:30 - 20:00</p>
                            <p>Sábados cerrados a mediodía</p>
                        </div>
                    </div>

                    <div class="col-3 reloj">
                        <div class="row fila-reloj">
                            <i class="fas fa-store-alt"></i>
                            <p>Calle Sagunto Nº 10</p>
                            <p>03700</p>
                            <p>Dènia</p>
                            <p>Alicante</p>
                        </div>
                    </div>
                    <div class="col-3 reloj">
                        <div class="row fila-reloj">
                            <i class="fas fa-phone"></i>
                            <p>Móvil: 645 45 45 11</p>
                            <p>Solo whatsapp</p>
                            <p>Fijo: 96 455 78 74</p>
                            <p>@juanbisquert</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1 col-carrito">

                <button onclick="document.getElementById('id01').style.display='block'"
                        class="button-two">Login</button>
                <div id="id01" class="modal">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close"
                              title="Close Modal">&times;</span>

                    <!-- Modal Content -->
                    <form class="modal-content animate" action="/action_page.php">
                        <div class="imgcontainer">
                            <img src="/images/design/avatar.jpeg" alt="Avatar" class="avatar">
                        </div>

                        <div class="container2">
                            <label for="uname"><b>Usuario</b></label>
                            <input type="text" placeholder="Enter Username" name="uname" required>

                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="psw" required>
                            <input type="checkbox" checked="checked" id="remember"> Recuerdame
                            <span>¿Se ha olvidado su <a href="#">password?</a></span>
                        </div>


                        <div class="container2" style="background-color:#f1f1f1">
                            <button type="submit" class="loginbtn">Login</button>
                            <button type="button" onclick="document.getElementById('id01').style.display='none'"
                                    class="cancelbtn">Cancelar</button>
                        </div>

                    </form>
                </div>

                <a href="#" class="button-two">Sign Up</a>

                <div class="row fila-carrito">
                    <div class="col-12">
                        <i class="fas fa-shopping-cart"><span>0,00&nbsp;€</span></i>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid container-barra-nav">
            <div class="row barra-nav">
                <div class="col-11 barra-nav-elementos">
                    <a href="home.html" class="active">Home</a>
                    <a href="servicios.html">Servicios</a>
                    <a href="quienes-somos.html">Quiénes Somos</a>
                    <a href="galeria.html">Galería</a>
                    <a href="blog.html">Blog</a>
                    <a href="contacto.html">Contacto</a>
                    <a href="tienda.html">Tienda</a>
                </div>
            </div>
        </div>

        <!-- Ruta -->

        <div class="container-fluid">
            <div class="row fila-ruta">
                <div class="col-5 col-ruta">
                    <div><span>Estas aquí: </span><a href="home.html" class="active">Home</a></div>
                </div>
            </div>
        </div>
    </div>


</header>

<?=$content?>
<footer>
    <div class="container-fluid">
        <div class="row fila-footer">
            <div class="col-2 col-footer-enlaces enlaces-first">
                <a href="home.html">Home</a>
                <a href="servicios.html">Servicios</a>
                <a href="quienes-somos.html">Quiénes Somos</a>
                <a href="galeria.html">Galería</a>
            </div>
            <div class="col-2 col-footer-enlaces">
                <a href="reserva-cita.html">Reservar Cita</a>
                <a href="blog.html">Blog</a>
                <a href="contacto.html">Contacto</a>
                <a href="tienda.html">Tienda</a>

            </div>
            <div class="col-3 mapa">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d194.2393834628329!2d0.10468218085136947!3d38.83635088764253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x129e1b237dbfec7f%3A0x4882a2521c7a073d!2sCarrer%20de%20Sagunt%2C%2010%2C%2003700%20D%C3%A9nia%2C%20Alacant!5e0!3m2!1ses!2ses!4v1608655685043!5m2!1ses!2ses"
                        width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <p>C/ Sagunto Bajo 10</p>
                <p>Denia (Alicante)</p>
                <p>96 654 55 44</p>

            </div>
        </div>
        <div class="row fila-iconos-rrss">
            <div class="col-3 col-iconos-rrss">
                <a href="#"><img src="/images/design/facebook-logo.svg" alt="facebook"></a>
                <a href="#"><img src="/images/design/instagram-logo.svg" alt="instagram"></a>
                <a href="#"><img src="/images/design/whatsapp.svg" alt="whatsapp"></a>
            </div>
        </div>
        <div class="row fila-footer-politicas">
            <div class="col-3 col-footer-politicas">
                <span>© 2020 VaporDev Web Designs</span>
            </div>
            <div class="col-8 col-footer-avisos-legales">
                <a href="sitemap.html">Sitemap</a>
                <a href="#">Política</a>
                <a href="#">Cookies</a>
                <a href="#">Aviso Legal</a>
                <a href="#">Tienda</a>
            </div>
        </div>
    </div>
</footer>
</body>

</html>