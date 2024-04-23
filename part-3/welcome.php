<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>

<body>
<p>Lab:26a, Name:Sudarshan Sharma, Roll:49 <br> Welcome sudarshan!!</p>
    <form method="POST" action="welcome.php">
        <button type="submit" name="logout">Logout</button>
    </form>

    <?php
    session_start();

    // Check if the logout form is submitted
    if(isset($_POST['logout'])) {
        // Unset session variables
        session_unset();

        // Destroy the session
        session_destroy();

        // Clear remember me cookie if it exists
        if(isset($_COOKIE['remember_me'])) {
            setcookie('remember_me', '', time() - 3600, "/");
        }

        header("Location: Q26a.php");
        exit();
    }
    ?>
</body>

</html>
