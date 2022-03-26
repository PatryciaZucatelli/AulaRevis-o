<! DOCTYPE html>
<html lang="pt-br">
 <cabeça>
 <meta charset="UTF-8">
 <título>Uso de Formulários</título>
 </cabeça>
 <corpo>
     <Form Action="MediaNota.php" method = "post">
  <input type = "text" name = "nome">
  <input type = "text" name = "nota1">
  <input type = "text" name = "nota2">
  <input type = "text" name = "nota3">
  <input type = "text" name = "nota4">


         <tipo de entrada = valor "enviar" = "Enviar">
         <tipo de entrada = valor "reset" = "Limpar">


     </forma>

 <?php
   
   echo "<p><h2>Dados enviados com sucesso!<h2><p/><hr>";
   echo "Nome: " . $_POST[nome]. "<br>";
   echo "Nota1: " . $_POST[nota1]. "<br>";
   echo "Nota2: " . $_POST[nota2]. "<br>";
   echo "Nota3: " . $_POST[nota3]. "<br>";
   echo "Nota4: " . $_POST[nota4]. "<br>";
   $média = ((nota1 + nota2 + nota3 + nota4)/4);
 
 ?>
 </corpo>
</html>