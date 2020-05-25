<?php
$servidor="localhost";
$usuario="root";
$clave="";
$baseDeDatos="formulario";

$enlace= mysql_connect($servidor,$usuario,$clave,$baseDeDatos);

if(!$enlace){
    echo"error en el servidor";
}
?>

<html>
    <head>
        <title>crear usuario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="estilos2.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
         <h1>CINE LA MIRADA</h1>
        <nav>     
        <ul class="menuSuperior">
            <li><a href="index.html">inicio</a></li>
            <li><a href="usuario.php">Crear usuario</a></li>
            <li><a href="funcion.html">Funcion</a></li>
           
            <li><a href="calendario.html">calendario</a></li>             
        </ul>
            </nav>
         
         <p>Crear usuario</p>
         <section class="form-register">
            <h4>Formulario de Registro</h4>
             <input class ="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese su nombre"> 
              <input class ="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su apellido"> 
               <input class ="controls" type="email" name="correo" id="correo" placeholder="Ingrese su correo"> 
                <input class ="controls" type="password" name="contraseña" id="nombres" placeholder="Ingrese su contraseña"> 
                <p3>Estoy de acuerdo con <a href="#">Terminos y condiciones</a></p3>
                <input class="botons" type="submit" value="Registrar" name="registrarse">
                <p3><a href="#">¿ya tengo cuenta?</a></p3>
         </section>
    </body>
</html>
<?php
if(isset($_POST['registrarse'])){
$nombres=$_POST["nombres"];
$apellidos=$_POST["apellidos"];
$correo=$_POST["correo"];
$contraseña=$_POST["contraseña"];

$insertarDatos="INSERT INTO datos VALUES('$nombres',
                                       '$apellidos',
                                       '$correo',
                                       '$contraseña')";
$ejecutarInsertar=mysql_master_query($enlace,$insertarDatos);
if(!$ejecutarInsertar){
echo"Error en la linea de sql";
}

}  
?>
