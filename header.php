<marquee>
    <img src="ikonlar/logo.png" width="15" height="15"/> &nbsp; &nbsp;
    <?php 
    include "baglantiDB.php"; 
    $sorgu = "SELECT * FROM kayanyazi ORDER BY id ASC LIMIT 1";
    $result = $conn->query($sorgu);
    if ($result && $result->num_rows > 0) {
        $satir = $result->fetch_assoc();
        echo htmlspecialchars($satir["icerik"]);
    } else {
        echo "Sorguda hata oluştu";
    }
    ?>
    &nbsp; &nbsp;<img src="ikonlar/logo.png" width="15" height="15"/>
</marquee>

<div id="header">
    <div id="logo">
        <table width="1000" height="92" border="0">
            <tr>
                <td width="330" height="92">
                    <p><img src="ikonlar/logo.png" alt="DOU diş kliniği" title="DOU Diş Kliniği" width="358" height="92"></p>
                </td>
                <td width="50">
                    <?php 
                    @session_start(); 
                    if(@$_SESSION['oturumuye']==true) { 
                       
                        echo "<center><a href='uyelikduzenle.php'><img src='ikonlar/ayar.png' alt='ayalar' width='35' height='35'/></a></center>";
                    }
                    ?>
                </td>
                <td width="100">
                    <center>
                        <?php 
                        @session_start();
                        if(@!$_SESSION['oturumuye']==true) { 
                           
                            echo "<a class='uyeolbtn' href='yonetim/index.php' title='üye ol'>Yonetici Girişi</a>";
                        }
                        ?>
                    </center>
                </td>
                <td width="100">
                    <center>
                        <?php 
                        @session_start(); 
                        if(@!$_SESSION['oturumuye']==true) { 
                           
                            echo "<a class='uyeolbtn' href='uyeol.php' title='üye ol'>Üye Ol</a>";
                        } else {
                            echo "<a class='uyesilbtn' href='uyesil.php' title='üyelik silme'>Üyelik Sil</a>";
                        }
                        ?>
                    </center>
                </td>
                <td width="100">
                    <center>
                        <?php 
                        @session_start(); 
                        if(@!$_SESSION['oturumuye']==true) { 
                           
                            
                            echo "<a class='girisbtn' href='uyegiris.php' title='üye girişi'>Üye Girişi</a>";
                        } else {
                            echo "<a class='cikisbtn' href='uye_cikis.php' title='üye çıkışı'>Üye Çıkış</a>";
                        }
                        ?>
                    </center>
                </td>
            </tr>
        </table>
        <table class="menu" bordercolor="#0057AE" height="44" width="1000" valign="top" border="0">
            <tr>
                <td width="141" class="button"><a href="index.php" title="Anasayfa" class="link">Anasayfa</a></td>
                <td width="153" class="button"><a href="hakkimizda.php" title="Hakkımızda" class="link">Hakkımızda</a></td>
                <td width="148" class="button"><a href="tedaviler.php" title="Tedaviler" class="link">Tedaviler</a></td>
                <td width="126" class="button"><a href="klinik.php" title="Klinik" class="link">Klinik</a></td>
                <td width="157" class="button"><a href="sorulariniz.php" title="Genel Sorular ve Cevaplar" class="link">Sorularınız...?</a></td>
                <td width="136" class="button"><a href="randevu.php" title="Online Randevu Alma" class="link">Randevu</a></td>
                <td width="109" class="button"><a href="iletisim.php" title="İletişim Bilgileri" class="link">İletişim</a></td>
            </tr>
        </table>
    </div>
</div>
