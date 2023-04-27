<?php
if (isset($_POST['usuario']) && isset($_POST['contraseña'])) {
    $DatosUsuarios = array(
        'yeslhan' => '031984',
        'jonathan' => '321960',
        'sebastian' => '43910'
    );

    if (isset($DatosUsuarios[$_POST['usuario']]) && $DatosUsuarios[$_POST['usuario']] == $_POST['contraseña'] && $_POST['contraseña']) {
        header('Location: pagina.php');
    } else {
        echo 'Usuario o contraseña incorrectos';
    }
}

    $usuario = htmlspecialchars($_POST['usuario']);
    $contraseña = htmlspecialchars($_POST['contraseña']);
?>