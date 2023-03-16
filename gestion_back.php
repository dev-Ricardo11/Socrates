|   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>


<?php include './Complementos/header.php'?>

<?php

include_once './Conexion/Conexion2.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM requerim WHERE id = $id";
    $result = mysqli_query($conexion, $query);
    if (mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $caso = $row['id'];
        $servicio = $row['producto'];
        $cuenta_min = $row['servicio'];
        $marca = $row['marcacion'];
        $idenTitu = $row['identitular'];
        $nombre = $row['nomtitular'];
        $estrategia = $row['estrategia'];
        $observacion = $row['observaciones'];
        $estado = $row['estado'];
        $obserBack = $row['observacionBack'];
        
        
    }
}

if (isset($_POST['Enviar'])) {
  $id = $_GET['id'];
  $status = $_POST['estado'];
  $ob = $_POST['observacionBack'];

  $query = "UPDATE requerim SET estado = '$status', observacionBack = '$ob' WHERE id = $id";
  mysqli_query($conexion,$query);

  header("location: index_back.php");
}
?>


<div class="modal fade show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: block; padding-left: 17px;">
  <div class="modal-dialog modal-lg">
    <form action="gestion_back.php?id=<?php echo $_GET['id']; ?>" method="POST">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Gestion BackOffice Retencion</h4>
      </div>

<div class="modal-body">
<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
<div class="row">

<div class="col-md-4 col-lg-4 col-xs-4">
  <strong class="control-label">Id Caso</strong>
    <div class="form-group has-success">
    <input type="text" disabled="" value="<?php echo $caso; ?>" class="form-control">
    </div>
</div>

<div class="col-md-4 col-lg-4 col-xs-4">
  <strong class="control-label">Servicio</strong>
    <div class="form-group has-success">
        <input type="text" disabled="" value="<?php echo $servicio; ?>" class="form-control">
    </div>
</div>

<div class="col-md-4 col-lg-4 col-xs-4">
  <strong class="control-label">Cuenta / Min</strong>
    <div class="form-group has-success">
        <input type="text" disabled="" value="<?php echo $cuenta_min; ?>" class="form-control">
    </div>
</div>

<div class="col-md-4 col-lg-4 col-xs-4">
  <strong class="control-label">Marcacion</strong>
    <div class="form-group has-success">
        <input type="text" disabled="" value="<?php echo $marca; ?>" class="form-control">
    </div>
</div>

<div class="col-md-4 col-lg-4 col-xs-4">
  <strong class="control-label"># Documento Titular</strong>
    <div class="form-group has-success">
        <input type="text" disabled="" value="<?php echo $idenTitu; ?>" class="form-control">
    </div>
</div>

<div class="col-md-4 col-lg-4 col-xs-4">
    <strong class="control-label">Nombre Titular</strong>
        <div class="form-group has-success">
            <input type="text" disabled="" value="<?php echo $nombre; ?>" class="form-control">
        </div>
</div>

<div class="col-md-4 col-lg-4 col-xs-4">
    <strong class="control-label">Estrategia</strong>
        <div class="form-group has-success">
            <input type="text" disabled="" value="<?php echo $estrategia; ?>" class="form-control">
        </div>
</div>

<div class="col-md-4 col-lg-4 col-xs-4">
    <strong class="control-label">Estado Solicitud</strong>
        <div class="form-group has-success">
        <input required="" name="estado" class="form-control" value="">
        </div>
</div>

<div class="col-md-12 col-lg-12 col-xs-12" style="margin-top: 1%">
  <strong class="control-label">Observaciones Agente</strong>
  <input type="text" disabled="" value="<?php echo $observacion; ?>" class="form-control">
</div>

<div class="col-md-12 col-lg-12 col-xs-12" style="margin-top: 1%">
  <strong class="control-label">Observaciones BackOffice</strong>
    <textarea required="" placeholder="Observaciones" name="observacionBack" class="form-control" rows="4" cols="80"></textarea>
</div>

<div class="col-lg-4 offset-4 col-md-4" style="margin-top: 3%">
<input type="hidden" name="oculto" value="1"> 
  <button type="submit" name="Enviar" value="Guardar" class="btn btn-rounded btn-block btn-info" aria-hidden="true">Guardar</button>
</div>

            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>