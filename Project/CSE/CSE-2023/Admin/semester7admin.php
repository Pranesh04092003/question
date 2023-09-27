<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location: /Project/Login/login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cse_admin_styles.css">
    <title></title>
</head>
<body>
    <header>
        <h1>Question Paper Management System</h1>
        <div class="global-nav-bar logout">
            <a id="topframe.logout.label" href="/Project/Logout/logout.php" target="_top" class="nav-link logout-link" title="Logout">Logout</a>
        </div> 
    </header>

        <main>

            <h2>Subject Name</h2>

                <section class="department">
                    <h3>Blockchain Technologies </h3><br>
                    <h3>Cryptography</h3><br>
                    <h3>Internet of Things</h3><br>
                  
                   
                 </section>
        </main>
    
    
        

</body>
</html>