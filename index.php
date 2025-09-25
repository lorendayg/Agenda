<?php 
    include "header.php";
    include "clases/Crud.php";
    $crud = new Crud();
    $contactos = $crud->show_all();
?>
    
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <!-- Título centrado -->
            <h2 class="h2-container"><span class="h2">Lista de contactos</span></h2><br>

            <!-- Tabla -->
            <table class="table table-striped table-bordered shadow">
                <thead class="table-dark text-center">
                    <tr>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Correo</th>
                        <th>Descripción</th>
                        <th>Foto</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($contactos as $contacto): 
                        $id = $contacto["id"];
                    ?>
                    <tr class="align-middle text-center">
                        <td><?php echo $contacto["paterno"] ?></td>
                        <td><?php echo $contacto["materno"] ?></td>
                        <td><?php echo $contacto["nombre"] ?></td>
                        <td><?php echo $contacto["telefono"] ?></td>
                        <td>
                            <a href="mailto:<?php echo $contacto['correo']; ?>" class="text-decoration-none">
                                <?php echo $contacto["correo"] ?>
                            </a>
                        </td>
                        <td><?php echo $contacto["descripcion"] ?></td>
                        <td>
                            <img src="<?php echo "public/upload/" . $contacto["foto"]; ?>" 
                                 alt="foto" class="img-thumbnail" width="80">
                        </td>
                        <td>
                            <a class="btn btn-warning btn-lgcd" href="edit.php?id=<?php echo $id; ?>">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                        </td>
                        <td>
                            <!-- Botón que abre el modal -->
                            <button class="btn btn-danger btn-lg"
                                    data-bs-toggle="modal" 
                                    data-bs-target="#modalEliminar<?php echo $id; ?>">
                                <i class="bi bi-trash3"></i>
                            </button>
                        </td>
                    </tr>

                    <!-- Modal de confirmación -->
                    <div class="modal fade" id="modalEliminar<?php echo $id; ?>" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-danger text-white">
                                    <h5 class="modal-title">Confirmar eliminación</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <p>¿Seguro que deseas eliminar a <b><?php echo $contacto["nombre"]; ?></b>?</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <a href="servidor/destroy.php?id=<?php echo $id; ?>" class="btn btn-danger">
                                        Sí, eliminar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <!-- Botón de crear contacto centrado -->
            <div class="text-center mt-4">
                <a href="create.php" class="btn btn-success">
                    <i class="bi bi-person-add"></i> Crear nuevo contacto
                </a>
            </div>
        </div>
    </div>
</div>

<?php 
    include "footer.php";
?>
