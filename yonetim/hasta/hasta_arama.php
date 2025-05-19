<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ayarlar</title>
<link href="../girisSekil.css" rel="stylesheet" type="text/css" />
<link href="../formsekil.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php  
session_start(); 
if(!isset($_SESSION['oturum']) || $_SESSION['oturum'] !== true) {
    header("Location:../index.php");
    exit;
}
?>
<div id="kapsul">
    <div id="header">
        <?php include "header.php"; ?>
    </div>
    <div id="content">
        <br/><br/>
        <h1><center>Ayarlar</center></h1>
        <?php include "../ayarlar/ayarlar_form.php"; ?>
        <br/><br/><br/><br/><br/><br/><br/><br/><br/>
    </div>
    <div id="footer">
        <?php include "footer.php"; ?>
    </div>
</div>
</body>
</html>
