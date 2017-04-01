<?php
$hostname_localhost ="if0ck476y7axojpg.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";  //nuestro servidor
$database_localhost ="eu3q05rxqr8smuf5";//Nombre de nuestra base de datos
$username_localhost ="wrnswivptaf9lfgp";//Nombre de usuario de nuestra base de datos (yo utilizo el valor por defecto)
$password_localhost ="ini3x564w4hi3nq6";//Contraseña de nuestra base de datos (yo utilizo por defecto)
$localhost = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost)or die("Connection Error: " . mysqli_error());//Conexión a nuestro servidor mysql

mysqli_select_db($localhost, $database_localhost);//seleccion de la base de datos con la qu se desea trabajar

//variables que almacenan los valores que enviamos por nuestra app, (observar que se llaman igual en nuestra app y aqui)
$nombre=$_POST['nombre'];
$dni=$_POST['dni'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];

$query_search = "insert into personas(nombre,dni,telefono,email) values ('".$nombre."','".$dni."','".$telefono."','".$email."')";//Sentencia sql a realizar
 $result = mysqli_query($localhost, $query_search);//Ejecuta la sentencia sql.
?>
