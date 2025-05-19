<?php include "randevuform1kontrol.php"; ?>
<form name="randevu" method="post" action="randevuyiekle.php">
    <div id="formsekil">
        <table width="1000" height="500" border="0">
            <tr>
                <td width="189">T.C. Kimlik No</td>
                <td width="795">
                    <input name="tc" type="text" class="txt" id="tc" value="<?php if (@$_SESSION['oturumuye'] == true) { echo $_SESSION["tc"]; } ?>" maxlength="11" />
                </td>
            </tr>
            <tr>
                <td width="189">Adı</td>
                <td width="795">
                    <input class="txt" type="text" name="ad" id="ad" value="<?php if (@$_SESSION['oturumuye'] == true) { echo $_SESSION["ad"]; } ?>" />
                </td>
            </tr>
            <tr>
                <td>Soyadı</td>
                <td>
                    <input class="txt" type="text" name="soyad" id="soyad" value="<?php if (@$_SESSION['oturumuye'] == true) { echo $_SESSION["soyad"]; } ?>" />
                </td>
            </tr>
            <tr>
                <td>Telefon</td>
                <td>
                    <input name="tel" type="text" class="txt" id="tel" value="<?php if (@$_SESSION['oturumuye'] == true) { echo $_SESSION["tel"]; } ?>" maxlength="11" />
                </td>
            </tr>
            <tr>
                <td>Tarih</td>
                <td>
                    <input name="tarih" type="text" class="txt" id="tarih" value="<?php echo $_POST["tarihilk"] ?>" readonly="readonly" />
                </td>
            </tr>
            <tr>
                <td>Saat</td>
                <td>
                    <select class="txt" name="saat">
                        <?php include "randevucombosaat.php"; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>E-Posta Adresi</td>
                <td>
                    <input class="txt" type="email" name="eposta" id="eposta" value="<?php if (@$_SESSION['oturumuye'] == true) { echo $_SESSION["eposta"]; } ?>" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input class="btn" type="submit" name="al" id="al" value="Randevu Al" />
                    <input class="rst" type="reset" name="temizle" id="temizle" value="Temizle" />
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <p>&nbsp;</p>
                    <p>Tarih: <?php echo Date('d-m-Y') ?> <br /> Saat &nbsp;: <?php date_default_timezone_set('Europe/Istanbul'); echo Date('H:i:s'); ?></p>
                </td>
            </tr>
        </table>
    </div>
</form>

<table width="1000" border="0">
    <tr>
        <td text-align="center">
            <?php if (@$_SESSION['oturumuye'] == true) { ?>
                <form name='randevuSil' method='post' action='uye_randevulari_sil.php'>
                    <input class='btn' type='submit' name='sil' id='sil' value='Randevuları Sil' />
                </form>
            <?php } ?>
        </td>
    </tr>
</table>
