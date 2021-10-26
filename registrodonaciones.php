<?php

  session_start();
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">	
    <title>Registro de Donaciones</title>
  </head>
<body class ="bodydonaciones">



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
                style="stroke: none; fill:rgb(243, 52, 22);">
            </path>
        </svg>
      </div>

  </header>





 
    
  <br>  
  <div class="cajafuera4" align="center">
      <div class="formulariocaja4">

          <form method="post" action="" id="formulario4"  >
              <div class="formtitulo4"> REGISTRO DE DONACIONES </div>
              <img src="img/logologin2.png"/>
              <div class="formsubtitulo4" > DEJANOS TU DONACION </div>

              <input type="text" name="descripcion"     placeholder="Ingresa la Descripcion" class="cajaentradatexto4">  
              <br>
              <input type="text" name="nombrearbol" placeholder="Nombre del Arbol" class="cajaentradatexto4">     
              <br>
              <input type="text" name="cantidad" placeholder="Ingresa la Cantidad de Arboles" class="cajaentradatexto4">        
              <br>
              <input type="text" name="lugarprocedencia" placeholder="Ingresa tu lugar de Procedencia" class="cajaentradatexto4">     

            
            <input type="submit" value="Enviar Donacion" class="botonenviar4"  name ="btningresar">
              
         </form>

      </div>
    </div>    
    <br>
    <br>
    







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
      <h2 class="titulo-final">&copy; Diseñado Por El   Equipo 6</h2>
  </footer>


  

  
</body>
</html>
