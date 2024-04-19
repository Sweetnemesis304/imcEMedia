<?php 
;
/*$ex_peso = isset($_GET["peso"]);
$ex_altura = isset($_GET["altura"]);
if ($ex_peso == FALSE || $ex_altura == FALSE ERRO){
  header("location:form_imc.php");
}*/
//else{
$peso1 = $_GET["peso"];
$altura1 = $_GET["altura"]
$peso = str_replace(",", ".", $peso1);
$altura =  str_replace(",", ".", $altura1);
floatval($peso);
floatval($altura);
$imc = $peso / ($altura * $altura);
echo "Seu imc é:";
//echo $imc . "\n";
if( $imc < 17.00){
    echo "17 ou menos\n";
    echo "Muito abaixo do peso\n";
}
elseif ( $imc > 17.00 && $imc < 18.49){
    echo "Entre 17 e 18,49\n";
    echo "Abaixo do peso\n";
}
elseif ( $imc > 18.5 && $imc < 24.99 ){
    echo "Entre 18,5 e 24,99\n";
    echo "Peso normal\n";
}
elseif($imc > 25.00 && $imc < 29.99){
  echo "Entre 25 e 29,99" . "\n";
  echo "Acima do peso" . "\n";
}
elseif ( $imc > 30.00 && $imc < 34.99 ){
    echo "Entre 30 e 34,99\n";
    echo "Obesidade I\n";
}
elseif ( $imc > 35.00 && $imc < 39.99 ){
    echo "Entre 35 e 39,99\n";
    echo "Obesidade II (severa)\n";
}
else {
    echo "Acima de 40\n";
    echo "Obesidade III (mórbida)\n";
}
//}

?>
