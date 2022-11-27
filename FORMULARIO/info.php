<?php 
    $conexion = mysqli_connect('localhost', 'root','','prueba');
    $usuarios = "SELECT * FROM usuarios";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="estilosformulario.css">
    <title>Información</title>
</head>
<body>
<div class="menu">
  <div class="label">Menu</div>
  <div class="spacer"></div>
  <div class="item" onclick="window.location.href='./info.php'"><span>Home</span></div>
  <div class="item" onclick="window.location.href='./formulario.php'"><span>Registrar Alumnos</span></div>
  <div class="item" onclick="window.location.href='./login.php'"><span>Cerrar Sesión</span></div>
</div>
<section class="home">
            <h5> Registro de Usuarios </h5>
            <h5> Información </h5>
            <div class ="container-table"> 
                <div class ="table_header"> No Cuenta</div>
                <div class ="table_header"> Nombre</div>
                <div class ="table_header"> F Nacimiento</div>
                <?php $resultado= mysqli_query($conexion, $usuarios);
                while($row=mysqli_fetch_assoc($resultado)){?>
                <div class ="table_item"><?php echo $row ["numCuenta"]?></div>
                <div class ="table_item"><?php echo $row ["nombre"]?> </div>
                <div class ="table_item"><?php echo $row ["fec_nacimiento"]?> </div>
                <?php }?>
            </div>
        </section>

</body>
</html>


