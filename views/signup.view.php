<div class="container-fluid">
    <div class="row fila-ruta">
        <div class="col-5 col-ruta">
            <div><span>Estas aquí: </span><a href="/">Home</a><span><i
                            class="fa fa-caret-right"></i><a href="signup"
                                                             class="active">Sign Up</a></span><span></span></div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row titulo-formulario">
        <div class="col-6">
            <h1>SignUp</h1>
        </div>


        <div class="row fila-formulario">
            <div class="form-style-3 col-4 col-formulario">
                <form action="/registrarUsuario" method="post">
                    <fieldset>
                        <legend>Datos Personales</legend>
                        <label for="field1"><span>Nombre <span class="required">*</span></span><input type="text"
                                                                                                      class="input-field" name="nombre"></label>
                        <label for="field2"><span>Apellidos <span class="required">*</span></span><input type="text"
                                                                                                        class="input-field" name="apellidos"></label>
                        <label for="field3"><span>Telefono <span class="required">*</span></span><input type="text"
                                                                                                        class="input-field" name="telefono"></label>
                        <label for="field4"><span>Email<span class="required">*</span></span><input type="email"
                                                                                                    class="input-field" name="email"></label>
                        <label for="field4"><span>Password<span class="required">*</span></span><input type="text"
                                                                                                    class="input-field" name="password"></label>
                        <label for="field4"><span>Repite Password<span class="required">*</span></span><input type="text"
                                                                                                    class="input-field" name="repitepassword"></label>
                        <label for="field4"><span>Avatar<span class="required">*</span></span><input type="file"
                                                                                                    class="input-field" name="avatar"></label>

                    </fieldset>
                    <input type="submit" value="Sign Up">
                </form>
            </div>

            <div class="row">

            </div>
        </div>
    </div>
</div>
</div>

