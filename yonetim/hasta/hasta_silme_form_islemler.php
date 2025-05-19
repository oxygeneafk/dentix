<?php
include "../baglantiDB.php";

$sec = isset($_POST["sec"]) ? $_POST["sec"] : "";
$silme = isset($_POST["silme"]) ? $_POST["silme"] : "";

if ($sec == "" && $silme == "") {
    $sec = "id";
    $silme = isset($_GET["deger"]) ? $_GET["deger"] : "";
}

if ($sec == "sec*") {
    echo "<script>alert('Lütfen silme işlemi için kriter belirleyiniz'); window.location = 'index.php';</script>";
    exit();
} else {
    if ($sec == "id") {
        $queryCheckId = "SELECT * FROM hastalar WHERE id=?";
        $stmtCheckId = $conn->prepare($queryCheckId);
        $stmtCheckId->bind_param("i", $silme);
        $stmtCheckId->execute();
        $resultCheckId = $stmtCheckId->get_result();

        if ($resultCheckId->num_rows > 0) {
            $queryDeleteById = "DELETE FROM hastalar WHERE id=?";
            $stmtDeleteById = $conn->prepare($queryDeleteById);
            $stmtDeleteById->bind_param("i", $silme);

            if ($stmtDeleteById->execute()) {
                echo "<script>alert('Hasta Kaydı Başarılı Bir Şekilde Silindi'); window.location = 'index.php';</script>";
                exit();
            } else {
                echo "<script>alert('Hasta Kaydı Silinemedi - Sorguda Problem oluştu');</script>";
            }
        } else {
            echo "<script>alert('Hasta Kaydı Bulunamadı !!!'); window.location = 'index.php';</script>";
            exit();
        }
    }

    if ($sec == "tc") {
        $queryCheckTc = "SELECT * FROM hastalar WHERE tc=?";
        $stmtCheckTc = $conn->prepare($queryCheckTc);
        $stmtCheckTc->bind_param("s", $silme);
        $stmtCheckTc->execute();
        $resultCheckTc = $stmtCheckTc->get_result();

        if ($resultCheckTc->num_rows > 0) {
            $queryDeleteByTc = "DELETE FROM hastalar WHERE tc=?";
            $stmtDeleteByTc = $conn->prepare($queryDeleteByTc);
            $stmtDeleteByTc->bind_param("s", $silme);

            if ($stmtDeleteByTc->execute()) {
                echo "<script>alert('Hasta Kaydı Başarılı Bir Şekilde Silindi'); window.location = 'index.php';</script>";
                exit();
            } else {
                echo "<script>alert('Hasta Kaydı Silinemedi - Sorguda Problem oluştu');</script>";
            }
        } else {
            echo "<script>alert('Hasta Kaydı Bulunamadı !!!'); window.location = 'index.php';</script>";
            exit();
        }
    }
}

$stmtCheckId->close();
$stmtDeleteById->close();
$stmtCheckTc->close();
$stmtDeleteByTc->close();
$conn->close();
?>
