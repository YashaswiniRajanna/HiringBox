<?php include('server1.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="header">
        <h2>Student Login</h2>
    </div>

    <form method="post" action="slogin.php">
        <?php include('error.php'); ?>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="fname">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="login_user">Login</button>
        </div>
        <p>
            New Student? <a href="register_form.php">Register Here</a>
        </p>
    </form>
</body>

</html>