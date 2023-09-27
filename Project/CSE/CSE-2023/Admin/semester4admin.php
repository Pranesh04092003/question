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
                    
                    <div class="subject-box">   
                        <h3>Database Management System</h3>
                        
                        <a class="view-link" href="/Project/CRUD/view.php?subject=Database%20Management%20System">View Question Papers</a>
                    
                        
                        <a class="view-delete" href="/Project/CRUD/delete.php?subject=Database%20Management%20System">Delete Question Papers</a>
                        
                        <form action="/Project/CRUD/insert.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="subject" value="Database Management System">
                        <div class="input-file">
                            <input type="file" name="question_paper" required>
                            <button class="upload-file"  type="submit">Upload</button>
                        </div>
                        </form>
                    </div>

                    <div class="subject-box">   
                        <h3>Design and Analysis of Alogirithm</h3>
                        
                        <a class="view-link" href="/Project/CRUD/view.php?subject=Design%20and%20Analysis%20of%20Alogirithm">View Question Papers</a>
                    
                        
                        <a class="view-delete" href="/Project/CRUD/delete.php?subject=Design%20and%20Analysis@20of%20Alogirithm">Delete Question Papers</a>
                        
                        <form action="/Project/CRUD/insert.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="subject" value="Design and Analysis of Alogirithm">
                        <div class="input-file">
                            <input type="file" name="question_paper" required>
                            <button class="upload-file"  type="submit">Upload</button>
                        </div>
                        </form>
                    </div>
                    
                    <div class="subject-box">   
                        <h3>Operating System</h3>
                        
                        <a class="view-link" href="/Project/CRUD/view.php?subject=Operating%20System">View Question Papers</a>
                    
                        
                        <a class="view-delete" href="/Project/CRUD/delete.php?subject=Operating%20System">Delete Question Papers</a>
                        
                        <form action="/Project/CRUD/insert.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="subject" value="Operating System">
                        <div class="input-file">
                            <input type="file" name="question_paper" required>
                            <button class="upload-file"  type="submit">Upload</button>
                        </div>
                        </form>
                    </div>
                    
                    <div class="subject-box">   
                        <h3>Numerical and Regression Analysis</h3>
                        
                        <a class="view-link" href="/Project/CRUD/view.php?subject=Numerical%20and%20Regression%20Analysis">View Question Papers</a>
                    
                        
                        <a class="view-delete" href="/Project/CRUD/delete.php?subject=Numerical%20and%20Regression%20Analysis">Delete Question Papers</a>
                        
                        <form action="/Project/CRUD/insert.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="subject" value="Numerical and Regression Analysis">
                        <div class="input-file">
                            <input type="file" name="question_paper" required>
                            <button class="upload-file"  type="submit">Upload</button>
                        </div>
                        </form>
                    </div>
                    
                    <div class="subject-box">   
                        <h3>Principles of Management</h3>
                        
                        <a class="view-link" href="/Project/CRUD/view.php?subject=Principles%20of%20Management">View Question Papers</a>
                    
                        
                        <a class="view-delete" href="/Project/CRUD/delete.php?subject=Principles%20of%20Management">Delete Question Papers</a>
                        
                        <form action="/Project/CRUD/insert.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="subject" value="Principles of Management">
                        <div class="input-file">
                            <input type="file" name="question_paper" required>
                            <button class="upload-file"  type="submit">Upload</button>
                        </div>
                        </form>
                    </div>

                 </section>
        </main>
    
    
      

</body>
</html>