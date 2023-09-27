<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Delete Papers</title>
    <link rel="stylesheet" type="text/css" href="delete_page.css">
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <style>
        .center-content {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(to right, #f76c6c, #6c5b7b, #b7d968, #ff6600, #6c9fb7);
        }

        .message-box {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        .attractive-text {
            color: #ff33cc; /* Bright and attractive color (you can adjust the color code as needed) */
        }

        .file-list {
            text-align: left;
        }

        .file-list label {
            display: block;
        }

        .btn-primary.red {
            background-color: #ff0000;
        }
    </style>
</head>
<body>
    <div class="center-content">
        <div class="message-box">
            <?php
            // Check if the subject information is provided in the URL
            if (isset($_GET['subject'])) {
                $subject = $_GET['subject'];

                // Connect to the database (replace with your database connection code)
                $mysqli = new mysqli("localhost", "root", "", "pranesh");

                if ($mysqli->connect_error) {
                    die("Connection failed: " . $mysqli->connect_error);
                }

                // Fetch the list of available files for the specified subject
                $stmt = $mysqli->prepare("SELECT file_name FROM subject_files WHERE subject_name = ?");
                $stmt->bind_param("s", $subject);
                $stmt->execute();
                $result = $stmt->get_result();

                // Check if there are no papers available
                if ($result->num_rows == 0) {
                    echo '<div class="error">No papers available for delete</div>';
                } else {
                    // Display the list of files and allow the user to select which ones to delete
                    echo "<h1>Delete Papers for <span class='attractive-text'>$subject</span></h1>";
                    echo "<form action='delete_handler.php' method='post'>";
                    echo '<div class="file-list">';
                    while ($row = $result->fetch_assoc()) {
                        $file_name = $row['file_name'];
                        echo "<label><input type='checkbox' name='papersToDelete[]' value='$file_name'> $file_name</label>";
                    }
                    echo '</div>';
                    echo "<input type='hidden' name='subject' value='$subject'>";
                    echo "<button type='submit' class='btn btn-primary'>Delete Selected Papers</button>";
                    echo "</form>";
                }

                $stmt->close();
                $mysqli->close();
            } else {
                echo "Subject information not provided.";
            }
            ?>
        </div>
    </div>

    <!-- Include Bootstrap JS and jQuery (at the end of the body for better performance) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Add an event listener to the checkboxes
        const deleteButton = document.querySelector('.btn-primary');
        const checkboxes = document.querySelectorAll('input[type="checkbox"]');
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                deleteButton.classList.toggle('red', [...checkboxes].some(c => c.checked));
            });
        });
    </script>
</body>
</html>
