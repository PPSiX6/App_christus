<?php

        include("dbconexion.php");

        $sql_tabequi = "SELECT * FROM dat_equipo";
        $sql_tabsoft = "SELECT * FROM sfware";
        $sql_tabfecha = "SELECT * FROM fechas";
        $sql_tabresp = "SELECT * FROM datos_responsivos";
        $sql_tabobs = "SELECT * FROM obser";

        $resultado_equi = mysqli_query($conexion, $sql_tabequi);
        $resultado_sft = mysqli_query($conexion, $sql_tabsoft);
        $resultado_fecha = mysqli_query($conexion, $sql_tabfecha);
        $resultado_resp = mysqli_query($conexion, $sql_tabresp);
        $resultado_obs = mysqli_query($conexion, $sql_tabobs);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Christus Muguerza</title>
</head>
<body>
    <div id="todo">
        <div class="container d-flex justify-content-center align-items-center flex-column">
            <img src="imagenes/Christus Muguerza.png" width="120" height="50">
            <div class="col-lg-12">
                <div class="row">
                    <h3><b>RESPONSIVA DE ASIGNACIÓN</b></h3>
                </div>
            </div>
            <br>
            <br>
            <div class="col-md-12">
                <div class="col-md-5">
                    <div class="container">
                        <div class="row">
                
                            <table class="table table-responsive">
                                <caption><b>Datos de Equipos</b></caption>
                                <tr>
                                    <th>N° SERIE - LINEA TELEFONICA</th>
                                    <th>IME</th>
                                    <th>EQUIPO</th>
                                    <th>MODELO</th>
                                    <th>MARCA</th>
                                    <th>UBICACIÓN</th>
                                </tr>
                                <tr>
                                    <?php while($row2 = mysqli_fetch_assoc($resultado_equi)) {?>
                                    <td><?php echo $row2["nserie_linea"]; ?></td>
                                    <td><?php echo $row2["ime"]; ?></td>
                                    <td><?php echo $row2["equipo"]; ?></td>
                                    <td><?php echo $row2["modelo"]; ?></td>
                                    <td><?php echo $row2["marca"]; ?></td>
                                    <td><?php echo $row2["ubi"]; ?></td>
                                    <?php }?>
                                </tr>
                            </table>

                            <table class="table table-responsive">
                                <caption><b>Software Instalado</b></caption>
                                <tr>
                                    <?php while($row3 = mysqli_fetch_assoc($resultado_sft)) {?>
                                    <td><?php echo $row3["software"]; ?></td>
                                    <?php }?>
                                </tr>
                            </table>

                            <br>

                            <table class="table table-responsive">
                                <caption><b>Fechas de Requerimiento</b></caption>
                                <tr>
                                    <?php while($row4 = mysqli_fetch_assoc($resultado_fecha)) {?>
                                    <th><?php echo $row4["fecha_ini"];?></th>
                                    <th> a </th>
                                    <th><?php echo $row4["fecha_fin"];?></th>
                                    <?php }?>
                                </tr>
                            </table>

                            <br>

                            <table class="table table-responsive">
                                <caption><b>Datos responsivas y conformidad</b></caption>
                                <tr>                                    
                                    <th>Número de Empleado</th>
                                    <th>Nombre de Empleado</th>
                                    <th>Departamento Solicitante</th>
                                </tr>
                                <tr>
                                    <?php while($row5 = mysqli_fetch_assoc($resultado_resp)) {?>
                                    <td><?php echo $row5["num_empleado"];?></td>
                                    <td><?php echo $row5["nom_empleado"];?></td>
                                    <td><?php echo $row5["departamento"];?></td>
                                    <?php }?>
                                </tr>
                                <tr>
                                    <th>Número de Colaborador</th>
                                    <th>Nombre de Colaborador</th>
                                    <th>Firma de conformidad y recibo</th>
                                </tr>
                                <tr>
                                    <?php while($row5 = mysqli_fetch_assoc($resultado_resp)) {?>
                                    <td><?php echo $row5["num_colab"];?></td>
                                    <td><?php echo $row5["nom_colab"];?></td>
                                    <?php }?>
                                    <td>____________________________</td>
                                </tr>
                            </table>

                            <div class="col-md-2 d-flex justify-content-center align-items-center flex-column">
                                <caption><b>OBSERVACIONES: </b></caption>                            
                                <br>
                                <?php while($row6 = mysqli_fetch_assoc($resultado_obs)) {?>
                                <p><?php echo $row6["obs"];?></p>
                                <?php }?>
                                <br>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <br>
    <div class="col-md-2 d-flex justify-content-center align-items-center flex-column">
        <tr>
            <th><button class="btn btn-secondary hidden-print" onclick="goBack()">Volver</button></th>
            <th><button class="btn btn-primary hidden-print" onclick="printPage()">Imprimir</button></th>
        </tr>
    </div>

    <script>
        function printPage() {
            var printContents = document.getElementById("todo").innerHTML;
            var originalContents = document.body.innerHTML;
            var printElement = document.createElement("div");
            printElement.innerHTML = printContents;
            document.body.innerHTML = printElement.innerHTML;
            window.print();
            document.body.innerHTML = originalContents;
        }

        function goBack() {
            window.history.back();
        }
    </script>

    <style>
        @media print {
            .hidden-print {
                display: none;
            }
        }
    </style>

</body>
<footer>

</footer>
</html>