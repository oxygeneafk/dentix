<?php

include"baglantiDB.php";


?>
<table width="993" background-color="0" >
  <tr>
    
  </tr>
  <tr>
    <td width="597" height="80" background-color="#CCCCCC" class="yazi">
    <form id="form6" name="form6" method="post" action="sil_randevu_form_islemler.php">
     
      Kriter 
        <select class="cmb" name="sec" id="sec">
          <option>sec*</option>
          <option>id</option>
          <option>tc</option>
          <option>tarih</option>
          <option>saat</option>
      </select>
        <label for="silme"></label>
       Deger
        <input class="txt" type="text" name="silme" id="silme" />
<input class="btn" type="submit" name="sil" id="sil"  title="Randevu Silme" value="  Sil   " />
      
     
    </form></td>
  </tr>
</table>