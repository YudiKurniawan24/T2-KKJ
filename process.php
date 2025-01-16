<?php
function caesarCipher($text, $shift) {
    return preg_replace_callback('/[a-zA-Z]/', function ($char) use ($shift) {
        $base = $char[0] === strtolower($char[0]) ? 'a' : 'A';
        return chr((ord($char[0]) - ord($base) + $shift + 26) % 26 + ord($base));
    }, $text);
}

$action = '';
$inputText = '';
$shift = 0;
$outputText = '';

if (isset($_POST['encrypt']) || isset($_POST['decrypt'])) {
    $inputText = $_POST['inputText'];
    $shift = intval($_POST['shift']); // Ambil nilai shift dari input pengguna

    if (isset($_POST['encrypt'])) {
        $outputText = caesarCipher($inputText, $shift);
        $action = 'Enkripsi';
    } else {
        $outputText = caesarCipher($inputText, -$shift);
        $action = 'Deskripsi';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Enkripsi dan Deskripsi</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f8ff;
            text-align: center;
        }
        div.result-container {
            max-width: 600px;
            margin: 30px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #0056b3;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            text-align: left;
        }
        textarea {
            width: 100%;
            height: 100px;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            box-sizing: border-box;
        }
        a {
            text-decoration: none;
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
    <div class="result-container">
        <h1><?= $action ?> berhasil!</h1>

        <label for="inputText">Teks Asli:</label>
        <textarea id="inputText" readonly><?= $inputText ?></textarea>

        <label for="outputText">Hasil <?= strtolower($action) ?>:</label>
        <textarea id="outputText" readonly><?= $outputText ?></textarea>

        <a href="index.php"><button type="button">Kembali</button></a>
    </div>
</body>
</html>
