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
    <title>GPO CHRISTUS MUGUERZA</title>

</head>
<header>
    <ul class="menu">
        <li><a href="index.php"><img src="imagenes/Christus Muguerza.png" width="120" height="50"></a></li>
        <li><b><a href="index.php">INICIO</a></b></li>
        <li><b><a href="formulario.php">NUEVA CARTA</a></b></li>
        <li>         
            <form action="" method="GET">
                <div>
                    <input type="text" placeholder="Número de Empleado">
                    <button type="submit" >Buscar</button>
                </div>
            </form>
        </li>
    </ul>
</header>
<body>
    <?php
        include ('dbconexion.php');


        if(isset($_GET['buscar'])){
            
            
            $sql_filtro = "SELECT * FROM filtro ";
        }
    ?>
</body>
</html> 