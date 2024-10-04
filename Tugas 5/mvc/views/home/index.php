<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Background and Body */
        body {
            background: linear-gradient(to right, #4facfe, #00f2fe);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            text-align: center;
        }

        /* Container */
        .container {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
        }

        /* Heading */
        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        /* Paragraph */
        p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        /* Link */
        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #fff;
            color: #4facfe;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        a:hover {
            background-color: #4facfe;
            color: #fff;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            h1 {
                font-size: 2rem;
            }
            
            p {
                font-size: 1rem;
            }

            a {
                padding: 8px 16px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang di Aplikasi Penjualan Barang</h1>
        <p>Ini adalah halaman home.</p>
        <a href="<?= BASEURL; ?>index.php?url=login/index">Login</a>
    </div>
</body>
</html>
