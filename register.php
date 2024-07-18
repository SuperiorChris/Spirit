<?php  
require 'config.php';  

if ($_SERVER['REQUEST_METHOD'] == 'POST') {  
    $usuario = $_POST['usuario'];  
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_BCRYPT);  
    $nombre = $_POST['nombre'];  
    $apellido = $_POST['apellido'];  
    $email = $_POST['email'];  
    $billetera = 0; // Valor inicial de la billetera  
    $fecha_registro = date('Y-m-d H:i:s');  

    $stmt = $pdo->prepare('INSERT INTO usuarios (usuario, contrasena, nombre, apellido, email, billetera, fecha_registro) VALUES (?, ?, ?, ?, ?, ?, ?)');  
    $stmt->execute([$usuario, $contrasena, $nombre, $apellido, $email, $billetera, $fecha_registro]);  

    header('Location: login.php');  
    exit();  
}  

require 'templates/register_template.php';  
?>  
<!DOCTYPE html>  
<html>  
<head>  
    <title>Registro</title>  
</head>  
<body>  
    <form method="POST">  
        <input type="text" name="usuario" placeholder="Usuario" required><br>  
        <input type="password" name="contraseña" placeholder="Contraseña" required><br>  
        <input type="text" name="nombre" placeholder="Nombre" required><br>  
        <input type="text" name="apellido" placeholder="Apellido" required><br>  
        <input type="email" name="email" placeholder="Email" required><br>  
        <button type="submit">Registrar</button>  
    </form>  
</body>  
</html>  