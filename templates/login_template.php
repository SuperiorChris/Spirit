<!-- login_template.php -->  
<?php require 'header.php'; ?>  
    <h2>Iniciar Sesión</h2>  
    <form method="POST" action="login.php">  
        <input type="text" name="usuario" placeholder="Usuario" required><br>  
        <input type="password" name="contraseña" placeholder="Contraseña" required><br>  
        <button type="submit">Iniciar Sesión</button>  
    </form>  
<?php require 'footer.php'; ?>  