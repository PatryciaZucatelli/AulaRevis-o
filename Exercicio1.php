
<! DOCTYPE html>
<html lang="pt-br">
 <cabeça>
 <meta charset="UTF-8">
 <título>Variáveis em PHP</título>
 </cabeça>
 <corpo>
 <?php
   $salarioAtual = 2500;
   $aumento = ((2500*15)/100);

   $NovoSalario = ($salarioAtual + $aumento);

 echo "Seu novo salário é: ". $NovoSalario . "<br>";
 
 ?>
 </corpo>
</html>

<br>