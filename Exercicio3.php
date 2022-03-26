<! DOCTYPE html>
<html lang="pt-br">
 <cabeça>
 <meta charset="UTF-8">
 <título>Uso de Formulários</título>
 </cabeça>
 <corpo>
     <Form Action="Exercicio3.php" method = "post">
  <input type = "text" name = "nome">
  <input type = "number" name = "nota1">
  <input type = "number" name = "nota2">
  <input type = "number" name = "nota3">
  <input type = "number" name = "nota4">


  <input type = "submit" value = "Enviar">
  <input type = "reset" value = "Limpar"> 
          
           

     </form>

 <?php 
 if (isset($_POST["nota1"])){

 
   
   echo "Nome: " . $_POST["nome"]. "<br>";
   echo "Nota1: " . $_POST["nota1"]. "<br>";
   echo "Nota2: " . $_POST["nota2"]. "<br>";
   echo "Nota3: " . $_POST["nota3"]. "<br>";
   echo "Nota4: " . $_POST["nota4"]. "<br>";
   $media = ((nota1 + nota2 + nota3 + nota4)/4);
 
   if ($media >=6){

    echo "Aprovado!";
   }else{
       echo "Reprovado!";
   }
}


 
 ?>
 </corpo>
</html>