
<div class="container">
  <form class="form" style="width: 450px !important" action="index.php?page=data" method="post">
    <table border="0" width="100%">
      <tr>
        <td>Cari ID Calon Karyawan</td>
        <td><input class="form-input" type="text" name="id" value="<?php echo $_POST['id']; ?>"></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td><input class="form-input" type="text" name="nama"></td>
      </tr>
      <tr>
        <td>Tanggal Test</td>
        <td><input class="form-input" type="date" name="tanggal"></td>
      </tr>
    </table><br><br>
    <input class="center button" type="submit" value="Cari">

  </form>
</div>