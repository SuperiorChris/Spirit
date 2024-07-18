<?php  
session_start();  
require 'config.php';  

$route = $_GET['route'] ?? 'login';  

switch ($route) {  
    case 'register':  
        require 'templates/register_template.php';  
        break;  
    case 'login':  
        require 'templates/login_template.php';  
        break;  
    case 'dashboard':  
        require 'dashboard.php';  
        break;  
    case 'register_submit':  
        require 'register.php';  
        break;  
    case 'login_submit':  
        require 'login.php';  
        break;  
    
}  
?>  