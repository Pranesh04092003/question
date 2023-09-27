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
   
    <title>Question Paper Management System</title>

    <style>
        /* Separate CSS code for styling */
/* Reset some default styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Set a background image or pattern for the body */
body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  background-image: url('unseen-studio-s9CC2SKySJM-unsplash.jpg'); /* Replace 'background.jpg' with your image path */
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  min-height: 100vh;
  margin-bottom: -60px; /* Adjust the margin to accommodate the footer height */
}

/* Style the header */
header {
  background-color: #333;
  color: #fff;
  text-align: center;
  padding: 10px 0; /* Adjust the top and bottom padding to reduce header height */
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
}

/* Style the header h1 */
header h1 {
  font-size: 36px;
  margin: 0;
  padding: 0;
}


/* Style the container */
.container {
  text-align: right;
  margin-top: 10px;
}

/* Style the logout button */
/* Style the logout button */
.logout {
  text-align: right; /* Align the logout button to the right */
}

.logout-link {
  text-decoration: none;
  color: #fff;
  background-color:#007BFF;
  padding: 10px 20px;
  border-radius: 5px;
  transition: background-color 0.3s ease-in-out;
}

/* Style the logout button on hover with different attractive colors */
.logout-link:hover {
  background-color:red; /* Change background color to an attractive color on hover */
  color: #fff; /* Change text color to white on hover */
  transform: scale(1.05); /* Slightly scale up the button on hover */
  transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out, transform 0.3s ease-in-out; /* Add transition for background color, text color, and transform */
}

/* Change the background color when the button is clicked */
.logout-link:active {
  background-color: #0084ff; /* Change background color to a different color when clicked */
}


/* Style the department section */
.department {
  background-color: rgba(255, 255, 255, 0.8);
  border: 1px solid #ccc;
  padding: 20px;
  border-radius: 5px;
  flex: 1; /* Occupy the available space equally */
  margin: 0 10px 20px 10px; /* Adjust margins for spacing */
  transition: transform 0.2s ease-in-out;
}

/* Style the main section to center content */
main {
  margin: 20px auto;
  max-width: 1200px; /* Limit maximum content width */
  padding: 0 20px;
}

/* Add hover effect to the semester links */
.semester-link {
  color: #333;
  text-decoration: none;
  font-size: 20px; /* Adjust the font size as needed */
  display: block;
  margin-bottom: 10px;
  transition: color 0.3s ease-in-out, transform 0.3s ease-in-out; /* Add transition for color and transform */
}

/* Add hover effect specifically for Computer Science & Engineering link */
.semester-link[href="/Project/Regulations/regulation-user.php"]:hover {
  color: #f00; /* Change color to red on hover */
  font-weight: bold; /* Add bold font-weight on hover */
  transform: scale(1.03 ); /* Slightly scale up the text on hover */
}

/* Add hover effect for other semester links */
.semester-link:hover {
  color: #f00; /* Change color to red on hover */
}

/* Style the footer */
footer {
  background-color: #333;
  color: #fff;
  text-align: center;
  padding: 10px 0;
  width: 100%;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
  position: absolute;
  bottom: 0;
}


    </style>
</head>
<body>
    <header>
        <h1>Question Paper Management System</h1>
        <div class="global-nav-bar logout">
            <a id="topframe.logout.label" href="/Project/Logout/logout.php" target="_top" class="nav-link logout-link" title="Logout">Logout</a>
          </div>  
        </div>
    </header>

    <main>
    <h2>&nbsp;&nbsp;&nbsp;Select your department</h2><br>
        <section class="department" id="cse">
            <section class="book-list">
            <h3><a href="/Project/Regulations/regulation-user.php" class="semester-link">Computer Science & Engineering</a></h3><br>   
                <h3><a href="/Project/Regulations/regulation-user.php" class="semester-link">Information & Technology</a></h3><br>
                <h3><a href="/Project/Regulations/regulation-user.php" class="semester-link">Electrical & Communication Engineering</a></h3><br>
                <h3><a href="/Project/Regulations/regulation-user.php" class="semester-link">Civil Engineering</a></h3><br>
                <h3><a href="/Project/Regulations/regulation-user.php" class="semester-link">Mechanical Engineering</a></h3><br>
                <h3><a href="/Project/Regulations/regulation-user.php" class="semester-link">Fashion Technology</a></h3><br>
                <h3><a href="/Project/Regulations/regulation-user.php" class="semester-link">Mechatronics Engineering</a></h3><br>
                <h3><a href="/Project/Regulations/regulation-user.php" class="semester-link">Bio Medical Engineering</a></h3><br>
                <h3><a href="/Project/Regulations/regulation-user.php" class="semester-link">Electrical & Electronic Engineering</a></h3><br>
            </section>
            <section class="member-list">
                <!-- Add content for member-list if needed -->
            </section>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Sona College Of Technology</p>
    </footer>
</body>
</html>


