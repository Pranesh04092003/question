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
                  
                  <div class="subject-box">   
                  <h3> Linear Algebra and Calculus</h3>
                    <a class="view-link" href="/Project/CRUD/view.php?subject=Linear%20Algebra%20and%20Calculus">View Question Papers</a>
                    </div>


                  <h3>Basic Electrical and
                    Electronics Engineering</h3><br>
                  <h3>English For Engineers-1</h3><br>
                  <h3>Applied Chemistry-1</h3><br>
                  <h3>Problem Solving
                    Using Python Programming</h3><br>
                  <h3>Engineering Physics</h3>
                  
                 </section>
        </main>
    
    
        

</body>
</html>
