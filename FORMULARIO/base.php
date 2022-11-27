<?php
    //CONECTAMOS CON EL SERVIDOR
    $conexion = @mysqli_connect('localhost', 'root','',"prueba");
    mysqli_set_charset($conexion, "utf-8");
    //verificacion la conexion 
    if(!$conexion){
        echo "No se pudo conectar al servidor";
    }else{
        echo "Conectado";
    }
    //recuperar las variables
    $numCuenta=$_POST['nocuenta'];
    $nombre=$_POST['nombre'];
    $ap_paterno=$_POST['appaterno'];
    $ap_materno=$_POST['apmaterno'];
    $fec_nacimiento=$_POST['fecha'];
    $contrasenia=$_POST['pass'];
    //hacemos la sentencia de sql
    $sql= "INSERT INTO usuarios VALUES ('$numCuenta',
                                    '$nombre', '$ap_paterno','$ap_materno',
                                    '$fec_nacimiento', '$contrasenia')";
    //Ejecutamos la sentencia sql
    $ejecutar = mysqli_query($conexion,$sql );
    $fila=mysqli_num_rows($ejecutar);
    //verificacion la ejecucion
    if(!$ejecutar and $fila >0 ){
        echo "Hubo un error";
    }else{
        echo "Datos guardados correctamente<br><a href='login.php'>Volver</a>";
    }
?>
