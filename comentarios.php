<?php

  session_start();
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">	
    <title>Comentarios</title>
  </head>
<body class ="bodycomentarios">



  <header>
        
      <nav>
          <a href="index.php" type="button" class="btn btn-primary btn-lg"> Inicio </a>
          <a href="galeria.php" type="button" class="btn btn-primary btn-lg"> Galeria </a>
          <a href="iniciosesion.php" type="button" class="btn btn-primary btn-lg"> Registrate </a>
          <a href="acerca.php" type="button" class="btn btn-primary btn-lg">Acerca de</a>
          <a href="" type="button" class="btn btn-primary btn-lg">Comentarios</a>
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





 
    
    
  <div class="cajafuera3" align="center">
      <div class="formulariocaja3">

          <form method="post" action="seccioncomentarios.php" id="formulario3">
              <div class="formtitulo3"> SECCION DE COMENTARIOS </div>
              <img src="img/logologin2.png"/>
              <div class="formsubtitulo3" > DEJANOS TU COMENTARIO</div>

              <input type="text" name="correo2" placeholder="Ingresa tu  Correo Electronico" class="cajaentradatexto3"> 
              <br>
              <textarea name="comentario" id="comentario" rows=5 cols=58 placeholder ="Introduzca aquí tu comentario"></textarea>   
                          
            
              <input type="submit" value="Enviar Comentario" class="botonenviar3"  name ="btningresar3" >
              
         </form>

      </div>
    </div>    
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
