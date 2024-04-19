<?php
$nota1a = $_GET["nota1"];
$nota2a = $_GET["nota2"];
$nota1 = str_replace(",", ".", $nota1a);
$nota2 =  str_replace(",", ".", $nota2a);
floatval($nota1);
floatval($nota2);

$media = ($nota1 + $nota2)/2;
if($media < 4.00){
  echo "Media menor que 4,00\n";
  echo "reprovado\n";
}
elseif($media >= 4.00 && $media < 6.00){
  echo "Media maior ou iquat a 4,00 e menor que 6,00\n";
  echo "Exame final\n";
}
elseif($media >= 6.00 && $media <= 10.00){
  echo "Media maior ou iqual que 6,00\n";
  echo "Aprovado\n";
}
else{
  echo "Erro, media maior que 10,00\n";
}
?>