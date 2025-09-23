<?php
    include "header.php";
    include "clases/Crud.php";
    $crud = new Crud();
    $contacto = $crud->show($_GET["id"]);
?>

<form method="POST" action="servidor/update.php" enctype="multipart/form-data">
    <div class="container mt-4">
        <div class="d-flex justify-content-center align-items-center vh-100">
            <div class="glass-card p-4" style="width: 100%; max-width: 400px;"">
                <div id="ingresar" class="glass-card">

                <input type="text" name="id" value="<?php echo $contacto['id']; ?>" hidden>
                
                    <center><h2>Actualizar Contacto</h2></center> 
                        <br>
                            <label for="paterno">Paterno</label>
                            <input type="text" name="paterno" class="form-control" id="paterno" value="<?php echo $contacto['paterno']; ?>">
                        <br>
                            <label for="materno">Materno</label>
                            <input type="text" name="materno" class="form-control" id="materno" value="<?php echo $contacto['materno']; ?>">
                        <br>
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" class="form-control" id="nombre" value="<?php echo $contacto['nombre']; ?>">
                        <br>
                            <label for="telefono">Telefono</label>
                            <input type="text" name="telefono" class="form-control" id="telefono" value="<?php echo $contacto['telefono']; ?>">                        
                        <br>
                            <label for="correo">Correo</label>
                            <input type="text" name="correo" class="form-control" id="correo" value="<?php echo $contacto['correo']; ?>">
                        <br>
                            <label for="descripcion">Descripcion</label>
                            <input type="text" name="descripcion" class="form-control" id="descripcion" value="<?php echo $contacto['descripcion']; ?>">
                        <br>
                            <label for="">Agrega una foto</label>
                            <input type="file" name="foto" class="form-control" id="foto">
                        
                            <br>
                            <center>
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                                <a href="index.php" class="btn btn-danger">Cancelar</a>
                            </center>

                        
                    
                </div>
            </div>
        </div> 
    </div>
</form>
 