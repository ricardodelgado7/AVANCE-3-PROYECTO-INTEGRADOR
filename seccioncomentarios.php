<?php
session_start();

// conexion con la base de datos
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "reforestacion";

$conn = mysqli_connect ( $dbhost, $dbuser, $dbpass, $dbname);

if(!$conn){
    die ("NO HAY CONEXION: " .mysqli_connect_error());
}



// COMENTARIOS
$correoelectronico =$_POST["correo2"];
$comentario = $_POST ["comentario"];


$correoelectronico = mysqli_real_escape_string($conn,$correoelectronico);
$comentario = mysqli_real_escape_string($conn,$comentario);



if (isset($_POST["btningresar3"])){

  if($correoelectronico == "" || $comentario == ""){
    echo "<script> alert ('LOS CAMPOS *Correo* Y  *Comentario*  NO PUEDEN QUEDAR VACIOS'); window.location ='comentarios.php' </script>";
  }
  
  else{
    $sqlgrabar = mysqli_query ($conn, "INSERT INTO comentarios (correoelectronico,comentario) values('$correoelectronico', '$comentario') ");
    echo "<script> alert ('Datos enviados Con Exito');  </script>";
    echo "<script> alert ('GRACIAS POR MANDARNOS TU COMENTARIO'); window.location ='index.php' </script>";
  }
} 


  

?>