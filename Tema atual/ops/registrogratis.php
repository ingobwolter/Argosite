                                 
<?php  

$mensagem = $_POST["email"]; 


$conteudo = "$mensagem".";"; 

$mensagem .= ";";

$f = fopen("registrogratis.txt", "rw+");

$conteudo = "";
if(filesize("registrogratis.txt") > 0)
  $conteudo = fread($f, filesize("registrogratis.txt"));

file_put_contents("registrogratis.txt", $mensagem, FILE_APPEND);

echo "\n";
echo file_get_contents("registrogratis.txt");

fclose($f);  
?>
