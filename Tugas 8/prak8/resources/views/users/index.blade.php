<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($users as $user): ?>
        <h1><?= $user['name']; ?></h1>
        <h1><?= $user['email']; ?></h1>
        <?php endforeach; ?>
</body>
</html>