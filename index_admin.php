

<?php include './Complementos/header.php' ?>


<?php

    include_once "./Conexion/conexion.php";

    $sentencia  = $bd -> query("select * from usuarios");
    $persona = $sentencia->fetchAll(PDO::FETCH_OBJ);
    
?>

<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-7">

        <?php
        
        if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'Falta') {
            
        ?>

        <div class="alert alert-danger alert dismissible fade show" role= "alert">
            <strong>Error!</strong> Debes diligenciar todos los Campos.
            <button type="button" class="btn clase" data_bs_dismiss ="alert" aria-label="Close"></button>
        </div>

        <?php
        
    }

        ?>

<?php
        
        if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'Registrado') {
            
        ?>

        <div class="alert alert-success alert dismissible fade show" role= "alert">
            <strong>Registrado!</strong> Registro Completo.
            <button type="button" class="btn clase" data_bs_dismiss ="alert" aria-label="Close"></button>
        </div>

        <?php
        
    }

        ?>

<?php
           
           if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'error') {
            
        ?>

        <div class="alert alert-danger alert dismissible fade show" role= "alert">
            <strong>Error!</strong> Vuelve a intentar!
            <button type="button" class="btn clase" data_bs_dismiss ="alert" aria-label="Close"></button>
        </div>

        <?php
        
    }

        ?>

<?php
           
           if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'Modificado') {
            
        ?>

        <div class="alert alert-success alert dismissible fade show" role= "alert">
            <strong>Modificado!</strong> Los datos fueron actualizados!
            <button type="button" class="btn clase" data_bs_dismiss ="alert" aria-label="Close"></button>
        </div>

        <?php
        
    }

        ?>

<?php
           
           if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'Eliminado') {
            
        ?>
        
        <div class="alert alert-warning alert dismissible fade show" role= "alert">
            <strong>Eliminado!</strong> Los datos fueron Eliminados!
            <button type="button" class="btn clase" data_bs_dismiss ="alert" aria-label="Close"></button>
        </div>

        <?php
        
    }

        ?>
            
            <div class="card">
                <div class="card-header">
                   PERSONAL EMPRESA 
                   
                </div>
                    <div class="p-4">
                        <div class="table-responsive">
                            <table class="table table-primary">
                                <thead>
                                    <tr>
                                        <th scope="col">Identificacion</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Apellidos</th>
                                        <th scope="col">Usuario</th>
                                        <th scope="col">Clave</th>
                                        <th scope="col">Perfil</th>
                                        <th scope="col" colspan="2">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
                                    foreach ($persona as $dato) {
                                        
                                ?>
                                    <tr class="">
                                        <td scope="row"><?php echo $dato->Identificacion; ?></td>
                                        <td><?php echo $dato->Nombre; ?></td>
                                        <td><?php echo $dato->Apellidos; ?></td>
                                        <td><?php echo $dato->Usuario; ?></td>
                                        <td><?php echo $dato->Clave; ?></td>
                                        <td><?php echo $dato->Perfil; ?></td>
                                        <td ><a class="text-success" href="editar_admin.php?iden=<?php echo $dato->Identificacion;?>"><i class="bi bi-pencil-square"></i><a/td>
                                        <td ><a class="text-danger" href="eliminar_admin.php?iden=<?php echo $dato->Identificacion;?>"><i class="bi bi-person-x"></i><a/td>
                                        
                                    </tr>
                                    <?php

                                    }
                                    
                                    ?>
                        
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Ingreso de Datos:
                </div>
                <form class="p-3" method="POST" action="registro_admin.php">
                    <div class="mb-3">
                      <label class="form-label">Identificacion</label>
                      <input type="number" class="form-control" name="txtIdentificacion" autofocus required>
                    </div>
                    <div class="mb-2">
                      <label class="form-label">Nombre</label>
                      <input type="text" class="form-control" name="txtNombre" autofocus required>
                    </div>
                    <div class="mb-2">
                      <label class="form-label">Apellidos</label>
                      <input type="text" class="form-control" name="txtApellidos" autofocus required>
                    </div>
                    <div class="mb-2">
                      <label class="form-label">Usuario</label>
                      <input type="text" class="form-control" name="txtUsuario" autofocus required>
                    </div>
                    <div class="mb-2">
                      <label class="form-label">Clave</label>
                      <input type="text" class="form-control" name="txtClave" autofocus required>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label type ="txtPerfil">Perfil</label>
                                    <select type ="txtPerfil" class="form-select select-lg" name = "txtPerfil" autofocus required>
                                        <option value="Seleccionar...">Seleccionar...</option>   
                                        <option value="Administrador">Administrador</option>
                                        <option value="Agente">Agente</option>
                                        <option value="BackOffice">BackOffice</option>
                                        <option value="Supervisor">Supervisor</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-grid">
                        <input type="hidden" name="oculto" value="1">
                        <input type="submit" class="btn btn-primary" value="Procesar">
                        
                    </div>
                </form>
            </div>
</div>
    </div>
</div>

<?php include './Complementos/footer.php' ?>



