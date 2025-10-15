
<?php
session_start();
session_unset();    // Borra todas las variables de sesión
session_destroy();  // Cierra la sesión
header("Location: ../index.php");
exit;
?>
