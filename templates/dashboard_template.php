<!-- dashboard_template.php -->  
<?php require 'header.php'; ?>  
    <h2>Dashboard</h2>  
    <h1>Bienvenido, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h1>  
    <div class="wallet">  
        <p>Tu billetera: <?php echo htmlspecialchars($_SESSION['billetera']); ?></p>  
    </div>  
<?php require 'footer.php'; ?>  