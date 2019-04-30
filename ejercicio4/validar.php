<html> 
  <head> 
  <title>	BIENVENIDO</title> 
  </head> 
  <body>
  <?php 
 
  function validar($cla1,$cla2)
  {
    if ($cla1!=$cla2)
    
	  echo "Claves no coinciden ";
  }
  
  validar($_REQUEST['clave'],$_REQUEST['claveConfirmacion']);
  ?>
</body> 
</html>