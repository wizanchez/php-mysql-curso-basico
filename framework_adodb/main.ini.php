<?

global $conn,$conn_2;
require_once(C_FOLDERDB.'config/adodb/adodb.inc.php');



$conn = NewADOConnection(C_TYPEBD);
$conn->Connect(C_SERVER, C_USER, C_PASS, C_DB);

//->CONECCION DE LA BASE DE DATOS DOS

?>
