<!-- register_template.php -->  
<?php require 'header.php'; ?>  
    <h2>Registro</h2>  
    <form method="POST" action="register.php">  
        <input type="text" name="usuario" placeholder="Usuario" required><br>  
        <input type="password" name="contraseña" placeholder="Contraseña" required><br>  
        <input type="text" name="nombre" placeholder="Nombre" required><br>  
        <input type="text" name="apellido" placeholder="Apellido" required><br>  
        <input type="email" name="email" placeholder="Email" required><br>  
        <button type="submit">Registrar</button>  
    </form>  
<?php require 'footer.php'; ?>  