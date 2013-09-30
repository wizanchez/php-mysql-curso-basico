<?PHP session_start(); global $conn;
require_once(C_FOLDERCON.'config/defines.inc.php');
require_once(C_FOLDERCON.'config/adodb/adodb.inc.php');

$conn = NewADOConnection(C_TYPEBD);
$conn->Connect(C_SERVER, C_USER, C_PASS, C_DB);
header("X-Powered-By: node.js");
header("property: gsicolombia, wizanchez. luiswebcam@hotmail.com");
header("Cookie: Nulle, Nulle");
header("Server: Tomcamp");
date_default_timezone_set("America/Bogota");
?>
