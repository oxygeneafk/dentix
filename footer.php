<table width="100%" height="20%" border="0" align="top" bgcolor="#666">
  <tr class="footer1">
    <td width="200" height="150">&nbsp;</td>
    <td width="220" height="150">
      <h3><img src="ikonlar/logo.png" width="175" height="45" /></h3>

      <?php
      include "baglantiDB.php"; 
      $sorgu = $conn->query("SELECT * FROM footeryazi ORDER BY id ASC LIMIT 1");
      if ($sorgu) {
        while ($satir = $sorgu->fetch_assoc()) {
          echo $satir["yazi"];
        }
      } else {
        echo "sorguda hata oluştu";
      }
      ?>
    </td>
    <td width="100" height="150">&nbsp;</td>
    <td width="220" height="150">
      <h3>Hızlı Linkler</h3>
      <div>
        <ul>
          <li><a href="index.php">Ana Sayfa</a></li>
          <li><a href="hakkimizda.php">Hakkımızda</a></li>
          <li><a href="tedaviler.php">Tedavilerimiz</a></li>
          <li><a href="sorulariniz.php">S.S.S.</a></li>
          <li><a href="iletisim.php">İletişim</a></li>
        </ul>
      </div>
    </td>
    <td width="100" height="150">&nbsp;</td>
    <td width="220" height="150">
      <h3>İletişim</h3>
      <?php
      include "baglantiDB.php"; 
      $sorgu = $conn->query("SELECT * FROM iletisim");
      if ($sorgu) {
        while ($satir = $sorgu->fetch_assoc()) {
          echo $satir["icerik"];
        }
      } else {
        echo "sorguda hata oluştu";
      }
      ?>
    </td>
    <td width="231" height="150" valign="bottom" align="right">
      <a href=""><img src="ikonlar/ok.png" alt="ok" border="0" /></a>
    </td>
  </tr>
  <tr class="footer2">
    <td height="50" colspan="7">
      <center>© Copyright 2024 Diş Polikliniği</center>
    </td>
  </tr>
</table>
