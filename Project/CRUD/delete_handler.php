<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['subject']) && isset($_POST['papersToDelete'])) {
    $subject = $_POST['subject'];
    $papersToDelete = $_POST['papersToDelete'];
    
    // Connect to the database (replace with your database connection code)
    $mysqli = new mysqli("localhost", "root", "", "pranesh");
    
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    
    // Loop through selected papers and delete them from the database and/or server
    foreach ($papersToDelete as $paper) {
        // Delete from the database
        $stmt = $mysqli->prepare("DELETE FROM subject_files WHERE subject_name = ? AND file_name = ?");
        $stmt->bind_param("ss", $subject, $paper);
        
        if ($stmt->execute()) {
            // Successfully deleted the paper from the database
        } else {
            echo "Error deleting paper: " . $stmt->error;
        }
        
        $stmt->close();
        
        // You can also delete the actual file from your server if needed
        // Make sure to specify the correct file path here
        $file_path = "path/to/your/files/$paper";
        if (file_exists($file_path)) {
            unlink($file_path);
        }
    }
    
    $mysqli->close(); 
    
    // Redirect back to the delete.php page after deletion
    header("Location: /Project/CSE/cse-19admin.php?subject=$subject&success=1");
    exit;
} else {
    echo "Invalid request.";
}
?>
