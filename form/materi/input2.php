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
        <legend>Pendaftaran Peserta Didik Baru</legend>
        <form action="proses2.php" method="post">
            <table>
                <tr>
                    <th sytle="text-align: left">
                        Nama Lengkap
                    </th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" size="50">
                    </td>
                </tr>
                <tr>
                    <th sytle="text-align: left">Email</th>
                    <td>:</td>
                    <td>
                        <input type="email" name="email" size="50">
                    </td>
                </tr>
                <tr>
                    <th sytle="text-align: left">Jenis Kelamin</th>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jk" value="Laki-laki"> L
                        <input type="radio" name="jk" value="Perempuan"> P
                    </td>
                </tr>
                <tr>
                    <th sytle="text-align: left">Agama</th>
                    <td>:</td>
                    <td>
                        <select name="agama" id="">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Tinggi Badan & Berat Badan</th>
                    <td>:</td>
                    <td>
                        <Input
                        type="number"
                        name="tb"
                        min="100"
                        max="200"
                        placeholder="Tinggi Badan"
                        />
                        <Input
                        type="number"
                        name="bb"
                        min="1"
                        max="100"
                        placeholder="Berat Badan"
                        />
                    </td>
                </tr>
                <tr>
                    <th sytle="text-align: left">Kelengkapan Persyaratan</th>
                    <th>:</th>
                    <td>
                        <input type="checkbox" name="sSehat" id=""/>Surat Sehat
                        <input type="checkbox" name="kk" id=""/>Kartu Keluarga
                        <input type="checkbox" name="skl" id=""/>Surat Keterangan Lulus
                    </td>
                </tr>
                <tr>
                    <th sytle="text-align: left">Nomor Telephon</th>
                    <th>:</th>
                    <td><input type="number" name="nomor"/></td>
                </tr>
                <tr>
                    <th>
                        <button type="sumbit" name="simpan">Daftar</button>
                        <button type="reset">Bersihkan Formulir</button>
                    </th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>
