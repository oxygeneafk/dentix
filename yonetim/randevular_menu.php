<?php

include"baglantiDB.php";


?>
<table width="993" border="0" >
  <tr>
    <td width="274" background-color="#CCCCCC"><form id="form3" name="form3" method="post" action="randevular_bugun.php">
      <input  class="btn" type="submit" name="bugun" id="bugun" title="Bugünün Randevuları" value=" Bugünün Randevuları  "  />
    </form>
    </td>
    <td width="320" background-color="#CCCCCC"><form id="form4" name="form4" method="post" action="randevular_tumu.php">
      <input class="btn" type="submit" name="tumu" id="tumu" title="Tüm Randevular" value="  Tüm Randevuları Listele  " />
    </form></td>
  </tr>
  <tr>
    <td colspan="3"><h1 text-align="center">&nbsp;</h1>
    <h1 text-align="center">Randevu İşlemleri</h1></td>
  </tr>
  <tr>
    <td width="274" background-color="#CCCCCC"><form id="form6" name="form6" method="post" action="sil_randevu_form_islemler.php">
      <p>
      <x class="yazi"> Kriter </x>
        <select class="cmb" name="sec" id="sec">
          <option>sec*</option>
          <option>id</option>
          <option>tc</option>
          <option>tarih</option>
          <option>saat</option>
      </select>
        <input class="btn" type="submit" name="sil" id="sil"  title="Randevu Silme" value="  Sil   " />
        <label for="silme"></label>
        </p>
      <p>
        <x class="yazi"> Deger </x>
        <input class="txt" type="text" name="silme" id="silme" />
      </p>
    </form></td>
    <td width="320" background-color="#CCCCCC">
    <form id="form2" name="form2" method="post" action="aramarandevu.php">
     <x class="yazi"> Kriter  </x> 
      <select class="cmb" name="sec" id="sec">
        <option selected="selected">tumu</option>
        <option>id</option>
        <option>tc</option>
        <option>isim</option>
        <option>soyisim</option>
        <option>tarih</option>
        <option>saat</option>
    </select>
      <label for="arama">
        <input
        
        
      class="btn" 
         type="submit" name="ara" id="ara" title="Randevu Arama" value="  Ara  " />
        <br />
        <x class="yazi"> Deger </x> 
        <input class="txt" type="text" name="arama" id="arama" />
</label>
    </form></td>
    <td width="377" background-color="#CCCCCC"><form id="form1" name="form1" method="post" action="duzenlerandevu.php">
      <p>
        <input class="btn" type="submit" name="duzenle" id="duzenle" value="  Düzenle  " title="Randevu Düzenle" />
        </p>
      <x class="yazi">
        İd &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input class="txt" type="text" name="duzenleme" id="duzenleme" /><br/>
        </x>
      <x class="yazi">Tarih
        <input class="txt" type="date" name="tarihilk" id="tarihilk" value="<?php echo date("Y-m-d"); ?>" /></x>
    </form></td>
  </tr>
</table>