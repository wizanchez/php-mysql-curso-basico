<?PHp 

	include('../config/conec.inc.php');
	include('funcion_color.fc.php');
	include('../funciones/fc_decoracion.php');

	#----------------------------------------------------------------------------
	#	CREO LA CONSULTA 
	/*	$queEmp = "SELECT 
						id
						,nombre
						,codigo_hex
						,fecha_entrada
						,fecha_actualizacion
					FROM 
						aux_color 
					";
	$a_resp = mysql_query($queEmp, $conn) or die('<br>*******<br>Error SQL !!! :'.mysql_error().'<br>*******');
	
	----------------------------------------------------------------------------
*/
	$a_resp =gl_get_color('','');


			##-----------------------------------------------------------------------
			#	IMPRIMO LOS ESTILOS GENERALES
			fc_stylos_generales('ADM...->Adicionar');
			#fc_bootstrap_js();
			##-----------------------------------------------------------------------


	##--------------------------------------------------------------------------------
	#	COLOCO A IMPRIMIR MI VENTANA PRINCIPAL
	fc_ventana_principal_ini(
								'Adm .... -> Listar'
								,'70%'
							);
	##--------------------------------------------------------------------------------

?>
    

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<form action="adm_color.save.php">
	<!-- inicio de las opciones-->
	<div align="right">
		<a href="adm_color.form.php?action=adicionar" class="btn  btn-primary" >
			
			Adicionar Color
		</a>
		
		  </div>
	<!-- inicio de las opciones-->


	<!-- inicio de la tabla html-->
	<table class="tablesorter" id="tabla_unico_id" >
		<!-- inicio de la cabecera de la tabla html-->
		<thead>
			<tr>
				<th>Opc</th>
				<th>ID</th>
				<th>Nombre</th>
				<th>Codigo</th>
				<th>fecha<br>Entrada</th>
				<th>fecha<br>Actualizacion</th>
				<th>Color</th>
			</tr>
		</thead>
		<!-- final de la cabecera de la tabla html-->
		<tbody>
	<?PHp 
	
	##--------------------------------------------------------------------------------
	#	SI EL NUMERO DE REGISTROS ES IGUAL O CERO
	#	ES PORQUE NO HAY NADA EN LA BASE DE DATOS 
	#if(mysql_num_rows($a_resp)==0){
	if(count($a_resp)==0){
		?><tr>
			<td align=center colspan=7 >No existen Registros</td>
		</tr><?PHp
		exit;
	}
	##--------------------------------------------------------------------------------

	##--------------------------------------------------------------------------------
	#	IMPRIMO EL ARREGLO
	#while ($a_resp2 = mysql_fetch_array($a_resp)) {
	for ($i=0; $i < count($a_resp); $i++) { 
			# code...
			?>		
			<tr>
				<td align=center >
						<img src="../images/ico/delete.png" width="22" height="22">
						<a href="adm_color.form.php?id=<?PHp echo $a_resp2['id']?>&action=edit">
								<img title="Click para editar" src="../images/ico/edit.png" width="22" height="22">
						</a>
				</td>
				<td><?PHp  echo $a_resp[$i]['id_color'];?></td>
				<td><?PHp  echo $a_resp[$i]['nombre_color'];?></td>
				<td><?PHp  echo $a_resp[$i]['codigo_hex'];?></td>
				<td><?PHp  echo $a_resp[$i]['fecha_entrada'];?></td>
				<td><?PHp  echo $a_resp[$i]['fecha_actualizacion'];?></td>
				<td>
					<div style="border-radius:5px; background-color:<?PHp  echo $a_resp[$i]['codigo_hex'];?>">.</div>
				</td>
			</tr>
<?PHp }/*FIN DEL FOR*/?>
		</tbody>
	</table>
	<!-- final de la tabla html-->
<?PHp 
	##--------------------------------------------------------------------------------
	##	FIN DE LA TABLA PRINCIPAL
	fc_ventana_principal_fin();
	##--------------------------------------------------------------------------------

?>
<script >

		jQuery("#tabla_unico_id").tablesorter({
												//sortList:[[2,0],[3,0]], 
												sortList:[[5,1]], 
												widgets: ['zebra']
											});

</script>


</body>
</html>