<?php include './Complementos/header3.php' ?>

<?php include './Complementos/header.php' ?>

<?php

    include_once "./Conexion/Conexion.php";

?>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class= "card-header">
                    Ingreso de Datos
                </div>
                <form class="p-4" method="POST" action="validar_Ingreso.php">
                    <div class="mb-3">
                      <label class="form-label">Usuario</label>
                      <input type="text" placeholder = "Ingrese Usuario" class="form-control" name="txtUsuario" autofocus required>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Contraseña</label>
                      <input type="text" placeholder = "Ingrese Password" class="form-control" name="txtClave" autofocus required>
                    </div>
                
                    <div class="d-grid">
                        <input type="hidden" name="oculto" value="1">
                        <input type="submit" class="btn btn-primary" value="Ingresar">
                    </div>
                </form>
            </div>
</div>
    </div>
</div>


<?php include './Complementos/footer.php' ?>


