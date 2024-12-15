<!DOCTYPE html>
<html>
   
	<head>
	<link rel="stylesheet" type="text/css" href="total/css_table/main.css">
    <style>
	.content {
  	max-width: auto;
  	margin: auto;
			 }
	</style>
           
	</head>   
<center>
		<body>
        <div class="content"> 
		<div class="container">
        <div class='wrap-table100'>  
        <div class='table100 ver1 m-b-110'>    
        <table data-vertable='ver1'>
          					<br>
              				<h2>TICKET DE COMPRA IMARKET</h2>
          					<br>
                        	<thead>
							<tr class='row100 head'>
							<th align="center" style='width:50px'>Folio</th> 
							<th class='column100 column4' data-column='column4'><center>Fecha</center></th>
							<th class='column100 column2' data-column='column2'><center>Cliente</center></th>
							<th class='column100 column3' data-column='column3'><center>Descripcion</center></th>
							<th class='column100 column4' data-column='column4'><center>Total $</center></th>
           					</tr>
							</thead>  
              <tbody>
				

<?php
require('conectar.php');
?>
			                      
<?php
$val = $_POST['valor']; //hace referencia al valor del folio ingresado en el formulario index
$tabla = $_POST['TABLA']; //hace referencia al nombre .$val. de la tabla mysql seleccionada en la variable del formulario index
$sql = "SELECT * from `".$tabla."` where Folio = ".$val.";"; // Codigo PHP Consulta segun folio ingresado en element_1 de pagina index
$result = mysqli_query($con, $sql);
while($crow = mysqli_fetch_assoc($result))
            {	
?>
<tr class='row100'>
<td style='width:10px'><center> <?php echo $crow['Folio'];?> </center></td>
<td> <center><?php echo $crow['Fecha']; ?></center></td>
<td> <center><?php echo $crow['Cliente']; ?></center></td>
<td> <center><?php echo $crow['Descripcion']; ?></center></td>
<td> <center><?php echo $crow['Total']; ?></center></td>
<!--<td><center><a href="editar_registro.php?EDITAME=<?php echo $crow['Folio']; ?>" class="edit_btn" >Edita</a></center></td>-->
</tr>
<?php
  	    	}		
?>

          	</tbody>
	    	</table>             
        	    
	</div>
	</div>
	<div>
	</div>
	</div>
	</div>
	</body>
  	</center>

	<h3 align="center">VENTA CLIENTE: General</h3>

	<h3 align="center">DESCRIPCION: </h3>
		<pre align="center">
Venta de accesorios PC/Móvil según Folio de venta


CONDICIONES DE GARANTÍA:
1.-La garantia de los productos en condiciones NUEVOS es 
de 20 días naturales a partir de la fecha de compra.
2.-Deben contar con su empaque y etiquetas en buen estado 
y legibles.
3.-La garantia es valida solo por cambio del mismo producto
ya que no se aceptan devoluciones.
4.-Toda garantia debe ser diagnósticada por un técnico de iMarket.
5.-El(Los) artículos no deben presentar daños físicos o alteraciones.
6.-Este comprobante es necesario para tramitar su garantía.
7.-En productos de segunda mano , se venden "Como están" 
y no cuentan con garantía revise cuidadosamente el producto 
y sus funciones, Solo se podrán regresar al día siguiente de 
su compra en el caso de que no presenten alteraciones o daño físico.

-------------------------------------------------------------
 iMarket Hermosillo, Sonora. Dunas 551-14 CP 83179 6622196283
	</pre>
	</html>