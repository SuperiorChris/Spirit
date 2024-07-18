<?php  
require 'config.php';  
session_start();  

if (!isset($_SESSION['user'])) {  
    header('Location: login.php');  
    exit();  
}  

require 'templates/dashboard_template.php'; 
?>  
<!DOCTYPE html>  
<html>  
<head>  
    <title>Dashboard</title>  
    <style>  
        .wallet {  
            position: absolute;  
            top: 20px;  
            right: 20px;  
            border: 2px solid #000;  
            padding: 10px;  
            background-color: #f3f3f3;  
        }  
    </style>  
</head>  
<body>  
    <h1>Bienvenido, <?php echo $_SESSION['user']; ?>!</h1>  
    <div class="wallet">  
        <p>Tu billetera: <?php echo $_SESSION['billetera']; ?></p>  
    </div>  
</body>  
</html>  