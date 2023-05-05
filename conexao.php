<?php 

$server = "localhost";
$user = "root";
$password = "";
$bd = "vergang";

if ($conn = mysqli_connect($server,$user,$password,$bd)) {
//    echo "Boa!";
}
else 
echo "Error!";


function msg($texto, $tipo) {
    echo 
    "<div class='bd-callout bd-callout-$tipo' >
     $texto
     </div>";
}


?>