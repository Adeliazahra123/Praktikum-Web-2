<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Ujian</title>
    <style>
        body {
            font-family: arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 300px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.25);
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Form Nilai Ujian</h1>
        <form action="formnilai.php" method="post">
            <label for="nim">NIM:</label><br>
            <input type="text" id="nim" name="nim"><br>

            <label for="mata_kuliah">Mata Kuliah:</label><br>
            <input type="text" id="mata_kuliah" name="mata_kuliah"><br>

            <label for="data_warehouse">Data Warehouse:</label><br>
            <select id="data_warehouse" name="data_warehouse">
                <option value="Option 1">Option 1</option>
                <option value="Option 2">Option 2</option>
                <option value="Option 3">Option 3</option>
            </select><br>

            <label for="nilai">Nilai:</label><br>
            <input type="text" id="nilai" name="nilai"><br>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
<?php
require_once("classnilai.php");

// Cek apakah data sudah disubmit atau belum
if ($_SERVER["REQUEST_METHOD"] == "POST") 
    $nim = $_POST['nim'];
    $mata_kuliah = $_POST['mata_kuliah'];
    $data_warehouse = $_POST['data_warehouse'];
    $nilai_input = $_POST['nilai'];

    $nilai = new FormNilaiUjian($nim, $mata_kuliah, $data_warehouse, $nilai_input, );

    echo "<h1>Hasil Nilai Ujian</h1>";
    echo "NIM: " . $nilai->nim . "<br>";
    echo "Mata Kuliah: " . $nilai->mata_kuliah . "<br>";
    echo "Data Warehouse: " . $nilai->data_warehouse . "<br>";
    echo "Nilai: " . $nilai->nilai . "<br>";
    echo "grade: " . $nilai->hitungStatus(). "<br>"
    
?>