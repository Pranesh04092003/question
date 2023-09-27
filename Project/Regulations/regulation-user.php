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
    <link rel="stylesheet" href="regulations.css">
    <title>Question Paper Management System</title>
</head>
<body>
    <header>
        <h1>Question Paper Management System </h1>
        <div class="global-nav-bar logout">
            <a id="topframe.logout.label" href="/Project/Logout/logout.php" target="_top" class="nav-link logout-link" title="Logout">Logout</a>
        </div>  
    </header>

    <main>
      <h2>Select Your Regulation</h2>
        <section class="department" id="cse">
            
            <section class="book-list">
                <h3><a href="\Project\CSE\cse-19user.php" class="semester-link">Regulation-2019</a></h3><br>
                <h3><a href="cse-23.php" class="semester-link">Regulation-2023</a></h3><br>
                
            </section>
            <section class="member-list">

            </section>
        </section>

        


    </main>

    <footer>
        <p>&copy; 2023 Sona College Of Technology</p>
    </footer>
    

<!--javascript to click the links only on the cursor is on it (to avoid to click horizontally) -->
    <script>
        const semesterLinks = document.querySelectorAll('.semester-link');

        semesterLinks.forEach(link => {
            link.addEventListener('mouseover', function (e) {
                link.classList.add('hover');
            });
            link.addEventListener('mouseout', function (e) {
                link.classList.remove('hover');
            });
        });
    </script>


    
</body>
</html>
