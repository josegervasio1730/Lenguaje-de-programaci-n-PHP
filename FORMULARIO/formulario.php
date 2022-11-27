<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, shrink-to-feet=no">
    <link rel="stylesheet" href="estilosformulario.css">
    <title>Document</title>
</head>
<header>
<div class="menu">
  <div class="label">Menu</div>
  <div class="spacer"></div>
  <div class="item" onclick="window.location.href='./info.php'"><span>Home</span></div>
  <div class="item" onclick="window.location.href='./formulario.php'"><span>Registrar Alumnos</span></div>
  <div class="item" onclick="window.location.href='./login.php'"><span>Cerrar Sesión</span></div>
</header>
<body>


    <div class="container">
        <form action="base.php" method="post">
            <h3>Registrarte</h3>
            <div>
              <label for="No_cuenta">Numero de Cuenta:  </label>
              <input name="nocuenta" class="form-control" type="text" id="No_cuenta" placeholder="Numero de cuenta">
              <p></p>
            </div>

            <div>
              <label for="nombre">Nombre: </label>
              <input name="nombre" class="form-control" type="text" id="nombre" placeholder="Nombre">
              
            </div>

            <div>
              <label for="ap_paterno">Primer Apellido</label>
              <input name="appaterno" class="form-control" type="text" id="ap_paterno" placeholder="Apellido Paterno">
            </div>

            <div>
              <label for="ap_materno">Segundo Apellido</label>
              <input name="apmaterno"  class="form-control" type="text" id="ap_materno" placeholder="Apellido Materno">
            </div>
            <div>
              <label>Genero</label> <br>
              <input type="radio" name="sexo" value="H">H (Hombre)<br>

              <input type="radio" name="sexo" value="M">M (Mujer)<br>

              <input type="radio" name="sexo" value="O">O (Otro)<br>
</div>

            <div>
            <label for="start">Fecha de Nacimiento</label>

            <input name="fecha" type="date" id="start" name="trip-start"
                  min="1900-01-01" max="2021-12-31">
            </div>

            <div>
             <label for="contrasenia">Contraseña</label>
              <input name="pass" class="form-control" type="password" id="contrasenia" placeholder="Password">
            </div>

            <div>
                <input class="button" type="submit" value="Registrar">
            </div>
            </div>
        </form>
    </div>
 
</body>
</html>
