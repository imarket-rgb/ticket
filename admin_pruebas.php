<!DOCTYPE html>
<html>
<head>	 
      
<!--======================================= ESTILO DE LA TABLA PLOMO ==============================-->      
	<title>TICKET IMARKET</title>
  	<meta charset="UTF-8">
	<link rel="icon" 		type="image/png" 	href="total/images/icons/favicon.ico"/>
	<link rel="stylesheet"  type="text/css" 	href="total/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet"  type="text/css" 	href="total/css_table/main.css">

      
<!--======================== ESTE ES EL ESTILO PARA LOS BOTONES Y EL CAJON DE BUSQUEDA=============-->	      
    <style>
		body {
		font-family: Arial;
			 }

		* {
  		box-sizing: border-box;
		}
		form.example input[type=text] {
  		padding: 10px;
  		font-size: 17px;
  		border: 1px solid grey;
  		float: left;
  		width: 80%;
  		background: #f1f1f1;
		}
		form.example button {
  		float: left;
  		width: 20%;
  		padding: 10px;
  		background: #2196F3;
  		color: white;
  		font-size: 17px;
  		border: 1px solid grey;
  		border-left: none;
  		cursor: pointer;
		}
		form.example button:hover {
  		background: #0b7dda;
		}
        form.example::after {
  		content: "";
  		clear: both;
  		display: table;
		}
  		h1 {text-align: left;}
  		h2 {text-align: left;}
  		p {text-align: left;}
        iframe{
        width: 100%;
        border: 2px solid #ccc;
    	}
   
    </style>
	</head>
<!--======================== ESTE ES EL ESTILO PARA LOS BOTONES Y EL CAJON DE BUSQUEDA=============-->      
	<body>
	    
 		<div class="limiter">
		<div class="container-table100">
		<div class="wrap-table100"> 
 		<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TICKET IMARKET</h1>
        <br>
        <br>&nbsp;FOLIO DE SERVICIO:&nbsp;&nbsp;&nbsp;&nbsp;TICKET DE COMPRA:
        <li id="li_1">
		<div>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="element_1" name="element_1" class="element text small" type="number" maxlength="10" value=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="element_2" name="element_2" class="element text small" type="number" maxlength="10" value=""/>
		</div> 
		</li>

         <div id="wrap">
		 <div id="header">
		 <p align="left">
		     
		 <script>

		function PasarValor() //PASAR VALOR DEL CUADRO DE TEXTO1 A VARIABLE valor PARA USARLA COMO FOLIO
		{
	    var palabra=element_1.value;// VALIDA QUE EL INPUT CONTENGA FOLIO
        if(palabra.length > 0 ) {
        document.getElementById("valor").value = document.getElementById("element_1").value;
        }
	    }
		function PasarValor2() //PASAR VALOR DEL CUADRO DE TEXTO2 A VARIABLE valor PARA USARLA COMO TICKET
        {
	    var palabra2=element_2.value;// VALIDA QUE EL INPUT CONTENGA FOLIO
        if(palabra2.length > 0 ) {
        document.getElementById("valor").value = document.getElementById("element_2").value;
        }
        }
		function PasarValor3() //PASAR VALOR AL PRESIONAR BOTON FOLIO A VARIABLE valor PARA USARLA COMO TABLA
        {
        document.getElementById("TABLA").value = "Orden_Salida";
        }
		function PasarValor4() //PASAR VALOR AL PRESIONAR BOTON TICKET A VARIABLE valor PARA USARLA COMO TABLA
        {
        document.getElementById("TABLA").value = "Ticket";
        }
        </script>
        
         <form class="example" target="_self"  method="post"  action="ver_tabla_pruebas.php" style= " margin-left: 1px; width: 425px;">
		 <input id="valor" name="valor" type="hidden" value="0"><!--VALOR DEL FOLIO-->
		 <input id="TABLA" name="TABLA" type="hidden" value=""><!--ASIGNAR NOMBRE DE LA TABLA-->
		 <button Id="boton1" name="boton1" style= " margin: 5px; width: 200px; background-color: #4CAF50 " type="submit" onclick="javascript: form.action='formulario_producto.php'; PasarValor(); PasarValor3();">Obtenga su Nota de Servicio</button>
		 <button id="boton2" name="boton2" style= " margin: 5px; width: 200px; background-color: #4CAF50 " type="submit" onclick="javascript: form.action='ver_tabla_pruebas.php'; PasarValor2(); PasarValor4();">Obtenga su Ticket de Compra</button>
        </form>
		
        </div>
		</div>
	   	</div>
  		</div>
		</div>
		<pre>
INSTRUCCIONES:
1.-Seleccione el recuadro Ticket o Folio dependiendo del comprobante que necesite.
2.-Presione obtener para ver su nota.
3.-Capture la pantalla o imprima desde el navegador.
	</pre>
	<img src="https://ticket-imarket.000webhostapp.com/Ticket/banner0.jpg"><br>
	<a title="face" href="https://www.facebook.com/profile.php?id=100063830899201"><img src="https://ticket-imarket.000webhostapp.com/Ticket/face.png" alt="face" /></a>&nbsp;&nbsp;
	<a title="insta" href="https://www.instagram.com/imarket_compumarket/"><img src="https://ticket-imarket.000webhostapp.com/Ticket/insta.png" alt="insta" /></a>&nbsp;&nbsp;
	<a title="wa" href="https://wa.me/526622196283"><img src="https://ticket-imarket.000webhostapp.com/Ticket/wa.jpg" alt="wa" /></a>
	<h1>Síguenos en Instagram o facebook y recibe un cupón de 30% desct.</h1>
    <br>*Aplican TyC.
    <br>
    <br>Tel. 662 2196283 Blvd Quiroga 551-14 entre Sostenes Rocha y Huatabampo. Hermosillo, Sonora.
    <br>iMarket iTechDev 2023©
    
<div id="sfc6wpmanzrp7wtpf8sxrnsmrxgph5csdh1"></div>
<script type="text/javascript" src="https://counter2.optistats.ovh/private/counter.js?c=6wpmanzrp7wtpf8sxrnsmrxgph5csdh1&down=async" async></script>


</body>
</html>