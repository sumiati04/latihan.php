<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>UAS</title>
  </head>
  <body>
    <div class="card container" style="width: 20rem;">
  <div class="card-body">
    <center>
        <h2>Syarat Masuk Ke MIKO MALL</h2>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Nama Anda</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Status vaksin</td>
                    <td>:</td>
                    <td><select name="status" id="">
                        <option value="">-------Status Vaksin-------</option>
                        <option value="Sudah Vaksin">Sudah Vaksin</option>
                        <option value="Belum Vaksin">Belum Vaksin</option>
                    </select></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="KIRIM" name="kirim"></td>
                </tr>
            </table>
        </form>
    </center>
    <?php

if (isset($_POST['kirim'])) {
    $nama = $_POST['nama'];
    $status = $_POST['status'];

    echo "Nama : $nama <br>";
    echo "Status : $status <br>";
    echo "<br>";
    echo "<br>";
    if ($status == "Sudah Vaksin") {
        echo "Diizinkan <br>";
    } else if ($status == "Belum Vaksin") {
        echo "Tidak Diizinkan <br>";
        echo "<br>";
        echo '<a href = "https://pedulilindungi.id/*">Silahkan Daftar Vaksin</a>';
    }
}
?>
  </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
