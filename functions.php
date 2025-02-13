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

function is_mobile() {
	if ( isset( $_SERVER['HTTP_SEC_CH_UA_MOBILE'] ) ) {
		$is_mobile = ( '?1' === $_SERVER['HTTP_SEC_CH_UA_MOBILE'] );
	} elseif ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
		$is_mobile = false;
	} elseif ( str_contains( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) // Many mobile devices (all iPhone, iPad, etc.)
		|| str_contains( $_SERVER['HTTP_USER_AGENT'], 'Android' )
		|| str_contains( $_SERVER['HTTP_USER_AGENT'], 'Silk/' )
		|| str_contains( $_SERVER['HTTP_USER_AGENT'], 'Kindle' )
		|| str_contains( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' )
		|| str_contains( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' )
		|| str_contains( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) ) {
			$is_mobile = true;
	} else {
		$is_mobile = false;
	}

	return  $is_mobile;
}





?>