<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" href="<?= BASEURL; ?>assets/css/style.css">
    </head>
<body>
    <div class="login-container">
        <h2>Form Login</h2>
        <form action="<?= BASEURL; ?>index.php?url=login/auth" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
