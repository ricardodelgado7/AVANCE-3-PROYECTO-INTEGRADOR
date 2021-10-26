
<?php

session_start();

if (!isset($_SESSION['usuario'])){
    echo '
     <script>
        alert("PORFAVOR DEBES INICIAR SESION");
        window.location = "iniciosesion.php";
     </script> ';
     session_destroy();
     die();
}




?>







<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <title>Donaciones</title>
  </head>
  <body id ="bodylogin">


  <header>
        
      <nav>
          <a href="index.php" type="button" class="btn btn-primary btn-lg"> Inicio </a>
          <a href="galeria.php" type="button" class="btn btn-primary btn-lg"> Galeria </a>
          <a href="iniciosesion.php" type="button" class="btn btn-primary btn-lg"> Registrate </a>
          <a href="acerca.php" type="button" class="btn btn-primary btn-lg">Acerca de</a>
          <a href="comentarios.php" type="button" class="btn btn-primary btn-lg">Comentarios</a>
          <a href="contacto.php" type="button" class="btn btn-primary btn-lg"> Contacto </a>
      </nav>

      <section class="textos-header">
          <h1>Mejora El Ambiente Aportando Arboles con:</h1>
          <h1>SAVE ME</h1>
      </section>

      <div class="wave" style="height: 90px; overflow: hidden;">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none"
            style="height: 100%; width: 100%;">
            <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                style="stroke: none; fill:rgb(47, 238, 30);">
            </path>
        </svg>
      </div>

    </header>



    
    <center><H1> <font color="white">  Bienvenido  a las Donaciones</h1></center></font>

    
    <div class="cajafuera" align="center">
      <div class="formulariocaja">

          <form method="post" action="" id="formulario">
              <div class="formtitulo"> DONACIONES </div>
              <img src="img/logologin2.png"/>
              <div class="formsubtitulo" > ¿Te gustaria donar arbolitos? </div>
               
              
              <table id="space" >

                <tr>
                
                  <td >
                     <a  class="link-light" id="boton" href="registrodonaciones.php" > ACEPTAR  </a>
                  </td>


                  <td>
                        <a  class="link-light" id="boton" href="cerrar_sesion.php" > CANCELAR  </a>                   
                  </td>


                </tr>
              </table>


             
          </form>

      </div>
    </div>    

    



    



    <footer>
    
    
      <div class="contenedor-footer">
        <div class="content-foo">
          <h4>Universidad</h4>
          <p>Universidad Autonoma de Chiapas</p>
        </div>
        
        <div class="content-foo">
              <h4>Email</h4>
              <p>savemetgz21@gmail.com</p>
        </div>
          
      </div>
      <h2 class="titulo-final">&copy; Diseñado Por  El Equipo 6</h2>
  </footer>


  

  
  </body>
</html>
