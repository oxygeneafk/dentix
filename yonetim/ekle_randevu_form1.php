
<form name="form1"  method="post" action="eklerandevu2.php" >
<div id="formsekil">
<table width="470" border="0">
  <tr>
    <td width="146" class="yazi">Randevu Tarihi</td>
    <td width="314"><label for="tarihilk"></label>
      <input type="date" class="txt" name="tarihilk" id="tarihilk" value="<?php echo date("Y-m-d"); ?>"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" class="btn" name="ileri" id="ileri" value="  İleri  "  ><?php   ?>
    
    </td>
  </tr>
</table>
</div>
<p style="color:#F00" >&nbsp;</p>
<p style="color:#F00" >&nbsp;</p>
</form>
