<table width="1000" height="225" border="0">
  <tr>
    <td width="490" height="139"><form name="form1" method="post" action="ayarlar_form_duzenle_islemler.php">
      <table width="441" height="132" border="0">
        <tr>
          <td width="123" class="yazi">id</td>
          <td width="353"><input class="txt" type="text" name="id" id="id" value="<?php  if(@$_SESSION['oturum']==true)  {  echo $_SESSION["id"]; }  ?>"></td>
          </tr>
        <tr>
          <td class="yazi">Kullanıcı</td>
          <td><input  class="txt" type="text" name="kullanici" id="kullanici"  value="<?php  if(@$_SESSION['oturum']==true)  {  echo $_SESSION["kullanici"]; }  ?>"></td>
          </tr>
        <tr>
          <td class="yazi">Şifre</td>
          <td><input  class="txt" type="text" name="sifre" id="sifre"  value="<?php  if(@$_SESSION['oturum']==true)  {  echo $_SESSION["sifre"]; }  ?>"></td>
          </tr>
        <tr>
          <td colspan="2"><input class="btn" type="submit" name="kaydet" id="kaydet" value="Kaydet"></td>
          </tr>
        </table>
      <p>&nbsp;</p>
    </form></td>
    <td width="494" height="139"><form name="form1" method="post" action="ayarlar_form_yeni_kullanici_ekleme_islemler.php">
      <table width="441" height="132" border="0">
        <tr>
          <td width="123" class="yazi">Kullanıcı</td>
          <td width="353"><input  class="txt" type="text" name="kullanici" id="kullanici"></td>
        </tr>
        <tr>
          <td class="yazi">Şifre</td>
          <td><input  class="txt" type="text" name="sifre" id="sifre"></td>
        </tr>
        <tr>
          <td colspan="2"><input  class="btn"  type="submit" name="kaydet" id="kaydet" value="Yeni Yetkili Ekle"></td>
        </tr>
      </table>
      <p>&nbsp;</p>
    </form></td>
  </tr>
  <tr>
    <td height="43" colspan="2"><form name="form2" method="post" action="ayarlar_form_sil_islemler.php">
      <input class="btn" type="submit" name="sil" id="sil" value="Şuanki Yekiliyi Sil">
    </form></td>
  </tr>
</table>
