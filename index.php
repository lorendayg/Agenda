<?php
    include "header.php";
    include "clases/Crud.php";
    $crud = new Crud();
    $contactos = $crud->show_all();
?>


<!-- <div class="container mt-4">
    <div class="row justify-content-around">
        <div class="row text-center">
            <div class="col-4">
                    <h1>Lista de contactos</h1>

</body>
</html> -->


<body>
    <div class="container-custom mt-4">
        <div class="page-header animated">
            <h1 class="page-title">
                <i class="fas fa-address-book"></i>
                Lista de Contactos
            </h1>
<!--             <p class="page-subtitle">Gestiona y visualiza todos tus contactos guardados</p> -->
        </div>

<!--         <div class="contacts-card animated">
            <div class="toolbar">
                <div class="search-box">
                    <i class="fas fa-search search-icon"></i>
                    <input type="text" class="search-input" placeholder="Buscar contactos..." id="searchInput">
                </div>
                <a href="add_contact.php" class="btn-add">
                    <i class="fas fa-plus"></i>
                    Agregar Contacto
                </a>
            </div> -->
            <p>
                <a href="create.php" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Crear nuevo contacto</a>
            </p>
            <table class="contacts-table text-center" id="contactsTable">
                <thead>
                    <tr>
                        <th><i class="fas fa-image"></i> Foto</th>
                        <th><i class="fas fa-user"></i> Nombre</th>
                        <th><i class="fas fa-user-tag"></i> Apellido Paterno</th>
                        <th><i class="fas fa-user-tag"></i> Apellido Materno</th>
                        <th><i class="fas fa-phone"></i> Teléfono</th>
                        <th><i class="fas fa-envelope"></i> Correo</th>
                        <th><i class="fas fa-comment"></i> Descripción</th>
                        <th><i class="fas fa-cogs"></i> Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach($contactos as $contacto):
                            $id = $contacto["id"];
                    ?>

                <tr>
                    <td class="text-center">
                        <img src="<?php echo "public/upload/" .$contacto["foto"] ?>" alt="" width="50%" class="contact-photo">
                    </td>
                    <td class="contact-name"><?php echo $contacto["nombre"] ?></td>
                    <td><?php echo $contacto["paterno"] ?></td>
                    <td><?php echo $contacto["materno"] ?></td>
                    <td><span class="contact-phone"><?php echo $contacto["telefono"] ?></span></td>
                    <td><a href="mailto:juan.perez@email.com" class="contact-email"><?php echo $contacto["correo"] ?></a></td>
                    <td><span class="contact-description"><?php echo $contacto["descripcion"] ?></span></td>

                    <td>
                        <a href="servidor/destroy.php?id=<?php echo $id; ?>" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este registro?');"><i class="fa-solid fa-trash"></i></a>
                        <a href="edit.php?id=<?php echo $id; ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                    </td>
                </tr>

                <?php endforeach; ?>
                    <!-- este es un ejemplo de como deberia de quedar -->
<!--                     <tr>
                        <td>
                            <img src="https://via.placeholder.com/50/4f46e5/ffffff?text=JD" alt="Juan Pérez" class="contact-photo">
                        </td>
                        <td class="contact-name">Juan</td>
                        <td>Pérez</td>
                        <td>González</td>
                        <td><span class="contact-phone">+52 555 123 4567</span></td>
                        <td><a href="mailto:juan.perez@email.com" class="contact-email">juan.perez@email.com</a></td>
                        <td><span class="contact-description">Cliente importante de la empresa</span></td>
                        <td class="actions-cell">
                            <a href="edit_contact.php?id=1" class="btn-action btn-edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <button class="btn-action btn-delete" onclick="deleteContact(1)">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr> -->
                
                </tbody>
            </table>

<?php
 include "footer.php";
?>