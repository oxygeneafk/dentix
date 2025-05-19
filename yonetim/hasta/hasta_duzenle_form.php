<form name="form1" method="post" action="hasta_duzenle_form_islemler.php">
  <table width="1000" border="0">
    <tr>
      <td width="225" class="yazi">İd</td>
      <td width="759"><label for="id"></label>
      <input  class="txt"  name="id" type="text" id="id"   value="<?php echo $id; ?>" readonly="readonly" checked ></td>
    </tr>
    <tr>
      <td height="32" class="yazi">Tc. No.</td>
      <td><label for="tc"></label>
      <input name="tc" type="text" class="txt" id="tc" value="<?php echo $tc; ?>" maxlength="11"></td>
    </tr>
    <tr>
      <td class="yazi">Hasta Adı</td>
      <td><label for="ad"></label>
      <input class="txt" type="text" name="ad" id="ad" value="<?php echo $ad; ?>"></td>
    </tr>
    <tr>
      <td class="yazi">Hasta Soyadı</td>
      <td>
      <input class="txt" type="text" name="soyad" id="soyad" value="<?php echo $soyad; ?>"> </td>
    </tr>
    <tr>
      <td class="yazi">E-Mail</td>
      <td>
      <input class="txt" type="email" name="email" id="email" value="<?php echo $email; ?>"></td>
    </tr>
    <tr>
      <td class="yazi">Adres</td>
      <td>
      <input class="txt" type="text" name="adres" id="adres" value="<?php echo $adres; ?>"></td>
    </tr>
    <tr>
      <td class="yazi">Telefon</td>
      <td>
      <input name="telefon" type="text" class="txt" id="telefon" value="<?php echo $telefon; ?>" maxlength="11"></td>
    </tr>
    <tr>
      <td class="yazi">Kayıt Tarihi</td>
      <td>
      <input class="txt" type="date" name="k_tarih" id="k_tarih" value="<?php echo $k_tarih; ?>"></td>
    </tr>
    <tr>
      <td class="yazi">Doğum Tarihi</td>
      <td>
      <input class="txt" type="date" name="d_tarih" id="d_tarih" value="<?php echo $d_tarih; ?>"></td>
    </tr>
    <tr>
      <td class="yazi">Doğum Yeri</td>
      <td>
      <input class="txt" type="text" name="d_yeri" id="d_yeri" value="<?php echo $d_yeri; ?>"></td>
    </tr>
    <tr>
      <td class="yazi">İl</td>
      <td> <input class="txt" type="text" name="il" id="il" value="<?php echo $il; ?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input class="btn" type="submit" name="kaydet" id="kaydet" value="Kaydet"></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
