<?PHp 


function fc_ventana_principal_ini($titulo='',$ancho='100%')
	{



		?><table width="<?PHp echo $ancho;?>" border="0" cellspacing="0" cellpadding="00" align=center >
		<tr>
		    <td style="background-color:#FFF;" ><a boder=0 href="."><img style="cursor:pointer;" title="Ir a la Pagina Principal" width="58" height="58" src="../images/ico/home_2.png"></a><span style="padding:30px;"><h1 style="padding-left:30px;"><?PHp  echo strtoupper($titulo);?></h1><hr width="98%" align=center ><?PHp

	}

function fc_ventana_principal_fin()
	{
		?></span></td>
		</tr>
		</table><?PHp


	}

function fc_stylos_generales($title)
	{

		?><html>
<head>
	<title><?PHp echo $title;?></title>
	<link rel="stylesheet" href="../css/jq.css" type="text/css" media="print, projection, screen" />
	<link rel="stylesheet" href="../css/themes/blue/style.css" type="text/css" media="print, projection, screen" />
	<script type="text/javascript" src="../js/jquery-latest.js"></script>
	<script type="text/javascript" src="../js/jquery.tablesorter.js"></script>
	<script type="text/javascript" src="../js/chili/chili-1.8b.js"></script>
	<script type="text/javascript" src="../js/docs.js"></script>
	<link rel="stylesheet" href="../css/main.css" type="text/css" media="print, projection, screen" />

</head>
<body><?PHp

	}