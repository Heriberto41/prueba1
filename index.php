<?php
$hostname_localhost ="if0ck476y7axojpg.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";  //nuestro servidor
$database_localhost ="eu3q05rxqr8smuf5";//Nombre de nuestra base de datos
$username_localhost ="wrnswivptaf9lfgp";//Nombre de usuario de nuestra base de datos (yo utilizo el valor por defecto)
$password_localhost ="ini3x564w4hi3nq6";//Contraseña de nuestra base de datos (yo utilizo por defecto)
$localhost = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost);//Conexión a nuestro servidor mysql
or
trigger_error(mysqli_error(),E_USER_ERROR); //mensaaje de error si no se puede conectar
mysqli_select_db($database_localhost, $localhost);//seleccion de la base de datos con la qu se desea trabajar

//variables que almacenan los valores que enviamos por nuestra app, (observar que se llaman igual en nuestra app y aqui)
$nombre=$_POST['nombre'];
$dni=$_POST['dni'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];

$query_search = "insert into personas(nombre,dni,telefono,email) values ('".$nombre."','".$dni."','".$telefono."','".$email."')";//Sentencia sql a realizar
$query_exec = mysqli_query($query_search) or die(mysqli_error());//Ejecuta la sentencia sql.
?>
