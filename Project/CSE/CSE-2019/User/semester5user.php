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
    <link rel="stylesheet" href="cse_user_style.css">

    <title>Question Paper Management System</title>
    <style>
        /* Style for the subject boxes */
        .subject-box {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }

        /* Style for the "View Question Papers" link */
        .view-link {
            text-decoration: none;
            background-color: #007BFF;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Question Paper Management System</h1>
        <div class="global-nav-bar logout">
            <a id="topframe.logout.label" href="/Project/Logout/logout.php" target="_top" class="nav-link logout-link" title="Logout">Logout</a>
        </div>  
    </header>
    </header>



        <main>

            <h2>Subject Name</h2>

                <section class="department">
                    <h3>Computer Network</h3><br>
                    <h3>Theory of Computation</h3><br>
                    <h3>Software Engineering</h3><br>
                    <h3>Embedded System</h3><br>
                    <h3>Software Project Management</h3><br>
                    <h3>Agile Methodologies</h3><br>
                   
                 </section>
        </main>
    
    
      

</body>
</html>