<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

<?php
           
if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'Registrado.') {
            
?>

<div class="alert alert-success alert dismissible fade show" role= "alert">
  <strong>Registrado!</strong> Registro Completo.
    <button type="button" class="btn clase" data_bs_dismiss ="alert" aria-label="Close"></button>
</div>

<?php
        
}

?>

<?php
           
if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'Error') {
            
?>

<div class="alert alert-danger alert dismissible fade show" role= "alert">
  <strong>Error!</strong> Vuelve a intentar!
    <button type="button" class="btn clase" data_bs_dismiss ="alert" aria-label="Procesar"></button>
</div>

<?php
        
}

?>


<div class="modal fade show" id="miModalRegistroPereiraColmena" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: block; padding-left: 17px;">
  <div class="modal-dialog modal-lg">
    <form action="registro_req.php" id="registro_req.php" method="POST">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Gestion Linea Retencion</h4>
      </div>

<div class="modal-body">
<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
<div class="row">

<div class="col-md-4 col-lg-4 col-xs-4">
  <strong class="control-label">Servicio</strong>
    <div class="form-group has-success">
    <select required="" class="form-control custom-select" name="producto" data-placeholder="Tema" tabindex="1">
        <option value="">Seleccionar...</option>
        <option value="HOGAR">HOGAR</option>
        <option value="MOVIL">MOVIL</option>
    </select>
  </div>
</div>

<div class="col-md-4 col-lg-4 col-xs-4">
  <strong class="control-label">Cuenta / Linea</strong>
    <div class="form-group has-success">
      <input required="" type="number" placeholder="Ingrese Numero Producto" name="servicio" class="form-control">
    </div>
</div>

<div class="col-md-4 col-lg-4 col-xs-4">
  <strong class="control-label">Marcacion</strong>
    <div class="form-group has-success">
      <select required="" class="form-control custom-select" name="marcacion" data-placeholder="Tema" tabindex="1">
        <option value="">Seleccionar...</option>
        <option value="INF-CDI">INF-CDI</option>
        <option value="CAN-1RE">CAN-1RE</option>
        <option value="CAN-1AD">CAN-1AD</option>
        <option value="Retenido-Movil">Retenido Movil</option>       
      </select>
    </div>
</div>

<div class="col-md-4 col-lg-4 col-xs-4">
  <strong class="control-label"># Documento Titular</strong>
    <div class="form-group has-success">
      <input required="" type="number" placeholder="Identificacion" name="identificacion" class="form-control">
    </div>
</div>

<div class="col-md-4 col-lg-4 col-xs-4">
    <strong class="control-label">Nombre Titular</strong>
        <div class="form-group has-success">
            <input required="" type="text" placeholder="Nombre Titular" name="nombre" class="form-control">
        </div>
</div>

<div class="col-md-4 col-lg-4 col-xs-4">
  <strong class="control-label">Estrategia 1</strong>
    <div class="form-group has-success">
      <select required="" class="form-control custom-select" name="estrategia" data-placeholder="Tema" tabindex="1">
          <option value="">Seleccionar...</option>
          <option value="APLICACIÓN DE DESCUENTO">APLICACIÓN DE DESCUENTO</option>
          <option value="CAMBIO DE TARIFA">CAMBIO DE TARIFA</option>
          <option value="OT POR ARREGLOS">OT POR ARREGLOS</option>
          <option value="TRASLADO">TRASLADO</option>
          <option value="VISITA TECNICA">VISITA TECNICA</option>
          <option value="AJUSTES">AJUSTES</option>
          <option value="DESACTIVACION DE SERVCICIO ADICIONAL">DESACTIVACION DE SERVCICIO ADICIONAL</option>
          <option value="CAMBIO DE PLAN (MOVIL)">CAMBIO DE PLAN (MOVIL)</option>
          <option value="CAMBIO DE CICLO (MOVIL)">CAMBIO DE CICLO (MOVIL)</option>
          <option value="APLICACIÓN DE BENEFICIO TC (MOVIL)">APLICACIÓN DE BENEFICIO TC (MOVIL)</option>
          <option value="ACLARACION FACTURA (CONTINUA IGUAL)">ACLARACION FACTURA (CONTINUA IGUAL)</option>
          <option value="INFORMACION DE BENEFICIOS (CONTINUA IGUAL)">INFORMACION DE BENEFICIOS (CONTINUA IGUAL)</option>
          <option value="SOPORTE BASICO (CONTINUA IGUAL)">SOPORTE BASICO (CONTINUA IGUAL)</option>
          <option value="OTROS">OTROS</option>
      </select>
  </div>
</div>

<div class="col-md-4 col-lg-4 col-xs-4">
    <strong class="control-label">Estado Solicitud</strong>
        <div class="form-group has-success">
            <input required="" disabled="" name="estado" class="form-control" value="Abierto">
        </div>
</div>

<div class="col-md-12 col-lg-12 col-xs-12" style="margin-top: 1%">
  <strong class="control-label">Observaciones</strong>
    <textarea required="" placeholder="Observaciones" name="observacion" class="form-control" rows="4" cols="80"></textarea>
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