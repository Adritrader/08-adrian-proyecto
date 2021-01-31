<!-- Load an icon library to show a hamburger menu (bars) on small screens -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/public/css/perfil.css">
<script>

    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }

</script>

<div class="topnav">
    <a href="#datospersonales" class="active">Datos Personales</a>
    <a href="#reservas">Reservas</a>
    <a href="#pedidos">Pedidos</a>
    <a href="#pedidos">Borrar Cuenta</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>

<form  id="datospersonales"class="form-style-3" action="" method="post" enctype="multipart/form-data" novalidate>
    <fieldset>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input id="nombre" class="form-control" type="text" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos:</label>
            <input id="apellidos" type="text" name="apellidos" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="telefono">Telefono:</label>
            <input id="telefono" name="telefono" type="text" class="form-control rounded-0" rows="4">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input id="email" class="form-control" type="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="username">Username:</label>
            <input id="username" class="form-control" type="text" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input id="password" class="form-control" type="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="repitePassword">Repite Password:</label>
            <input id="repitePassword" class="form-control" type="password" name="repitePassword" required>
        </div>
        <div class="botones-form">
            <div class="form-group text-right">
                <button type="submit" class="button-two">Guardar</button>
            </div>
        </div>
    </fieldset>
</form>