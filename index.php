<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Enkripsi dan Deskripsi By IKA014</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f8ff;
            text-align: center;
        }
        h1 {
            color: #0056b3;
            margin-top: 20px;
        }
        form {
            max-width: 500px;
            margin: 30px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            text-align: left;
        }
        input, textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Program Enkripsi dan Deskripsi Yudi</h1>

    <form action="process.php" method="post">
        <label for="inputText">Masukkan Teks:</label>
        <textarea id="inputText" name="inputText" required></textarea>

        <label for="shift">Masukkan Nilai K (Shift):</label>
        <input type="number" id="shift" name="shift" value="1" required>

        <button type="submit" name="encrypt">Enkripsi</button>
        <button type="submit" name="decrypt">Deskripsi</button>
    </form>
</body>
</html>
