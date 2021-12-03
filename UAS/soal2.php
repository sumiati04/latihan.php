<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>UAS PENGGAJIAN</title>
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
      <div class="card border-secondary mb-3 container" style="width: 34rem;">
  <div class="card-body">
      <center>
          <h2>Penggajian Karyawan</h2>
          <h1>PT. Selalu Makmur Jaya</h1>
          <form action="" method="post">
              <table>
                  <tr>
                      <td>Nama Bendahara</td>
                      <td>:</td>
                      <td><input type="text" name="Bendahara"></td>
                  </tr>
                  <tr>
                      <td>Nama Pekerja</td>
                      <td>:</td>
                      <td><input type="text" name="Pekerja"></td>
                  </tr>
                  <tr>
                      <td>Jenis Kelamin</td>
                      <td>:</td>
                      <td>
                          <input type="radio" name="jk" value="Laki-laki">Laki-laki
                          <input type="radio" name="jk" value="Perempuan">Perempuan
                      </td>
                  </tr>
                  <tr>
                      <td>Tanggal Gaji</td>
                      <td>:</td>
                      <td><input type="date" name="tanggal"></td>
                  </tr>
                  <tr>
                      <td>Jabatan</td>
                      <td>:</td>
                      <td><select name="jabatan" id="">
                          <option value="">-------Pilih Jabatan-------</option>
                          <option value="Direktur">Direktur</option>
                          <option value="Manager">Manager</option>
                          <option value="Sekertaris">Sekertaris</option>
                          <option value="Karyawan">Karyawan</option>
                          <option value="OB">OB</option>
                      </select></td>
                  </tr>
                  <tr>
                      <td>Pendidikan Terakhir</td>
                      <td>:</td>
                      <td><select name="Pendidikan" id="">
                          <option value="">------Pendidikan Terakhir------</option>
                          <option value="SD">SD</option>
                          <option value="SMP">SMP</option>
                          <option value="SMA">SMA</option>
                          <option value="S1">S1</option>
                          <option value="S2">S2</option>
                      </select></td>
                  </tr>
                  <tr>
                      <td>Status Pegawai</td>
                      <td>:</td>
                      <td>
                          <input type="Radio" name="Status" value="Tetap">Tetap
                          <input type="Radio" name="Status" value="Kontrak">Kontrak
                      </td>
                  </tr>
                  <tr>
                      <td>Lembur</td>
                      <td>:</td>
                      <td><input type="number" name="Lembur">Hari/Rp.20.000</td>
                  </tr>
                  <tr>
                      <td>Potongan BPJS</td>
                      <td>:</td>
                      <td><input type="number" name="Potongan"></td>
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
    $Bendahara = $_POST['Bendahara'];
    $Pekerja = $_POST['Pekerja'];
    $jk = $_POST['jk'];
    $tanggal = $_POST['tanggal'];
    $jabatan = $_POST['jabatan'];
    $Pendidikan = $_POST['Pendidikan'];
    $Status = $_POST['Status'];
    $Lembur = $_POST['Lembur'];
    $Potongan = $_POST['Potongan'];
    echo "<br>";

    echo "<center><h1>Struk Gaji Karyawan</h1></center><br>";
    echo "----------------------------------------------------<br>";
    echo "Tanggal:   : $tanggal <br>";
    echo "<br>";
    echo "<h3>Gaji Pokok</h3>";
    echo "<br>";
    echo "Nama Karyawan   : $Pekerja <br>";
    echo "Jenis Kelamin   : $jk <br>";
    echo "Pendidikan Terakhir   : $Pendidikan <br>";
    echo "Jabatan   : $jabatan <br>";

    if ($jabatan == "Direktur") {
        $gaji = 10000000;
        echo "Gaji : Rp.$gaji <br>";
    } elseif ($jabatan == "Manager") {
        $gaji = 7500000;
        echo "Gaji : Rp.$gaji <br>";
    } elseif ($jabatan == "Sekertaris") {
        $gaji = 5000000;
        echo "Gaji : Rp.$gaji <br>";
    } elseif ($jabatan == "Karyawan") {
        $gaji = 3000000;
        echo "Gaji : Rp.$gaji <br>";
    } elseif ($jabatan == "OB") {
        $gaji = 1500000;
        echo "Gaji : Rp.$gaji <br>";
    }

    echo "<h3>Tunjangan</h3>";

    if ($Pendidikan == "SD") {
        $tunjangan = 200000;
        echo "Tunjangan pendidikan : Rp.$tunjangan <br>";
    } elseif ($Pendidikan == "SMP") {
        $tunjangan = 500000;
        echo "Tunjangan pendidikan : Rp.$tunjangan <br>";
    } elseif ($Pendidikan == "SMA") {
        $tunjangan = 1000000;
        echo "Tunjangan pendidikan : Rp.$tunjangan <br>";
    } elseif ($Pendidikan == "S1") {
        $tunjangan = 1500000;
        echo "Tunjangan pendidikan : Rp.$tunjangan <br>";
    } elseif ($Pendidikan == "S2") {
        $tunjangan = 2000000;
        echo "Tunjangan pendidikan : Rp.$tunjangan <br>";
    } else {
        echo "no";
    }

    $vs = $Lembur * 20000;
    echo "Vakasi lembur : Rp.$vs";
    echo "<br>";

    if ($Status == "Tetap") {
        $Status1 = 500000;
        $totalgaji = ($gaji + $tunjangan + $vs + $Status1) - $Potongan;
        echo "Bonus Status Kerja : Rp.$Status1";
    } elseif ($Status == "Kontrak") {
        $Status1 = 0;
        $totalgaji = ($gaji + $tunjangan + $vs + $Status1) - $Potongan;
        echo "Bonus Status Kerja : Rp.$Status1";
    } else {
        echo "no";
    }

    echo "<h3>Potongan</h3>";
    echo "Potongan BPJS :Rp.$Potongan <br>";
    echo "Total Gaji :Rp.$totalgaji";
    echo "<tr>";
    echo "<td></td><td></td><td><p align=right>Bendahara : $Bendahara</p></td> ";
    echo "</tr>";

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