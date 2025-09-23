<?php
    include "header.php";
?>
<!-- si nosotros no agragamos el multipart/form-data al formulario es imposible mandar archivos -->
<form method="POST" action="servidor/store.php" enctype="multipart/form-data">
    <div class="container mt-4">
        <div class="d-flex justify-content-center align-items-center vh-100">
            <div class="glass-card p-4" style="width: 100%; max-width: 400px;"">
                <div id="ingresar" class="glass-card">

                    <center><h2>Agregar Contacto</h2></center> 
                        <br>
                            <label for="paterno">Paterno</label>
                            <input type="text" name="paterno" class="form-control" id="paterno">
                        <br>
                            <label for="materno">Materno</label>
                            <input type="text" name="materno" class="form-control" id="materno">
                        <br>
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" class="form-control" id="nombre">
                        <br>
                            <label for="telefono">Telefono</label>
                            <input type="text" name="telefono" class="form-control" id="telefono">                        
                        <br>
                            <label for="correo">Correo</label>
                            <input type="text" name="correo" class="form-control" id="correo">
                        <br>
                            <label for="descripcion">Descripcion</label>
                            <input type="text" name="descripcion" class="form-control" id="descripcion">
                        <br>
                            <label for="">Agrega una foto</label>
                            <input type="file" name="foto" class="form-control" id="foto">
                        
                            <br>
                            <center>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                                <a href="index.php" class="btn btn-danger">Cancelar</a>
                            </center>

                        
                    
                </div>
            </div>
        </div> 
    </div>
</form>
<!-- <h1>Crear nuevo contacto</h1>
<form action="" method="post">
    <label for="paterno">Apellido paterno</label>
    <input type="text" name="paterno" id="paterno">

    <label for="materno">Apellido materno</label>
    <input type="text" name="materno" id="materno">

    <label for="materno">Nombre</label>
    <input type="text" name="materno" id="materno">

    <label for="telefono">Telefono</label>
    <input type="text" name="telefono" id="telefono">

    <label for="Correo">Correo</label>
    <input type="text" name="Correo" id="Correo">

    <label for="Descripcion">Descripcion</label>
    <input type="text" name="Descripcion" id="Descripcion">

    <label for="">Agrega una foto</label>
    <input type="file" name="foto" id="foto">
    
    <button>Enviar</button>

</form> -->