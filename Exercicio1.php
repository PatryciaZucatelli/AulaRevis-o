
<! DOCTYPE html>
<html lang="pt-br">
 <cabeça>
 <meta charset="UTF-8">
 <título>Cálculo de reajuste de salário</título> <br><br>
 </cabeça>
 <corpo>
 <?php
   $salarioAtual = 2500;
   $aumento = ((2500*15)/100);

   $NovoSalario = ($salarioAtual + $aumento);

  echo "Seu salário Atual é: " . $salarioAtual . "<br>";
  echo " Com o aumento de 15%, seu novo salário é: ". $NovoSalario . "<br>";
 
 ?>
 </corpo>
</html>

<br>