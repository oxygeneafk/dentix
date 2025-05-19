
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Randevular</title>
<link href="girisSekil.css" rel="stylesheet" type="text/css" />
<link href="formsekil.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php  session_start(); 
if(!$_SESSION['oturum']==true)
{
  header("Location:index.php");
}

 ?>
<div id="kapsul">
    <div   id="header">
        <?php include"header.php"; ?>
    </div>
  <div id="content">
     <br/><br/>
     <h1><center>Randevu Sil</center></h1>
     
     <?php include"sil_randevu_form.php";  ?>

	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
  </div>
      <div id="footer">
        <?php include"footer.php"; ?>
      </div>
</div>

</body>
</html>
