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
        <h2>Subject Name</h2><br>

        <section class="department" >
            <!-- Programming in C Section -->
           
            
            <div class="subject-box">   
                <h3>Programming in C</h3>
                
                <a class="view-link" href="/Project/CRUD/view.php?subject=Programming%20in%20C">View Question Papers</a>
            
                
                <a class="view-delete" href="/Project/CRUD/delete.php?subject=Programming%20in%20C">Delete Question Papers</a>
                
                <form action="/Project/CRUD/insert.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="subject" value="Programming in C">
                <div class="input-file">
                    <input type="file" name="question_paper" required>
                    <button class="upload-file"  type="submit">Upload</button>
                </div>
                </form>
            </div>

            <!-- Other Sections -->
            
            
            <div class="subject-box">   
                <h3>Engineering Graphics</h3>
                               
                <a class="view-link" href="/Project/CRUD/view.php?subject=Engineering%20Graphics">View Question Papers</a>
                
                <a class="view-delete" href="/Project/CRUD/delete.php?subject=Engineering%20Graphics">Delete Question Papers</a>
                
                <form action="/Project/CRUD/insert.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="subject" value="Engineering Graphics">
                <div class="input-file">
                    <input type="file" name="question_paper" required>
                    <button class="upload-file" type="submit">Upload</button>
                </div>
                </form>
            </div>

            <div class="subject-box">   
                <h3>Engineering Graphics</h3>
                               
                <a class="view-link" href="/Project/CRUD/view.php?subject=English%20For%20Engineers-2">View Question Papers</a>
                
                <a class="view-delete" href="/Project/CRUD/delete.php?subject=English%20For%20Engineers-2">Delete Question Papers</a>
                
                <form action="/Project/CRUD/insert.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="subject" value="English For Engineers-2">
                <div class="input-file">
                    <input type="file" name="question_paper" required>
                    <button class="upload-file" type="submit">Upload</button>
                </div>
                </form>
            </div>

            <div class="subject-box">   
                <h3>Discrete Mathematics</h3>
                               
                <a class="view-link" href="/Project/CRUD/view.php?subject=Discrete%20Mathematics">View Question Papers</a>
                
                <a class="view-delete" href="/Project/CRUD/delete.php?subject=Discrete%20Mathematics">Delete Question Papers</a>
                
                <form action="/Project/CRUD/insert.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="subject" value="Discrete Mathematics">
                <div class="input-file">
                    <input type="file" name="question_paper" required>
                    <button class="upload-file" type="submit">Upload</button>
                </div>
                </form>
            </div>
            
            <div class="subject-box">   
                <h3>Material Science</h3>
                               
                <a class="view-link" href="/Project/CRUD/view.php?subject=Material%20Science">View Question Papers</a>
                
                <a class="view-delete" href="/Project/CRUD/delete.php?subject=Material%20Science">Delete Question Papers</a>
                
                <form action="/Project/CRUD/insert.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="subject" value="Material Science">
                <div class="input-file">
                    <input type="file" name="question_paper" required>
                    <button class="upload-file" type="submit">Upload</button>
                </div>
                </form>
            </div>
            <!-- End of Other Sections -->
        </section>
    </main>

   
</body>
</html>
