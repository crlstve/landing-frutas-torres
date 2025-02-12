<?php
//evitar que se pueda acceder directamente al archivo
  if ($_SERVER['SCRIPT_FILENAME'] == __FILE__) {
    header('Location: 404.php');
    exit;
  }
//mostrar errores
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
//cookies de sesión seguras
  ini_set('session.cookie_httponly', 1);
  ini_set('session.cookie_secure', 1);
  ini_set('session.use_only_cookies', 1);
// cargar partials y estilos
/*class Functions {
  public static function partial($partial){
    require_once('./views/partials/' . $partial . '.php');
  }
}*/
?>