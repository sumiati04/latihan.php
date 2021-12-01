<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <fieldset>
        <legend>Input Formulir</legend>
        <form action="" method="get">
            <label for="">Masukan Nama</label>
            <input type="text" name="nama" required>
            <br>
            <button type="submit">Simpan</button>
        </form>
    </fieldset>
    <?php
if (isset($_GET['SAVE'])) {
    $a = $_GET['nama'];
    echo "Nama Saya Adalah <b>$a</b>";
}
?>
</body>
</html>