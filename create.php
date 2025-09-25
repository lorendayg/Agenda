<?php
    include "header.php";
?>

<div class="container mt-5">
    <div class="row justify-content-center"> <!-- centra horizontalmente -->
        <div class="col-md-6"> <!-- ancho adaptable -->
            <div class="card p-4 shadow" style="width: 100%;"> <!-- card ocupa toda la columna -->
                <h1 class="h1 text-center mb-4">Crear nuevo contacto</h1>
                
                <!-- si no agregamos enctype="multipart/form-data" no se pueden mandar archivos -->
                <form method="POST" action="servidor/store.php" enctype="multipart/form-data">
                    
                    <label for="paterno">Apellido paterno</label>
                    <input type="text" name="paterno" id="paterno" class="form-control mb-3">

                    <label for="materno">Apellido Materno</label>
                    <input type="text" name="materno" id="materno" class="form-control mb-3">

                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control mb-3">

                    <label for="telefono">Teléfono</label>
                    <input type="text" name="telefono" id="telefono" class="form-control mb-3">

                    <label for="correo">Correo</label>
                    <input type="text" name="correo" id="correo" class="form-control mb-3">

                    <label for="descripcion">Descripción</label>
                    <input type="text" name="descripcion" id="descripcion" class="form-control mb-3">

                    <label for="foto">Agrega una foto</label>
                    <input type="file" name="foto" id="foto" class="form-control mb-4">
                    
                    <!-- Botones centrados -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-success mt-2">
                            <i class="bi bi-send-check"></i> Guardar
                        </button>
                        <a href="index.php" class="btn btn-secondary mt-2">
                            <i class="bi bi-x-circle"></i> Cancelar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php 
    include "footer.php";
?>
