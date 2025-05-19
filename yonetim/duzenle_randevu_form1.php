<?php

include"baglantiDB.php";


?>
<table width="993" border="0" >
  <tr>
    <td bgcolor="#CCCCCC" class="yazi"><form id="form1" name="form1" method="post" action="duzenlerandevu.php">
     
    
      <p>&nbsp;</p>
      <p>İd &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input class="txt" type="text" name="duzenleme" id="duzenleme" />
        
        Tarih
          <input class="txt" type="date" name="tarihilk" id="tarihilk" value="<?php echo date("Y-m-d"); ?>" />
       
        <input class="btn" type="submit" name="duzenle" id="duzenle" value="Düzenle" title="Randevu Düzenle" />
     
      
      </p>
      <p>&nbsp;</p>
    </form></td>
  </tr>
</table>