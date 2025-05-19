<table width="1000" border="0" bgcolor="#CCCCCC">
  <tr>
    <td class="yazi" colspan="2" >
      <form name="form1" method="post" action="aramarandevu.php">
        <p>&nbsp;</p>
        <p>Tc
          <input name="tc" type="text" class="txt" id="tc" maxlength="11">
          
          Tarih
          <input class="txt" type="date" name="tarih" id="tarih" value="<?php echo date("Y-m-d"); ?>">
          Saat
          
          <select class="cmb" name="saat" id="saat">
            <option>08:00:00</option>
            <option>09:00:00</option>
            <option>10:00:00</option>
            <option>11:00:00</option>
            <option>13:00:00</option>
            <option>14:00:00</option>
            <option>15:00:00</option>
            <option>16:00:00</option>
            <option>17:00:00</option>
          </select>
          <input class="btn" type="submit" name="genisArama" id="genisArama" value="Ara" />
        </p>
        <p>&nbsp;</p>
    </form></td>
   
  </tr>
  
</table>
