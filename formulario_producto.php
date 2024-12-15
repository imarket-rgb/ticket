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
              				<h2>ORDEN DE SALIDA IMARKET</h2>
          					<br>
                        	<thead>
							<tr class='row100 head'>
							<th align="center" style='width:50px'>Folio</th> 
							<!--<th class='column100 column2' data-column='column2'><center>idTicket</center></th>-->
							<th class='column100 column3' data-column='column3'><center>Ingreso</center></th>
							<th class='column100 column3' data-column='column3'><center>Nombre</center></th>
							<th class='column100 column3' data-column='column3'><center>Fecha Salida</center></th>
							<th class='column100 column4' data-column='column4'><center>Diagnostico</center></th>
                            <th class='column100 column4' data-column='column4'><center>Total $</center></th>
                            <th class='column100 column4' data-column='column4'><center>Detalles</center></th>
           					</tr>
							</thead>   
              <tbody>
				

<?php
require('conectar.php');
?>
			                      
<?php
$val = $_POST['valor']; //hace referencia al valor del folio ingresado en el formulario index
$tabla = $_POST['TABLA']; //hace referencia al nombre de la tabla mysql seleccionada en la variable del formulario index
$sql = "SELECT * from `".$tabla."` where Folio = ".$val.";"; // Codigo PHP Consulta segun folio ingresado en element_1 de pagina index
$result = mysqli_query($con, $sql);
while($crow = mysqli_fetch_assoc($result))
            {	
?>
<p align="center">-----------------------------------------------------------------</p>
<!--EN ESTA SECCION SE ASIGNAN LAS COLUMNAS DE LA TABLA-->
<tr class='row100'>
<td style='width:10px'><center> <?php echo $crow['Folio'];?> </center></td>
<td> <center><?php echo $crow['ingreso']; ?>  </center> </td>
<td> <center><?php echo $crow['Nombre']; ?>  </center> </td>
<td> <center><?php echo $crow['Fecha']; ?>  </center> </td>
<td> <center><?php echo $crow['Diagnostico']; ?></center></td>
<td> <center><?php echo $crow['Total']; ?></center></td>
<td> <center><?php echo $crow['Detalles']; ?></center></td>
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
	<pre align="center">


CONDICIONES DE GARANTÍA:
1.-La garantia de los productos en condiciones NUEVOS es 
de 20 días naturales a partir de la fecha de ENTREGA Y NO
ES ACUMULABLE, además, si el equipo tiene mas de 30 días en nuestro
establecimiento esta garantía no aplica ya que se pierde garantía con
nuestros proveedores a partir de su instalacion.
2.-En refacciones,deben contar con su empaque y etiquetas en 
buen estado y legibles.
3.-En Celulares mojado mojados y con piezas quebradas no hay garantia.
4.-Toda garantia debe ser diagnósticada por un técnico de iMarket.
5.-El(Los) artículos no deben presentar daños físicos o alteraciones.
6.-Este comprobante es necesario para tramitar su garantía.
7.-En productos de segunda mano , se venden "Como están" 
y no cuentan con garantía revise cuidadosamente el producto 
y sus funciones, Solo se podrán regresar al día siguiente de 
su compra en el caso de que no presenten alteraciones o daño físico.
8.-Pantallas con imagen borrosa y/o rayas , estan fracturadas internamente
debido a presion por ser aplastada o bateria en mal estado, en este caso
no aplica garantía.
9.-Diagnosticos sin costos, a excepcion de los que generen gastos en pruebas.
10.-TODA. REPARACION SE REALIZA CON EXTRICTAS NORMAS DE CALIDAD, SIN EMBARGO,
SIEMPRE HABRÁ EVIDENCIA DE QUE EL EQUIPO HA SIDO REPARADO Y MERMARA SU CALIDAD
ORIGINAL DE FABRICA, YA QUE ESTAN DISEÑADOS PARA PRESENTARSE SELLADOS.
===============================================================================

REVISIONES Y NOTAS ADICIONALES:
                    
-LIMPIEZA DE EQUIPO = OK!
-SE RECOMIENDA SERVICIO CADA 6 MESES
-ENFRIAMIENTO   = OK!
-FUNCIONALIDAD  = OK!
-SÍGUENOS EN FACEBOOK O INSTAGRAM Y RECIBE 30% DESCT. *TyC.
          
-------------------------------------------------------------------------------
iMarket Hermosillo, Sonora. Dunas 551-14 CP 83179 6622196283
	</pre>
	</body>
  	</center><br>
	</html>