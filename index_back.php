<?php include './Complementos/header.php' ?>

<?php include "./Conexion/Conexion2.php" ?>

<div class="container">
        <div class="row">
            <div class="table-responsive">
                <table id="tablarequerim" class="table table-striped table-bordered table-condensed" style="width: 100%;">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">ID Caso</th>
                            <th scope="col">SERVICIO</th>
                            <th scope="col">CUENTA / MIN</th>
                            <th scope="col">ESTADO</th>
                            <th scope="col">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php 

                    $query = "SELECT * FROM requerim";
                    $resultado = mysqli_query($conexion, $query);

                    while ($row =mysqli_fetch_array($resultado)){ ?>

                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['producto'] ?></td>
                            <td><?php echo $row['servicio'] ?></td>
                            <td><?php echo $row['estado'] ?></td>
                            <td><a href="gestion_back.php?id=<?php echo $row['id']?>"><i class="bi bi-pencil-square"></i></a></td>

                        </tr>

                    <?php } ?>