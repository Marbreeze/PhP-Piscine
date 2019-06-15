<?php
    $action = $_GET['action'];
    $name = $_GET['name'];
    $value = $_GET['value'];
    if ($action === 'set')
        setcookie($name, $value, time() + 2000);
    if ($action === 'get')
        echo $_COOKIE[$name]."\n";
    if($action === 'del')
        setcookie($name, NULL, -1);
    if($action === 'upd')
        setcookie($name, $value, time() + 2000);
?>