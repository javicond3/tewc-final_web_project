<?php
$login = array(
    'galaxy' => galaxy12
);

function compruebaLogin($username, $password, $login)
{
    if (!isset($username) || !isset($password)) {
        return false;
    }
    return (array_key_exists($username, $login) && (strcmp($login[$username], $password) == 0));
}

if (!compruebaLogin($_REQUEST['username'], $_REQUEST['password'], $login)) {
    session_destroy();
    $errorLogin = "Usuario o contraseña incorrectos";
    header("Location: login.php?errorLogin=$errorLogin");
} else {
    session_start();
    $_SESSION['username'] = $_REQUEST['username'];
    header("Location: privado.php");
}

?>
