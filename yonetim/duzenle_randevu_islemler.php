<?php
include "baglantiDB.php";

$duzenleme = $_POST["duzenleme"];
$tarih = $_POST["tarihilk"];

if (empty($duzenleme) || empty($tarih)) {
    echo "<script>
            alert('Lütfen düzenleme için alanı doldurunuz');
            window.location = 'randevular.php';
          </script>";
} else {
    $stmt = $conn->prepare("SELECT * FROM randevular WHERE id = ?");
    $stmt->bind_param("i", $duzenleme);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($satir = $result->fetch_assoc()) {
            include "duzenle_randevu_form.php";
        }
    } else {
        echo "<script>
                alert('Bu id de Kayıt Bulunamadı');
                window.location = 'randevular.php';
              </script>";
    }

    $stmt->close();
}

$conn->close();
?>
