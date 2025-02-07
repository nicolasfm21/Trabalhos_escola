<?php
// Inicializa a sessão.
// Se estiver sendo usado session_name("something"), não esqueça de usá-lo agora!

// Apaga todas as variáveis da sessão
$_SESSION['Usuario' ] = array();

// Se é preciso matar a sessão, então os cookies de sessão também devem ser apagados.
// Nota: Isto destruirá a sessão, e não apenas os dados!
if (ini_get("session.use_cookies")) {
$params = session_get_cookie_params();
setcookie(session_name(), '', time() - 420,
$params["path"], $params["domain"],
$params["secure"], $params ["httponly"]
);
}

// Por último, destrói a sessão
session_destroy();
header("location: ../");

