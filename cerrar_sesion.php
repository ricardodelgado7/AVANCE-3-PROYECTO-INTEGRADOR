<?php

    session_start();
    echo '
     <script>
        alert("SESION CERRADA");
        window.location = "iniciosesion.php";
     </script> ';
    session_destroy();

?>