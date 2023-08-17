<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="estilos.css">
    <title>CARTA RESPONSIVA</title>

    <ul class="menu">
        <li><a href="index.php"><img src="imagenes/Christus Muguerza.png" width="120" height="50"></a></li>
        <li><b><a href="index.php">INICIO</a></b></li>
        <li><b><a href="formulario.php">NUEVA CARTA</a></b></li>
    </ul>
</head>
<body>
    <br>
    <br>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="formulario.php" method="POST">
                    <style>
                        .menu{
                            list-style: none;
                            padding: 0;
                            background: rgb(218, 214, 214);
                            width: 100%;
                            max-width: auto;
                            margin: auto;
                            box-sizing: border-box;
                        }

                        .menu li a{
                            text-decoration: none;
                            color: blueviolet;
                            padding: 15px;
                            display: block;
                        }

                        .menu li{
                            display: inline-block;
                            text-align: center;
                        }

                        .menu li a:hover{
                            background: white;
                            color: blueviolet;
                        }

                        .menu ul{
                            text-align: end;
                        }

                        .buscador{
                            text-align: right;
                        }

                        .gray-border {
                            border: 1px solid gray;
                            padding: 10px;
                            border-radius: 5px;
                            background-color: #f2f2f2;

                        }

                        .gray-border input {
                            margin-bottom: 8px;
                            
                            margin-left: 8px;
                        }

                        .buton input{
                            text-align: center;
                            font-size: 18px;
                            background-color: #8A2BE2;
                            width: 150px;
                            height: 40px;
                            display: flex; 
                            align-items: center; 
                            justify-content: center
                        }
                    </style>

                    <div class="gray-border">
                        <div class="form-group">
                            <label>Datos Responsivos y Conformidad</label>
                            <br>
                            <input type="number" id="num_empleado" name="num_empleado" placeholder="Número de Empleado" style="width: 228px;">
                            <input type="text" id="nom_empleado" name="nom_empleado" placeholder="Nombre de Empleado" style="width: 228px;">
                            <input type="text" id="puesto" name="puesto" placeholder="Puesto" style="width: 228px;">
                            <input type="text" id="area" name="area" placeholder="Área" style="width: 228px;">
                            <input type="number" id="num_colab" name="num_colab" placeholder="Número de Colaborador" style="width: 228px;">
                            <input type="text" id="nom_colab" name="nom_colab" placeholder="Nombre de Colaborador" style="width: 228px;">
                            <input type="text" id="puesto_co" name="puesto_co" placeholder="Puesto" style="width: 228px;">
                            <input type="text" id="area_co" name="area_co" placeholder="Área" style="width: 228px;">
                            <br>
                            <br>
                        </div>
                                  
                        <div class="form-group">
                            <label>Fechas de Requerimiento</label>
                            <br>
                            <label>Fecha de Alta</label>
                            <input type="date" id="fecha_alt" name="fecha_alt" style="width: 120px;">
                            <br>
                            <br>
                        </div>
                    
                    

                        <div class="form-group">
                            <label>Software Instalado: </label>
                            <br>
                            <textarea class="form-control" name="soft" id="soft" rows="2" placeholder="Linux, Windows, Office..."></textarea>
                            <br>
                            <br>
                        </div>

                        <div class="form-group">
                            <label>Datos del Equipo: </label>
                            <br>
                            <input type="text" id="tipo" name="tipo" placeholder="TIPO" style="width: 228px;"> 
                            <input type="text" id="marca" name="marca" placeholder="MARCA" style="width: 228px;">                            
                            <input type="text" id="modelo" name="modelo" placeholder="MODELO" style="width: 228px;">
                            <input type="text" id="num_serie" name="num_serie" placeholder="N° SERIE" style="width: 228px;">
                            <input type="text" id="num_tel" name="num_tel" placeholder="NUMERO TELEFONICO" style="width: 228px;"> 
                            <input type="text" id="imei" name="imei" placeholder="IMEI" style="width: 228px;">
                            <input type="text" id="ip_lan" name="ip_lan" placeholder="EQUIPO" style="width: 228px;">                            
                            <input type="text" id="mac_lan" name="mac_lan" placeholder="MODELO" style="width: 228px;">
                            <input type="text" id="ip_wifi" name="ip_wifi" placeholder="MARCA" style="width: 228px;">
                            <input type="text" id="mac_wifi" name="mac_wifi" placeholder="UBICACION" style="width: 228px;">
                            <br>
                            <br>
                            <br> 
                        </div>

                        <div class="form-group">
                            <label for="obs">OBSERVACIONES: </label>
                            <textarea class="form-control" id="obs" name="obs" rows="5" placeholder="Escribe tu mensaje aquí"></textarea>
                        </div>

                        <br>
                        <br>

                        <div class="buton">
                            <font color="white"><input type="submit" name="guardar" value="Guardar"></font>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
    
        
        <div id="resultado">
            <?php
                include ('dbconexion.php');

                if(isset($_POST['guardar'])){

                    //Datos del equipo
                    if(strlen($_POST['tipo']) > 1 && 
                    strlen($_POST['marca']) > 1 &&
                    strlen($_POST['modelo']) > 1 && 
                    strlen($_POST['nserie']) > 1 &&
                    strlen($_POST['num_tel']) > 1 &&
                    strlen($_POST['imei']) > 1 && 
                    strlen($_POST['ubi']) > 1){

                        $tipo = $_POST['tipo'];
                        $marca = $_POST['marca'];
                        $modelo = $_POST['modelo'];
                        $nserie = $_POST['nserie'];
                        $num_tel = $_POST['num_tel'];
                        $ime = $_POST['imei'];
                        $ip_lan = $_POST['ip_lan'];
                        $mac_lan = $_POST['mac_lan'];
                        $ip_wifi = $_POST['ip_wifi'];
                        $mac_wifi = $_POST['mac_wifi'];
                        
                        $sql_equipo = "INSERT INTO dat_equipo(tipo, marca, modelo, nserie, num_tel, imei, ip_lan, mac_lan, ip_wifi, mac_wifi) 
                                        VALUES('$tipo','$marca','$modelo','$nserie','$num_tel','$imei','$ip_lan','$mac_lan','$ip_wifi','$mac_wifi')";

                        if($conexion->query($sql_equipo)  === true){
                        echo 'Datos guardados';
                        }else{
                            die("Error al insertar datos");
                        }
    
                        
                    }

                    //Datos responsivos y conformidad
                    if(strlen($_POST['num_empleado']) > 1 && 
                    strlen($_POST['nom_empleado']) > 1 && 
                    strlen($_POST['area']) > 1 &&
                    strlen($_POST['puesto']) > 1 && 
                    strlen($_POST['num_colab']) > 1 &&
                    strlen($_POST['nom_colab']) > 1 &&
                    strlen($_POST['area_co']) > 1 && 
                    strlen($_POST['puesto_co']) > 1){

                        $num_empleado = $_POST['num_empleado'];
                        $nom_empleado = $_POST['nom_empleado'];
                        $area = $_POST['area'];
                        $puesto = $_POST['puesto'];
                        $num_colab = $_POST['num_colab'];
                        $nom_colab = $_POST['nom_colab'];
                        $area_co = $_POST['area_co'];
                        $puesto_co = $_POST['puesto_co'];
                        
                        $sql_respon = "INSERT INTO datos_responsivos(num_empleado, nom_empleado, area, puesto, num_colab, nom_colab, area_co, puesto_co) 
                                        VALUES('$num_empleado','$nom_empleado','$area','$puesto','$num_colab','$nom_colab','$area_co','$puesto_co')";

                        if($conexion->query($sql_respon)  === true){
                        echo 'Datos guardados';
                        }else{
                            die("Error al insertar datos");
                        }
                    }

                    //Fechas de requerimientos
                    if(strlen($_POST['fecha_alt']) > 1) {

                        $fecha_ini = $_POST['fecha_alt'];

                        $sql_fecha = "INSERT INTO fechas(fecha_alt) VALUES('$fecha_alt')";

                        if($conexion->query($sql_fecha)  === true){
                            echo 'Datos guardados';
                            }else{
                                die("Error al insertar datos");
                            }
                    }

                    //Software instalado
                    if(($_POST['soft']) > 1) {

                        $soft = $_POST['soft'];

                        $sql_soft = "INSERT INTO sfware(software) VALUES('$soft')";

                        if($conexion->query($sql_soft)  === true){
                            echo 'Datos guardados';
                            }else{
                                die("Error al insertar datos");
                            }
                    }

                    //Obsevaciones
                    if(($_POST['obs'])) {

                        $obs = $_POST['obs'];

                        $sql_obs = "INSERT INTO obser(obs) VALUES('$obs')";

                        if($conexion->query($sql_obs)  === true){
                            echo 'Datos guardados';
                            }else{
                                die("Error al insertar datos");
                            }
                    }

                }
                
            ?>
        </div>
    </div>
    
</body>
<footer>
    
</footer>
</html>