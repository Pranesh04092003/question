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
        <h2>Subject Name</h2><br>
        <section class="department">

            
            <div class="subject-box">   
                <h3>Programming in C</h3>
                <a class="view-link" href="/Project/CRUD/view.php?subject=Programming%20in%20C">View Question Papers</a>
            </div>
            
            <!-- Subject: Computer Architecture -->
            <div class="subject-box">
                <h3>Engineering Graphics</h3>
                <a class="view-link" href="/Project/CRUD/view.php?subject=Engineering%20Graphics">View Question Papers</a>
            </div>

            <!-- Repeat the same structure for other subjects -->
            
            <!-- Example for another subject -->
            <div class="subject-box">   
                <h3>English For Engineers-2</h3>
                <a class="view-link" href="/Project/CRUD/view.php?subject=English%20For%20Engineers-2">View Question Papers</a>
            </div>
            
            <!-- Continue adding more subjects in the same format -->

            <div class="subject-box">   
                <h3>Discrete Mathematics</h3>
                
                <a class="view-link" href="/Project/CRUD/view.php?subject=Discrete%20Mathematics">View Question Papers</a>
            </div>
                
                <div class="subject-box">   
                <h3>Material Science</h3>
                
                <a class="view-link" href="/Project/CRUD/view.php?subject=Material%20Science">View Question Papers</a>
            </div>
                
           
            
        </section>







    </main>

   
</body>
</html>
