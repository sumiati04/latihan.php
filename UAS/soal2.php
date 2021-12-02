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
      <div class="card container" style="width: 34em;">
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

      if (isset ($_POST['kirim'])){
          $bendahara = $_POST['bendahara'];
          $pekerja = $_POST['pekerja'];
          $jenis = $_POST['jk'];
          $tanggal = $_POST['tanggal'];
          $jabatan = $_POST['jabatan'];
          $pendidikan = $_POST['pendidikan'];
          $status = $_POST['status'];
          $lembur = $_POST['lembur'];
          $potongan = $_POST['potongan'];

          if ($jabatan == "Direktur"){
              $gaji = 1000000;
          }else if ($jabatan == "Manager"){
              $gaji = 7500000;
          }else if ($jabatan == "Sekertaris"){
              $gaji = 5000000;
          }else if ($jabatan == "Karyawan"){
              $gaji = 3000000;
          }else if ($jabatan == "OB"){
              $gaji = 1500000;
          }
          if ($status == "Tetap"){
              $bonus = 500000;
          }else if ($status == "Kontrak"){
              $bonus = 0;
          }
      }
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
