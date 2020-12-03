<?php
session_start();

if ( ! isset($_SESSION["autenticado"]) ){
    echo "
    <script>
    window.location.replace('https://yuraohtml.000webhostapp.com/menu.php');
    </script>
    ";
    
}

?>