<!-- V_register.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../views/style/register.css"> <!-- Same style as login -->
</head>
<body>
    <div class="register-container">
        <h2>Register</h2>
        <form action="../controllers/auth_controller.php" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" name="confirm_password" id="confirm_password" required>
            </div>
            <button type="submit" name="tambah_akun">Register</button>
        </form>
        <p>Already have an account? <a href="v_login.php">Login here</a></p>
    </div>
</body>
</html>
