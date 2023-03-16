<?php include './Complementos/header.php' ?>

<?php

if (!isset($_GET['iden'])) {
    header('Location: index_admin.php?mensaje=error');
    exit();
}

    include_once './Conexion/Conexion.php';

    $codigo = $_GET['iden'];

    $sentencia = $bd->prepare("SELECT * FROM usuarios WHERE identificacion = ?;");
    $sentencia->execute([$codigo]);
    $persona = $sentencia->fetch(PDO::FETCH_OBJ);
   
?>

<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-md-4">
        <div class="card">
                <div class="card-header">
                    Edicion de datos:
                </div>
                <form class="p-4" method="POST" action="editarPro_admin.php">

                    <div class="mb-2">
                      <label class="form-label">Identificacion</label>
                      <input type="number" class="form-control" name="txtIdentificacion" autofocus required value="<?php echo $persona-> Identificacion; ?>">

                    <div class="mb-2">
                      <label class="form-label">Nombre</label>
                      <input type="text" class="form-control" name="txtNombre" autofocus required value="<?php echo $persona-> Nombre; ?>">
                    </div>

                    <div class="mb-2">
                      <label class="form-label">Apellidos</label>
                      <input type="text" class="form-control" name="txtApellidos" autofocus required value="<?php echo $persona-> Apellidos; ?>">
                    </div>

                    <div class="mb-2">
                      <label class="form-label">Usuario</label>
                      <input type="text" class="form-control" name="txtUsuario" autofocus required value="<?php echo $persona-> Usuario; ?>">
                    </div>

                    <div class="mb-2">
                      <label class="form-label">Clave</label>
                      <input type="text" class="form-control" name="txtClave" autofocus required value="<?php echo $persona-> Clave; ?>">
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
                        <input type="hidden" name="ident" value="<?php echo $persona-> Identificacion; ?>">
                        <input type="submit" class="btn btn-primary" value="Modificar">
                    </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>

<?php include './Complementos/footer.php' ?>