<?php
$login = 0;
$invalid = 0;
$error_message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `registration` WHERE username='$username' AND password='$password'";

    $result = mysqli_query($con, $sql);
    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            $row = mysqli_fetch_assoc($result);
            $role = $row['role']; // Get the user's role from the database

            session_start();
            $_SESSION['username'] = $username;

            if ($role === 'user') {
                header('location: /Project/Admin-user-homepage/userhome.php'); // Redirect user to user home page
            } elseif ($role === 'admin') {
                header('location: /Project/Admin-user-homepage/Admin_homepage.php'); // Redirect admin to admin home page
            }
            exit();
        } else {
            $invalid = 1;
            $error_message = 'Invalid username or password';
        }
    }
}
?>

<script>
// JavaScript to display the error pop-up
document.addEventListener('DOMContentLoaded', function () {
    <?php if ($invalid === 1): ?>
    var errorPopup = document.getElementById('error-popup');
    var errorMessage = document.getElementById('error-message');
    var closeError = document.getElementById('close-error');

    errorMessage.textContent = '<?php echo $error_message; ?>';
    errorPopup.style.display = 'block';

    closeError.addEventListener('click', function () {
        errorPopup.style.display = 'none';
    });
    <?php endif; ?>
});
</script>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Login Page</title>
</head>
<body  style="background-image: url('3.jpg');
 background-size: cover; ">


<section class="sec">
    <div class="box">
        <div id="error-popup" class="error-popup">
            <div class="error-content">
                <span id="error-message" class="error-message"></span>
                <button id="close-error" class="close-error">Close</button>
            </div>
        </div>
        
        <div class="form-container">
            
            <form action="login.php" method="post">
                <h2>Login</h2>
                <div class="form-group">
                    
                    <input type="text" class="form-control input-field" placeholder="Username" name="username" required>
                </div>
                <div class="form-group">
                    
                    <input type="password" class="form-control input-field" placeholder="Password" name="password" required>
                </div>
                <input type="submit" value="Login">
            </form>
        </div>
    </div>
</section>
</body>
</html>
