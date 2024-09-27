<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Buku Tamu</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <style>
        body {
            background-color: #f8f9fa; 
            font-family: Arial, sans-serif;
            padding: 20px; 
        }
        .container {
            max-width: 600px; 
            margin: 50px auto;
            padding: 20px;
            background-color: #fff; 
            border-radius: 10px; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        }
        h2 {
            text-align: center; 
            color: #343a40; 
            margin-bottom: 20px; 
        }
        label {
            font-weight: bold; 
            display: block;
            margin-bottom: 5px; 
        }
        input[type="text"], textarea {
            width: 100%; 
            padding: 10px;
            margin-bottom: 20px; 
            border: 1px solid #ced4da; 
            border-radius: 5px; 
            box-sizing: border-box; 
        }
        input[type="submit"] {
            background-color: #229799;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer; 
            width: 100%; 
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3; 
        }
    </style>
</head>
<body>
    <h2>Selamat Datang di Buku Tamu</h2>
    <form action="index.php" method="post">
        <label for="name">Nama:</label><br>
        <input type="text" name="name" required><br><br>
        <label for="comment">Komentar:</label><br>
        <textarea name="comment" rows="5" required></textarea><br><br>
        <input type="submit" value="Kirim">
</form>
</body>
</html>