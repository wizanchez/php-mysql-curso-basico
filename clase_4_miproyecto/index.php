
<HTML><!-- INICIALIZO MIS TAG HTML-->
	
	<HEAD><!-- INICIO EL TAG DE LA CABECERA-->

<!--<META HTTP-EQUIV='Refresh' CONTENT='1; URL=index.php'>-->

	<!-- CREO MI TAG TITLE PARA DARLE UN NOMBRE Y SE MUESTRE EN LA PESTAÑA DEL EXPLORADOR-->
		<TITLE>mi primer proyecto</TITLE>

<!-- CREO MI TAG STYLE, PARA DARLE FORMA VIZUAL A MI HTML-->
<style type="text/css">

.all_td{
	/*cambia el color del text*/
	color:#cccccc;  
	
	/*le doy espacio en la parte superior para empezar a representar*/	
		padding-top:20px;
	
	/*le doy espacio en la parte izquierda para empezar a representar*/	
		padding-left:20px;

	/*le asigno la fuente al estilo*/
		font-family: vernada;

	/*cambia el tamaño de la letra*/
		font-size: 30px;

	/* coloco una imagen al fondeo de mi estilo*/	
		background-image:url("imagenes/indice.jpg");

	/* coloco los bordes redondeados*/
		border-radius: 40px;

}

</style>

	</HEAD><!-- TERMINO EL TAG DE LA CABECERA-->

	<BODY><!-- INICIO EL CUERPO DE MI ARCHIVO HTML-->

	
	<table border="1"  ><!--  inicia mi tabla, CON UNA PROPIEDAD PARA QUE SE VEA EL BORDE-->
	<tr><!-- CREO LA  FILA-->
		<td bgcolor=red >1</td><!-- CREO LA  COLUMNA 1, CON UN FONDO DE COLOR ROJO bgcolor=red-->
		
		<td style="color:white;background-color:#cccccc"  >2</td><!-- CREO LA COLUMNA 2 con color de texto blanco,
																	y fondo GRIS-->
	</tr><!-- TERMINO LA FILA-->
	<tr><!-- INICIO LA FILA-->
		<td class="all_td" >3 jhdfjhdjfhj</td><!--  CREO LA COLUMNA, CON LA CLASE all_td, EL HEREDA TODOS LOS ESTILOS
													PREVIAMENTE INSCRITOS  -->
		<td class="all_td" ><?php echo (2+2)?></td><!-- CREO OTRA COLUMNA CON LA MISMA CLASE, Y HAGO UN EMBEBIDO DE 
													CODIGO PHP DONDE SE HACE UNA SUMA Y SE IMPRIME-->
	</tr><!-- TERMINO LA FILA-->
	</table><!-- TERMINO LA TABLA-->
	</BODY><!-- TERMINO EL CUERPO-->
</HTML><!-- TERMINO EL HTML->
