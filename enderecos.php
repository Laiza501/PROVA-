<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Endereços</title>

     <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
     <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css" />
    <script src="bootstrap/js/bootstrap.min.js"></script>


  </head>
  
  <body>



  <?php

session_start(); 
//pega o cep e coloca na url
$url="http://api.postmon.com.br/v1/cep/".$_POST['cep2']." ";

//entra na url e pega as informações
  $conteudo=file_get_contents($url);

//traduz as informações
  $json_str= json_decode($conteudo);

//separa as informações necessarias nas variaveis
  $_SESSION['cep']=$_POST['cep2'];
  $_SESSION['logradouro']=$json_str->logradouro;
  $_SESSION['estado']=$json_str->estado;
  $_SESSION['cidade']=$json_str->cidade;
  $_SESSION['bairro']=$json_str->bairro;

 header('location:CadastroForm2.php');


?>
      </body>
</html>