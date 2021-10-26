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



// Login Iniciar Sesion
$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];



$validarlogin  = mysqli_query($conn, " SELECT * FROM login WHERE usuario = '".$nombre. "' and password = '" .$pass."' ");  
$nr = mysqli_num_rows($validarlogin);



if(isset($_POST["btningresar4"])){
    // consulta para validar los datos del usuario

    if($nombre == "" || $pass == ""){ 
        echo "<script> alert ('LOS CAMPOS  *usuario* Y *contraseña*   NO PUEDEN QUEDAR VACIOS ');
         window.location ='iniciosesion.php' </script>";
        exit;
    }
    
    else if ( $nr == 1){
        $_SESSION ['usuario'] =  $nombre;
        echo "<script> alert (' USUARIO INGRESADO CON EXITO: $nombre'); window.location ='donaciones.php' </script>";
        
    }  
    else if ( $nr == 0 ){
        echo "<script> alert ('El USUARIO $nombre NO EXISTE '); window.location ='iniciosesion.php' </script>";
        exit;
    
    }
}



// Registrar o Crear Usuario
$correo = $_POST ["txtcorreo"];

if (isset($_POST["btnregistrar"])){
    
    $sqlgrabar = "INSERT INTO login (usuario,password,correoelectronico) values ('$nombre','$pass','$correo')";

    if(mysqli_query($conn, $sqlgrabar)){
        
        echo "<script> alert ('USUARIO REGISTRADO CON EXITO: $nombre'); window.location ='iniciosesion.php' </script>";
    }
    else{
        echo "Error:" .$sql." <br>".mysqli_error($conn);

    }
}







?>