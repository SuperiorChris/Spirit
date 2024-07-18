<?php  
session_start();
require 'config.php';  


if ($_SERVER['REQUEST_METHOD'] == 'POST') {  
    $usuario = $_POST['usuario'];  
    $contrasena = $_POST['contrasena'];  

    $stmt = $pdo->prepare('SELECT * FROM usuarios WHERE usuario = ?');  
    $stmt->execute([$usuario]);  
    $user = $stmt->fetch();  

    if ($user) {  
        if (isset($user['password']) && password_verify($contrasena, $user['password'])) {  
            $_SESSION['user'] = $user['usuario'];  
            $_SESSION['billetera'] = $user['billetera'];  
            header('Location: dashboard.php');  
            exit();  
        } else {  
            echo 'Contraseña incorrecta';  
        }  
    } else {  
        echo 'Usuario no encontrado';  
    }  
}  

require 'templates/login_template.php';  
?>  
<!DOCTYPE html>  
<html>  
<head>  
    <title>Iniciar Sesión</title>  
</head>  
<body>  
    <form method="POST">  
        <input type="text" name="usuario" placeholder="Usuario" required><br>  
        <input type="password" name="contraseña" placeholder="Contraseña" required><br>  
        <button type="submit">Iniciar Sesión</button>  
    </form>  
</body>  
</html>  