<?php
require_once __DIR__ . '/../utils.php';

require_method('POST');
start_session_if_needed();
$_SESSION = [];
if (ini_get('session.use_cookies')) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
}
session_destroy();
send_json(['ok' => true]);
?>

