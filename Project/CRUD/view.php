<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>File Listing</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
        background: #f2f2f2;
        padding: 20px;
        border-radius: 10px;
        margin-top: 30px;
    }
    .file-link {
        color: #FF5733; /* Change link color to your desired color */
        text-decoration: none;
    }
    .no-papers {
            font-size: 44px; /* Adjust the font size as needed */
        }
    
    
    

    </style>
</head>
<body>
    <div class="container">
        
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['subject'])) {
                    $subject = $_GET['subject'];
                    
                    // Connect to the database (replace with your database connection code)
                    $mysqli = new mysqli("localhost", "root", "", "pranesh");
                    
                    if ($mysqli->connect_error) {
                        die("Connection failed: " . $mysqli->connect_error);
                    }
                    
                    // Retrieve files for the specified subject
                    $stmt = $mysqli->prepare("SELECT file_name, file_data FROM subject_files WHERE subject_name = ?");
                    $stmt->bind_param("s", $subject);
                    
                    if ($stmt->execute()) {
                        $result = $stmt->get_result();
                        
                        if ($result->num_rows > 0) {
                            echo '<div class="text-center my-4">';
                            echo "<h1>Question Papers for <span style='color: #ff33cc;'>$subject</span></h1>";
                            echo '</div>';
                            
                            while ($row = $result->fetch_assoc()) {
                                $fileName = $row['file_name'];
                                echo '<div class="card-body">';
                                
                                echo '<a class="file-link" href="?subject=' . $subject . '&file=' . $fileName . '">' . $fileName . '</a>';
                                echo '</div>';
                                
                                }  
                            

                            
                            if (isset($_GET['file'])) {
                                $requestedFile = $_GET['file'];
                                $result->data_seek(0);
                                while ($row = $result->fetch_assoc()) {
                                    $fileName = $row['file_name'];
                                    if ($fileName === $requestedFile) {
                                        header('Content-Type: application/pdf');
                                        header('Content-Disposition: inline; filename="' . $fileName . '"');
                                       

                                        header('Content-Transfer-Encoding: binary');
                                        header('Accept-Ranges: bytes');
                                        echo $row['file_data'];
                                        exit;
                                    }
                                }
                                echo "File not found: " . $requestedFile;
                            }
                        }
                            else {
                            echo '<div class="text-center my-4">';
                            echo 'No Question Papers found for ' . $subject . '<br>';
                            echo '</div>';
                        }
                    } else {
                        echo '<div class="text-center my-4">';
                        echo "Error retrieving files: " . $stmt->error;
                        echo '</div>';
                    }
                    
                    $stmt->close();
                    $mysqli->close();
                } else {
                    echo '<div class="text-center my-4">';
                    echo "Invalid request.";
                    echo '</div>';
                }
                ?>
    
    </div>
</body>
</html>
