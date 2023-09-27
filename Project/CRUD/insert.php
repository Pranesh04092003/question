<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Keyframes for the background color animation */
        @keyframes moveColors {
            0%, 100% {
                background: linear-gradient(to right, #f94144, #0077b6, #83c5be, #ff6600, #f0f0f0);
                background-size: 500% 100%;
                animation-timing-function: ease-in-out;
            }
            25% {
                background-position: 100% 0;
            }
            50% {
                background-position: 0 100%;
            }
            75% {
                background-position: 100% 100%;
            }
        }

        @keyframes rotateColors {
            0%, 100% {
                transform: rotate(0deg);
            }
            50% {
                transform: rotate(360deg);
            }
        }

        body {
            animation: moveColors 17s linear infinite; /* Apply the background animation to the body */
        }

        /* Center content vertically and horizontally */
        .center-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh; /* 100% viewport height */
        }

        .message-box {
            background: #ffffff; /* Message box background color */
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="center-content">
        <div class="message-box">
            <?php
            ini_set('post_max_size', '-1');
            ini_set('upload_max_filesize', '-1');

            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['subject']) && isset($_FILES['question_paper'])) {
                $subject = $_POST['subject'];
                $file_name = $_FILES['question_paper']['name'];
                $file_tmp_name = $_FILES['question_paper']['tmp_name'];
                $file_error = $_FILES['question_paper']['error'];

                // Check if the uploaded file is a PDF
                $file_extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
                if ($file_extension != 'pdf') {
                    echo "<h1>Only PDF files are allowed to upload...</h1>";
                    exit;
                }

                // Check if there was an error during file upload
                if ($file_error === UPLOAD_ERR_INI_SIZE || $file_error === UPLOAD_ERR_FORM_SIZE) {
                    echo "<h1>PDF file size is too large to upload...</h1>";
                    exit;
                }

                // Connect to the database (replace with your database connection code)
                $mysqli = new mysqli("localhost", "root", "", "pranesh");
                if ($mysqli->connect_error) {
                    die("Connection failed: " . $mysqli->connect_error);
                }

                // Insert the question paper into the database for the specified subject
                $stmt = $mysqli->prepare("INSERT INTO subject_files (subject_name, file_name, file_data) VALUES (?, ?, ?)");
                // Read the file data
                $file_data = file_get_contents($file_tmp_name);

                $stmt->bind_param("sss", $subject, $file_name, $file_data);

                if ($stmt->execute()) {
                    echo "<h1>Question paper uploaded into <span style='color: #ff6600;'>$subject</span> successfully.</h1>";
                } else {
                    echo "<h1>Error inserting question paper: " . $stmt->error . "</h1>";
                }

                $stmt->close();
                $mysqli->close();
            } else {
                echo "<h1>Invalid request.</h1>";
            }
            ?>
        </div>
    </div>
    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
