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
    <title>Question Paper Management System</title>

    
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

            <!-- Subject: Data Structure -->
            <div class="subject-box">   
                <h3>Data Structure</h3>


                <!-- Link to display papers for Data Structure -->
                <a class="view-link" href="/Project/CRUD/view.php?subject=Data%20Structure">View Question Papers</a>


                <!-- Link to the delete page for Data Structure -->
                <a class="view-delete" href="/Project/CRUD/delete.php?subject=Data%20Structure">Delete Question Papers</a>

                <!-- Insert form for Data Structure -->
                <form action="/Project/CRUD/insert.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="subject" value="Data Structure">
                    <div class="input-file">
                    <input type="file" name="question_paper" required>
                    <button class="upload-file" type="submit">Upload</button>
                </div>
                </form>
            </div>

            <!-- Subject: Computer Architecture -->
            <div class="subject">
                <h3>Computer Architecture</h3>


                <!-- Link to display papers for Computer Architecture -->
                <a class="view-link" href="/Project/CRUD/view.php?subject=Computer%20Architecture">View Question Papers</a>


                <!-- Link to the delete page for Computer Architecture -->
                <a class="view-delete" href="/Project/CRUD/delete.php?subject=Computer%20Architecture">Delete Question Papers</a>
                
                <!-- Insert form for Computer Architecture -->
                <form action="/Project/CRUD/insert.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="subject" value="Computer Architecture">
                    <div class="input-file">

                    <input type="file" name="question_paper" required>
                    <button class="upload-file" type="submit">Upload</button>
                    </div>
                </form>
            </div>

            <!-- Repeat the same structure for other subjects -->

            <div class="subject">   
                <h3>Object Oriented Programming</h3>


                
                <a  class="view-link" href="/Project/CRUD/view.php?subject=Object%20Oriented%20Programming">View Question Papers</a>


                
                <a class="view-delete" href="/Project/CRUD/delete.php?subject=Object%20Oriented%20Programming">Delete Question Papers</a>
                


            
                <form action="/Project/CRUD/insert.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="subject" value="Object Oriented Programming">
                   <div class="input-file">
                     <input type="file" name="question_paper" required>
                     <button class="upload-file" type="submit">Upload</button>
                    </div>
                </form>
            </div>





            <div class="subject">   
                <h3>Probability and Statistics</h3>
                
                <a class="view-link" href="/Project/CRUD/view.php?subject=Probability%20and%20Statistics">View Question Papers</a>
                
                

                <a class="view-delete" href="/Project/CRUD/delete.php?subject=Probability%20and%20Statistics">Delete Question Papers</a>
                
                <form action="/Project/CRUD/insert.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="subject" value="Probability and Statistics">
                    <div class="input-file">
                        <input type="file" name="question_paper" required>
                        <button class="upload-file" type="submit">Upload</button>
                    </div>
                </form>
            </div>



            <div class="subject">   
                <h3>Computer and Information Ethics</h3>
                
                <a class="view-link" href="/Project/CRUD/view.php?subject=Computer%20and%20Information%20Ethics">View Question Papers</a>
                
                <a class="view-delete" href="/Project/CRUD/delete.php?subject=Computer%20and%20Information%20Ethics">Delete Question Papers</a>
                
                <form action="/Project/CRUD/insert.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="subject" value="Computer and Information Ethics">
                    <div class="input-file">
                        <input type="file" name="question_paper" required>
                        <button class="upload-file" type="submit">Upload</button>
                    </div>
                </form>
            </div>



            <div class="subject">   
                <h3>Communication Systems</h3>
                
                <a class="view-link" href="/Project/CRUD/view.php?subject=Communication%20Systems">View Question Papers</a>
                
                <a class="view-delete" href="/Project/CRUD/delete.php?subject=Communication%20Systems">Delete Question Papers</a>
                
                <form action="/Project/CRUD/insert.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="subject" value="Communication Systems">
                    <div class="input-file">
                        <input type="file" name="question_paper" required>
                        <button class="upload-file" type="submit">Upload</button>
                    </div>
                </form>
            </div>

        </section>
    </main>

    
</body>
</html>
