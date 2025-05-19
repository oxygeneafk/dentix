<?php include"tarihilk_kontrol.php"; ?>

<form name="randevu" method="post" action="duzenle_randevu_form_kaydet.php">
	<div id="formsekil">
  <table width="1000" height="500" border="0">
 	  <tr>
      <td width="189" class="yazi">İd</td>
      <td width="795">
      
     
        
        <input name="id" type="text" class="txt" id="id" value="<?php echo $satiraramaid['id']; ?>" readonly="readonly">
        
      
      </td>
      </tr>
      
     <tr>
      <td width="189" class="yazi">T.C. Kimlik No</td>
      <td width="795">
        <input name="tc" type="text" class="txt" id="tc" 
        value="<?php echo $satiraramaid['tc']; ?>" maxlength="11" />    
	 
	   </td>
    </tr>
    <tr>
      <td width="189" class="yazi">Adı</td>
      <td width="795">
        <input class="txt" type="text" name="ad" id="ad"
         value="<?php echo $satiraramaid['ad']; ?>" /></td>
    </tr>
    <tr>
      <td class="yazi">Soyadı</td>
      <td>
        <input class="txt" type="text" name="soyad" id="soyad" 
        value="<?php echo $satiraramaid['soyad']; ?>" /></td>
    </tr>
    <tr>
      <td class="yazi">Telefon</td>
      <td>
        <input name="tel"  type="text" class="txt" id="tel" 
        value="<?php echo $satiraramaid['tel']; ?>" maxlength="11" /></td>
    </tr>
    <tr>
      <td class="yazi">Tarih</td>
      <td>
        <input name="tarih" type="text" class="txt" id="tarih" 
        value="<?php  echo $_POST["tarihilk"] ?>" readonly="readonly" />
        </td>
    </tr>
    <tr>
      <td class="yazi">Saat</td>
      <td>
		<select class="txt" name="saat">
		<?php include "ekle_randevu_combosaat.php"; ?>
		</select>
        
		</td>
    </tr>
       <tr>
      <td class="yazi">E-Posta Adresi</td>
      <td>
        <input class="txt" type="email" name="eposta" id="eposta" 
        value="<?php echo $satiraramaid['eposta']; ?>" /></td>
    </tr>
    <tr>
      <td>
	 
	   </td>
      <td>
	  <input class="btn" type="submit" name="kaydet" id="kaydet" value="Kaydet" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
      
	   <p>&nbsp;</p>
	   <p>Tarih:<?php echo Date('d-m-Y') ?> <br/>
	     Saat &nbsp;:
	     <?php  date_default_timezone_set('Europe/Istanbul');
	    echo Date('H:i:s'); ?>
	  </p></td>
    </tr>
  </table>
  </div>
</form>
