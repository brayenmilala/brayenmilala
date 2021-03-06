<?php
    session_start();
    if($_SESSION['status_login'] != true){
        echo '<script>window.location="login.php"</script>';
    }

 ?>
<html>
 <head> 
    <title>Forum Registrasi</title> 
 </head> 
 
 <body> 
 <h1>PENDAFTARAN ANGGOTA TOKO BRAYEN</h1> 

     <form method="POST" action="brayenform.php"> 
     <table border="0">

        <tr>
            <td>Nama Legkap  </td> 
            <td colspan="3"><input type="text" name="nama"/></td>
        </tr> 
        <tr>
            <td>Tempat Lahir </td> 
            <td colspan="3"><input type="text" name="Tempat tanggal lahir"/></td>
        </tr> 
        <tr>
            <td>No Ktp</td>
            <td colspan="3"><input type="text" name="no Ktpp" /></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><select name="Tanggal Lahir">
            <?php
            for ($t=1;$t<=31;$t++)
            echo "<option value=\"$t\">$t</option>";
            ?>     
            </td>
            <td><select name="bulan">
            <?php
            echo "<option value= Januari>Januari</option>";
            echo "<option value= Februari>Februari</option>";
            echo "<option value= Maret>Maret</option>";
            echo "<option value= April>April</option>";
            echo "<option value= Mei>Mei</option>";
            echo "<option value= Juni>Juni</option>";
            echo "<option value= Juli>Juli</option>";
            echo "<option value= Agustus>Agustus</option>";
            echo "<option value= September>September</option>";
            echo "<option value= Oktober>Oktober</option>";
            echo "<option value= November>November</option>";
            echo "<option value= Desember>Desember</option>";
            ?>
            </td>
            <td><select name="tahun">
            <?php
            for ($i=1970;$i<=1987;$i++)
            echo "<option value=\"$i\">$i</option>";
            ?>
            </td>
        </tr>
        <tr>
            <td>No Rekening</td>
            <td colspan="3"><input type="text" name="No rekening" /></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td colspan="3"><input type="radio" name="kelamin" value="laki-laki" />laki-laki
            <input type="radio" name="kelamin" value="perempuan" />perempuan
        </td>
        </tr>
        <tr>
            <td>Provinsi</td>
            <td colspan="3"><input type="text" name="sekolah" /></td>
        </tr>
        <tr>
            <td>Comment</td>
            <td colspan="4"><input type="text" name="uan" /></td>
        </tr>

     </table> 
    <input type="submit"  value="Simpan" /> 
    </form> 
  

 </body> 
</html> 