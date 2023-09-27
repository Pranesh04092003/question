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

    <!-- .....................ADMIN PAGE STYLE............... -->
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

/* Style the welcome message */
.welcome-message {
  font-size: 24px;
  text-transform: uppercase;
  margin-top: 10px;
}

/* Style the "Admin Home Page" text with a bigger font size */
.welcome-message span {
  font-size: 30px; /* Adjust the font size as needed */
}



/* Add a class for the animation effect */
.welcome-animation {
  animation: colorChange 10s ease-in-out infinite; /* Use the "colorChange" animation with a 10-second duration and infinite loop */
}

/* Define the animation keyframes */
@keyframes colorChange {
  0% {
    color: initial; /* Start with the initial color */
  }
  14.2857% {
    color: #ff6b6b; /* Reddish color at 14.2857% of the animation */
  }
  28.5714% {
    color: #ffb74d; /* Orange at 28.5714% of the animation */
  }
  42.8571% {
    color: #fff176; /* Yellow at 42.8571% of the animation */
  }
  57.1429% {
    color: #81c784; /* Green at 57.1429% of the animation */
  }
  71.4286% {
    color: #64b5f6; /* Blue at 71.4286% of the animation */
  }
  85.7143% {
    color: #9575cd; /* Purple at 85.7143% of the animation */
  }
  100% {
    color: #f06292; /* Pink at the end of the animation */
  }
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
.semester-link[href="/Project/Regulations/regulation-admin.php"]:hover {
  color: #f00; /* Change color to red on hover */
  font-weight: bold; /* Add bold font-weight on hover */
  transform: scale(1.03 ); /* Slightly scale up the text on hover */
}

.semester-link[href="/Project/Regulations/reg_it.php"]:hover {
  color: #f00;  
   font-weight: bold;
  transform: scale(1.03 ); 
}


.semester-link[href="/Project/Regulations/regulation.php"]:hover {
  color: #f00;  
   font-weight: bold;
  transform: scale(1.03 ); 
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
        <p class="welcome-message welcome-animation"><span>Welcome to Admin Home Page</span></p>
        
        <div class="global-nav-bar logout">
            <a id="topframe.logout.label" href="/Project/Logout/logout.php" target="_top" class="nav-link logout-link" title="Logout">Logout</a>
          </div>  
    </header>
  
      

    <main>
        <h2>&nbsp;Select your department</h2><br>
        <section class="department" id="cse">
            <section class="book-list">
                <h3><a href="/Project/Regulations/regulation-admin.php" class="semester-link">Computer Science & Engineering</a></h3><br>   
                <h3><a href="/Project/Regulations/reg_it.php" class="semester-link">Information & Technology</a></h3><br>
                <h3><a href="/Project/Regulations/regulation.php" class="semester-link">Electrical & Communication Engineering</a></h3><br>
                <h3><a href="/Project/Regulations/regulation.php" class="semester-link">Civil Engineering</a></h3><br>
                <h3><a href="/Project/Regulations/regulation.php" class="semester-link">Mechanical Engineering</a></h3><br>
                <h3><a href="/Project/Regulations/regulation.php" class="semester-link">Fashion Technology</a></h3><br>
                <h3><a href="/Project/Regulations/regulation.php" class="semester-link">Mechatronics Engineering</a></h3><br>
                <h3><a href="/Project/Regulations/regulation.php" class="semester-link">Bio Medical Engineering</a></h3><br>
                <h3><a href="/Project/Regulations/regulation.php" class="semester-link">Electrical & Electronic Engineering</a></h3><br>
            </section>
            <section class="member-list">
                <!-- Add content for member-list if needed -->
            </section>
        </section>
    </main>
    
    </script>
    
    <footer>
        <p>&copy; 2023 Sona College Of Technology</p>
    </footer>
     <script src="script.js"></script>
    


</body>
</html>
