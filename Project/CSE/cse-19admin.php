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
    <link rel="stylesheet" href="\Project\Regulations\regulations.css">
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
    
    
        <section class="department" id="cse">
            <h2>Computer Science and Engineering (CSE)</h2>
            <section class="book-list">
                <h3><a href="/Project/CSE/CSE-2019/Admin/semester1admin.php"  class="semester-link">Semester 1</a></h3>
                <h3><a href="/Project/CSE/CSE-2019/Admin/semester2admin.php"  class="semester-link">Semester 2</a></h3>
                <h3><a href="/Project/CSE/CSE-2019/Admin/semester3admin.php"  class="semester-link">Semester 3</a></h3>
                <h3><a href="/Project/CSE/CSE-2019/Admin/semester4admin.php"  class="semester-link">Semester 4</a></h3>
                <h3><a href="/Project/CSE/CSE-2019/Admin/semester5admin.php"  class="semester-link">Semester 5</a></h3>
                <h3><a href="/Project/CSE/CSE-2019/Admin/semester6admin.php"  class="semester-link">Semester 6</a></h3>
                <h3><a href="/Project/CSE/CSE-2019/Admin/semester7admin.php"  class="semester-link">Semester 7</a></h3>

                <!-- Add more semesters here -->
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
