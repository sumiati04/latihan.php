<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>Pendaftran Masuk TNI</fieldset>
    <form action="proses1.php" method="post">
        <table>
            <tr>
                <th sytle= "text-align: left">Nama Lengkap</th>
                <td>:</td>
                <td>
                    <input type="text" name="nama" size="50">
                </td>
            </tr>
            <tr>
               <th sytle= "text-align: left">Tinngi Badan & Berat Badan</th>
               <td>:</td>
               <td>
                   <input
                   type="number"
                   name="tb"
                   min="100"
                   max="200"
                   placeholder="Tinggi Badan"
                   />
                   <input
                   type="number"
                   name="tb"
                   min="1"
                   max="90"
                   placeholder="Berat Badan"
                   />
               </td>
            </tr>
            <tr>
                <th sytle= "text-align: left">Jenis Kelamin</th>
                <td>:</td>
                <td>
                    <input type="radio" name="jk" value="Laki-laki">L
                    <input type="radio" name="jk" value="Perempuan">P
                </td>
            </tr>
            <tr>
                <th>
                    <button type="sumbit" name="simpan">Daftar</button>
                    <button type="reset">Bersihkan Formulir</button>
                </th>
            </tr>
        </table>
    </form>
</body>
</html>
