<!-- Load an icon library to show a hamburger menu (bars) on small screens -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/public/css/perfil.css">


<div class="container-fluid">
    <div class="row d-flex">
        <div class="col-10">
            <h1>Perfil de usuario</h1>
        </div>
        <div class="col-2 py-2"><button class="btn btn-primary"><i class="fa fa-trash mr-1"></i>Borrar Cuenta</button></div>
    </div>
    <div class="row py-2 px-2 mx-2">
        <div class="card col-lg-3 col-md-6 py-2">
            <img class="rounded w-100" src="/images/design/productos/ghd-peine-rizado.jpg" alt="avatar">
        </div>

        <div class="card col-lg-9 col-md-6 py-2">
            <h2><strong>Nombre:</strong> {{ movie.releaseDate | date("Y/m/d")}}</h2>
            <h2><strong>Apellidos:</strong> {{ movie.releaseDate | date("Y/m/d")}}</h2>
            <h2 class="card-title"><strong>Username:</strong> {{ movie.title }}</h2>
            <h2 class="text-muted mt-2"><strong>Email:</strong> {{ movie.tagline }}</h2>
            <h2><strong>Teléfono:</strong> {{ movie.releaseDate | date("Y/m/d")}}</h2>
            <h2><strong>Direccion:</strong> {{ movie.releaseDate | date("Y/m/d")}}</h2>
        </div>
        <div class="col-12">
            <button class="btn bg-danger"><i class="fa fa-edit mr-1"></i>Editar</button>
        </div>
    </div>
</div>