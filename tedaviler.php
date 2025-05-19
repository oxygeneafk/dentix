<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hakımızda</title>
<link href="imaj.css" rel="stylesheet" type="text/css" />
<link href="tedaviler.css" rel="stylesheet" type="text/css">
</head>


<body>
<div id="tedaviler">
<?php
include('header.php');
?>
<div id="tedavilericerik">
<h1 color="red" text-align="center">Tedavilerimiz</h1>
<?php include('tedaviler/tedavilericerik.php'); ?>
<p color="red" text-align="center">&nbsp;</p>

</div>
<?php
include('footer.php');
?>
</div>
</body>
</html>