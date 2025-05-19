<table width="1000" background-color="0" >
  <tr>
    <td width="470" background-color="#CCCCCC">
   
    <form id="form1" name="form1" method="post" action="hasta_arama.php">
     <x class="yazi">Kullanıcı ara</x>
     <select class="cmb" name="sec" id="sec">
       <option selected="selected">tumu</option>
        <option>id</option>
        <option>tc</option>
        <option>isim</option>
        <option>soyisim</option>
        <option>tarih</option>
</select>
      <input class="txt" type="text" name="arama" id="arama"  />
      <input class="btn" type="submit" name="ara" id="ara" value="  Ara  " />
    </form></td>
    <td width="38" rowspan="3">&nbsp;</td>
    <td width="470" background-color="#CCCCCC"><form id="form2" name="form2" method="post" action="hasta_ekle.php">
      <input class="btn" type="submit" name="ekle" id="ekle" value=" Hasta  Ekle " />
    </form></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td background-color="#CCCCCC"><form id="form3" name="form3" method="post" action="hasta_silme_form_islemler.php">
      <x class="yazi">Kullanıcı sil</x>
      <select  class="cmb" name="sec" id="sec">
        <option selected="selected">sec*</option>
        <option>id</option>
        <option>tc</option>
  </select>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input class="txt" type="text" name="silme" id="silme" />
      <input
      class="btn"
       type="submit" name="Sil" id="Sil" value=" Sil  " />
    </form></td>
    <td background-color="#CCCCCC"><form id="form4" name="form4" method="post" action="hasta_duzenle.php">
      <x class="yazi">Güncellenecek Hastanın ID'si</x>
      <input class="txt" type="text" name="id" id="id" />
      <input class="btn" type="submit" name="duzenle" id="duzenle" value=" Duzenle " />
    </form></td>
  </tr>
</table>

