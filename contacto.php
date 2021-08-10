<?php require_once('Connections/conexioncreacion.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO contacto (nombre, email, ciudad, celular, asunto, mensaje, conocido, suma) VALUES (%s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['nombre'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['ciudad'], "text"),
                       GetSQLValueString($_POST['celular'], "text"),
                       GetSQLValueString($_POST['asunto'], "text"),
                       GetSQLValueString($_POST['mensaje'], "text"),
                       GetSQLValueString($_POST['conocido'], "text"),
                       GetSQLValueString($_POST['suma'], "int"));

  mysql_select_db($database_conexioncreacion, $conexioncreacion);
  $Result1 = mysql_query($insertSQL, $conexioncreacion) or die(mysql_error());

  $insertGoTo = "mensaje_enviado.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<!doctype html>
<html><!-- InstanceBegin template="/Templates/plantillabase.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="iso-8859-1">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Corpodanza - Contacto</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
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
  <!-- InstanceEndEditable --></div>
   
  <div class="sidebar1"><!-- InstanceBeginEditable name="Contenido_Iz" -->
    <h1>Contacto</h1>
    <p>&nbsp;</p>
    <div id="content-content">
      <div id="node-9">
        <div></div>
        <div>
          <p>Juan de Alcazar S6-156 y Pedro Cepero Ed. Moreno 3er Piso<br />
            Chimbacalle, cienco esquinas Quito-Ecuador<br />
          Tel: 593-2-5008433 Cel: 09-83006194</p>
          <p>&nbsp;</p>
          <p><a href="donde_estamos.php"> <strong>Como llegar</strong></a></p>
          <p><a href="http://www.escueladedanzabarcelona.es/donde-estamos"><br />
          </a>Los campos con * son obligatorios</p>
        </div>
      </div>
    </div>
    <p><form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
      <table align="center">
        <tr valign="baseline">
          <td width="79" align="right" nowrap="nowrap"><p><strong>Nombre: <span class="rojo">*</span></strong></p></td>
          <td width="378"><span id="sprytextfield1">
            <input type="text" name="nombre" value="" size="32" />
          <span class="textfieldRequiredMsg">Se necesita un valor.</span></span></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right"><p><strong>Email: <span class="rojo">*</span></strong></p></td>
          <td><span id="sprytextfield2">
          <input type="text" name="email" value="" size="32" />
          <span class="textfieldRequiredMsg">Se necesita un valor.</span><span class="textfieldInvalidFormatMsg">Formato no válido.</span></span></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right"><p><strong>Ciudad: <span class="rojo">*</span></strong></p></td>
          <td><span id="sprytextfield3">
            <input type="text" name="ciudad" value="" size="32" />
          <span class="textfieldRequiredMsg">Se necesita un valor.</span></span></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right"><p><strong>Celular: <span class="rojo">*</span></strong></p></td>
          <td><span id="sprytextfield4">
          <input type="text" name="celular" value="" size="32" />
          <span class="textfieldRequiredMsg">Se necesita un valor.</span><span class="textfieldInvalidFormatMsg">Formato no válido.</span></span></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right"><p><strong>Asunto:</strong></p></td>
          <td><select name="asunto">
            <option value="1" <?php if (!(strcmp(1, ""))) {echo "SELECTED";} ?>>Clases Regulares</option>
            <option value="2" <?php if (!(strcmp(2, ""))) {echo "SELECTED";} ?>>Cursillos - Masterclass</option>
            <option value="3" <?php if (!(strcmp(3, ""))) {echo "SELECTED";} ?>>Cursos de Verano</option>
            <option value="4" <?php if (!(strcmp(4, ""))) {echo "SELECTED";} ?>>Clases Particulares</option>
            <option value="5" <?php if (!(strcmp(5, ""))) {echo "SELECTED";} ?>>Contratar Grupo de Baile</option>
            <option value="6" <?php if (!(strcmp(6, ""))) {echo "SELECTED";} ?>>Alquiler de Sala</option>
            <option value="7" <?php if (!(strcmp(7, ""))) {echo "SELECTED";} ?>>Otros</option>
          </select></td>
        </tr>
        <tr valign="baseline">
          <td align="right" valign="top" nowrap="nowrap"><p><strong>Mensaje: <span class="rojo">*</span></strong></p></td>
          <td><textarea name="mensaje" cols="75" rows="5"></textarea></td>
        </tr>
        <tr valign="baseline">
          <td align="right" valign="top" nowrap="nowrap"><p><strong>Conocido:</strong></p></td>
          <td valign="baseline"><table>
            <tr>
              <td><input type="radio" name="conocido" value="1" />
                A través de un amigo</td>
            </tr>
            <tr>
              <td><input type="radio" name="conocido" value="2" />
                A través de Presentaciones</td>
            </tr>
            <tr>
              <td><input type="radio" name="conocido" value="3" />
                A Trav&eacute;s de zonas culturales</td>
            </tr>
            <tr>
              <td><input type="radio" name="conocido" value="4" />
                Publicidad personal</td>
            </tr>
            <tr>
              <td><input type="radio" name="conocido" value="5" />
                Google</td>
            </tr>
            <tr>
              <td><input type="radio" name="conocido" value="6" />
                Otros buscadores</td>
            </tr>
          </table></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right"><p><strong>Captcha: <span class="rojo">*</span></strong></p></td>
          <td><p>Esta pregunta es para verificar que usted es una persona real e impedir el env&iacute;o automatizado de mensajes basura. </p>
            <p>Pregunta matem&aacute;tica: *</p>
            <p>10 + 4 =
              <span id="sprytextfield5">
              <input type="text" name="suma" value="" size="32" />
            <span class="textfieldRequiredMsg">Se necesita un valor.</span><span class="textfieldInvalidFormatMsg">Formato no válido.</span><span class="textfieldMaxCharsMsg">Se ha superado el número máximo de caracteres.</span></span> </p>
          <p>Resuelva este sencillo problema matem&aacute;tico e ingrese el resultado. Por ejemplo para 1 +3, escriba 4.</p></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right"><p>&nbsp;</p>
          <p>&nbsp;</p></td>
          <td><p>
             
          </p>
          
          <a class="button" href="javascript:document.form1.submit();"><span>Enviar Mensaje</span></a></td> 
          
        </tr>
      </table>
      <input type="hidden" name="MM_insert" value="form1" />
    </form>
    <p>&nbsp;</p>
  <!-- InstanceEndEditable --><!-- end .sidebar1 --></div>
 <div class="content"><!-- InstanceBeginEditable name="Contenido_Der" -->
   <h1>&nbsp;</h1>
  <img src="images/varios/1094991_10202049701309227_1781222160_n.jpg" width="300" height="220">
    <h1>&nbsp;</h1>
    <img src="images/varios/1176406_10202087470973445_1730227920_n.jpg" width="300" height="200">
<h1>&nbsp;</h1>
        <h1>&nbsp;</h1>
          <h1>&nbsp;</h1>
  
    <script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["blur"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "email", {validateOn:["blur"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {validateOn:["blur"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "custom", {validateOn:["blur"], pattern:"0000000000", hint:"0998315935"});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "custom", {validateOn:["blur"], pattern:"14"});
   </script>
 <!-- InstanceEndEditable -->
  <!-- end .content --></div>
<div class="footer">
   <?php include("includes/pie.php"); ?>
  <img src="images/REGISTRADO.png" alt="reg" width="20" height="20" class="reg" onClick="MM_openBrWindow('includes/login.php','','width=550,height=450')">
<!-- end .footer -->
  <!-- end .container --></div>
</body>
<!-- InstanceEnd --></html>
