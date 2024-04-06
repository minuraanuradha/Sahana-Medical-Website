<?php
session_start(); // Start session

include '../Model/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['login-email'];
    $password = $_POST['login-pw'];

    $sql = "SELECT * FROM user WHERE email = ?";
    
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("s", $email);
        
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            
            if ($result->num_rows == 1) {
                $user = $result->fetch_assoc();
                
                if (password_verify($password, $user['password'])) {
                    // Set session variables
                    $_SESSION['user_id'] = $user['user_id'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['full_name'] = $user['full_name'];
                    
                    header("Location: ../User/index.php");
                    exit();
                } else {
                    echo "Incorrect password";
                }
            } else {
                echo "User not found";
            }
        } else {
            echo "Error executing query: " . $stmt->error;
        }
    
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
}

$conn->close();
?>