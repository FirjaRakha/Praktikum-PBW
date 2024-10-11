<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Penjualan Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff; /* Warna latar belakang yang lembut */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            color: #4682b4; /* Warna biru untuk judul */
            font-size: 2.5em;
            margin-bottom: 20px;
            text-align: center;
        }

        p {
            color: #696969; /* Warna teks lebih lembut */
            font-size: 1.2em;
            margin-bottom: 40px;
            text-align: center;
        }

        a {
            padding: 10px 20px;
            background-color: #4682b4; /* Warna tombol login */
            color: white;
            text-decoration: none;
            font-size: 1.2em;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #5a9bd3; /* Warna tombol saat di-hover */
        }
    </style>
</head>
<body>

    <h1>Selamat Datang di Aplikasi Penjualan Barang</h1>
    <p>Ini adalah halaman home.</p>
    <a href="<?= BASEURL; ?>index.php?url=login/index">Login</a>

</body>
</html>
