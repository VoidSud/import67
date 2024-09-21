<?php
// Predefined User IDs and Passwords
$users = array(
    "admin" => "admin123",
    "user1" => "password1",
    "user2" => "password2"
);

// Initialize the error message
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userID = $_POST['userid'];
    $password = $_POST['password'];
    
    // Check if the User ID and Password match
    if (array_key_exists($userID, $users) && $users[$userID] == $password) {
        // Login successful, redirect or do nothing
        header("Location: index.php"); // Replace with the desired page after login
        exit;
    } else {
        // Login failed
        $error = "Invalid User ID or Password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #6C63FF;
            font-family: Arial, sans-serif;
        }
        .login-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
        }
        .login-container h2 {
            margin-bottom: 20px;
            color: #6C63FF;
            font-size: 24px;
        }
        .input-field {
            position: relative;
            margin-bottom: 20px;
            text-align: left;
        }
        .input-field input {
            width: 100%;
            padding: 12px 35px;
            border: 1px solid #ddd;
            border-radius: 30px;
            outline: none;
            transition: 0.3s;
            box-sizing: border-box;
        }
        .input-field input:focus {
            border-color: #6C63FF;
        }
        .input-field i {
            position: absolute;
            top: 12px;
            left: 10px;
            color: #6C63FF;
        }
        .login-container label {
            display: flex;
            align-items: center;
            justify-content: left;
            margin-bottom: 20px;
        }
        .login-container input[type="checkbox"] {
            margin-right: 10px;
        }
        .login-container input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #6C63FF;
            color: white;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        .login-container input[type="submit"]:hover {
            background-color: #5a54d6;
        }
        .login-container .error {
            color: red;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>
    
    <?php if ($error) { echo "<p class='error'>$error</p>"; } ?>
    
    <form method="POST" action="login.php">
        <div class="input-field">
            <i class="fa fa-user"></i>
            <input type="text" id="userid" name="userid" placeholder="Username" required>
        </div>
        
        <div class="input-field">
            <i class="fa fa-lock"></i>
            <input type="password" id="password" name="password" placeholder="Password" required>
        </div>
        
        <label>
            <input type="checkbox" name="remember"> Remember me
        </label>
        
        <input type="submit" value="Login">
    </form>
</div>

<!-- Font Awesome for icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>
</html>
