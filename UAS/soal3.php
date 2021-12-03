<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>UAS PENGULANGAN</title>
</head>
<body style ="background-color : rgb(173,238,238)">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">UAS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="soal1.php">soal1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="soal2.php">soal2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="soal3.php">soal3</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
  <br><br>
  <div class="card border-secondary mb-3 container" style="width: 20rem;">
  <div class="card-body">
    <center>
      <h2>Form Pengulangan</h2>
      <form action="" method="post">
        <table>
            <tr>
                <td></td>
                <td></td>
                <td>1. Deret Bilangan Ganjil</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>2. Segitiga Sama Kaki Terbalik</td>
            </tr><tr>
                <td></td>
                <td></td>
                <td>3. Deret Bilangan Kelipatan 3</td>
            </tr>
            <tr>
                <td>Pilih</td>
                <td>:</td>
                <td><input type="number" name="Pilih"></td>
            </tr>
            <tr>
                <td>Masukkan Angka</td>
                <td>:</td>
                <td><input type="number" name="masukkan"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="kirim" value="KIRIM"></td>
            </tr>
        </table>
    </form>
    </center>
    <?php
if (isset($_POST['kirim'])) {
    $Pilih = $_POST['Pilih'];
    $angka = $_POST['masukkan'];

    if ($Pilih == 1) {
        echo "<center>";
        echo "<h3>Deret Bilangan Ganjil</h3>";
        for ($x = 1; $x <= $angka; $x += 2) {
            echo "$x ";
        }
        echo "</center>";
    } elseif ($Pilih == 2) {
        echo "<center>";
        echo "<h3>Segitiga Sama Kaki Terbalik</h3>";
        for ($x = $angka; $x >= 1; $x--) {
            for ($v = $angka; $v > $x; $v--) {
                echo " ";
            }
            for ($c = 1; $c <= $x; $c++) {
                echo "* ";
            }
            echo "<br>";
        }
        echo "</center>";
    } elseif ($Pilih == 3) {
        echo "<center>";
        echo "<h3>Deret Bilangan Kelipatan 3</h3>";
        for ($x = 3; $x <= $angka; $x += 3) {
            echo "$x ";
        }
        echo "</center>";
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
