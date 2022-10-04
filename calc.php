<?php
$idade= $_POST ['idade'];
if ($idade >=18){
    echo "Maior de idade";
}
else ($idade <18){
    echo "Menor de idade";
    echo "Fim da programação";
}
?>
