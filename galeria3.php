<!doctype html>
<html><!-- InstanceBegin template="/Templates/plantillabase.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="iso-8859-1">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Corpodanza - Danza Ecuatoriana</title>
<link rel="stylesheet" type="text/css" href="css/galeria1.css" />
<link rel="stylesheet" type="text/css" href="css/galeria2.css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="js/galeria1.js"></script>
<script type="text/javascript" src="js/galeria2.js"></script>

<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<link href="css/estiloprincipal.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/menu.css" type="text/css">
<link href=<link href='http://fonts.googleapis.com/css?family=Cardo:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<script type="text/javascript">
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
</script>
</head>

<body>

<div class="container">
  <div class="header"><!-- InstanceBeginEditable name="ParteSuperior" -->
    <?php include("includes/cabecera.php"); ?>
    <?php include("includes/menu.php"); ?>
     <?php include("includes/google.php"); ?>
   <?php
 	$nombre="images/galeria3/fichero.txt";
  	$f = @fopen($nombre,r) or die("Error al abrir el archivo: $nombre");
  	fclose($f);
  	$v = file($nombre);
  	$cantidad = count($v);
	 ?>
 
  <!-- InstanceEndEditable --></div>
   
  <div class="sidebar1"><!-- InstanceBeginEditable name="Contenido_Iz" -->
    <p>&nbsp;</p>
   <div id="gallery">
		<div class="pic " style="background:url(images/galeria3/imagen001.jpg) no-repeat 50% 50%;">
		<a href="images/galeria3/imagen001.jpg" title= "<?php echo $v[0]; ?>" target="_blank">$linea[1]</a>
		</div>
		<div class="pic " style="background:url(images/galeria3/imagen002.jpg) no-repeat 50% 50%;">
		<a href="images/galeria3/imagen002.jpg" title="<?php echo $v[1]; ?>" target="_blank">bw</a>
		</div>
		<div class="pic " style="background:url(images/galeria3/imagen003.jpg) no-repeat 50% 50%;">
		<a href="images/galeria3/imagen003.jpg" title="<?php echo $v[2]; ?>" target="_blank">furry-feline</a>
		</div>
		<div class="pic nomargin" style="background:url(images/galeria3/imagen004.jpg) no-repeat 50% 50%;">
		<a href="images/galeria3/imagen004.jpg" title="<?php echo $v[3]; ?>" target="_blank">ladybug</a>
		</div>
		<div class="pic " style="background:url(images/galeria3/imagen005.jpg) no-repeat 50% 50%;">
		<a href="images/galeria3/imagen005.jpg" title="<?php echo $v[4]; ?>" target="_blank">lonely-anguish</a>
		</div>
		<div class="pic " style="background:url(images/galeria3/imagen006.jpg) no-repeat 50% 50%;">
		<a href="images/galeria3/imagen006.jpg" title="<?php echo $v[5]; ?>" target="_blank">pristine-lake</a>
		</div>
		<div class="pic " style="background:url(images/galeria3/imagen007.jpg) no-repeat 50% 50%;">
		<a href="images/galeria3/imagen007.jpg" title="<?php echo $v[6]; ?>" target="_blank">promotion</a>
		</div>
		<div class="pic nomargin" style="background:url(images/galeria3/imagen008.jpg) no-repeat 50% 50%;">
		<a href="images/galeria3/imagen008.jpg" title="<?php echo $v[7]; ?>" target="_blank">red-head</a>
		</div>
		<div class="pic " style="background:url(images/galeria3/imagen009.jpg) no-repeat 50% 50%;">
		<a href="images/galeria3/imagen009.jpg" title="<?php echo $v[8]; ?>" target="_blank">tattoo</a>
		</div>
		<div class="pic " style="background:url(images/galeria3/imagen010.jpg) no-repeat 50% 50%;">
		<a href="images/galeria3/imagen010.jpg" title="<?php echo $v[9]; ?>" target="_blank">tiger</a>
		</div>
		<div class="pic " style="background:url(images/galeria3/imagen011.jpg) no-repeat 50% 50%;">
		<a href="images/galeria3/imagen011.jpg" title="<?php echo $v[10]; ?>" target="_blank">wedding_catwalk</a>
		</div>
		<div class="pic nomargin" style="background:url(images/galeria3/imagen012.jpg) no-repeat 50% 50%;">
		<a href="images/galeria3/imagen012.jpg" title="<?php echo $v[11]; ?>"" target="_blank">white-stallion</a>
		</div><div class="clear"></div>
</div>

  <!-- InstanceEndEditable --><!-- end .sidebar1 --></div>
 <div class="content"><!-- InstanceBeginEditable name="Contenido_Der" -->
 <p>&nbsp; </p>
 <h3>Ecuador Baila</h3>
  <p>&nbsp; </p>
 <?php
  $ar=fopen("images/galeria3/fichero2.txt","r") or
    die("No se pudo abrir el archivo");
  while (!feof($ar))
  {
    $linea=fgets($ar);
    $lineasalto=nl2br($linea);
    echo $lineasalto;
  }
  fclose($ar);
  ?>
   <h1>&nbsp;</h1>
 <!-- InstanceEndEditable -->
  <!-- end .content --></div>
<div class="footer">
   <?php include("includes/pie.php"); ?>
  <img src="images/REGISTRADO.png" alt="reg" width="20" height="20" class="reg" onClick="MM_openBrWindow('includes/login.php','','width=550,height=450')">
<!-- end .footer -->
  <!-- end .container --></div>
</body>
<!-- InstanceEnd --></html>
