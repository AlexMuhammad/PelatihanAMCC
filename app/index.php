<?php
if (isset($_POST['btnSubmit'])) {
    $angka1 = $_POST['num1'];
    $angka2 = $_POST['num2'];
    $hasil = $angka1+$angka2;

    echo "Penjumlahan dari ". $angka1. "+". $angka2. "=". $hasil;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="numeric" name="num1" autocomplete="off">
        <br><br>
        <input type="numeric" name="num2" autocomplete="off">
        <br><br>
        <button type="submit" name="btnSubmit">Hitung</button>
    </form>
    <h1>Test</h1>
</body>
</html>
