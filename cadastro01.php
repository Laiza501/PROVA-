<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Empresa XYZ</title>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css" />
    <script src="bootstrap/js/bootstrap.min.js"></script>
   


</head>  
<body>

   

<!------------------------CADASTRO------------------------------------------------> 
  



<?php

  //conexçao com o banco de dados
  $db = pg_connect('host=localhost port=5432 dbname=prova user=postgres password=123');
 
  //verfica conexão
  if(!$db){
      //se não houver conexão imprime mensagem
      print "Não foi possível conectar ao banco de dados";
    
  } else {

    $banco = "SELECT * FROM endereco WHERE  cep = '".$_POST['cep']."'";

//RECEBER A VARIAVEL DA CONSULTA E VERIFICA A LINHA DA CONEXÃO
 $verifica= pg_query($db, $banco);
 
 //PERCORRE A TABELA E CONSULTANDO NA VARIAVEL REGISTRADA $VERIFICA
 if(pg_num_rows ($verifica) > 0){
   ?>
      <!--CRIAÇÃO DE ALERTA BOOSTRAP-->   
           <div class="alert alert-danger" role="alert">
  <strong>Endereço já cadastrado!</strong>
</div>
          <!--CRIAÇÃO DE BOTÃO BOOSTRAP-->   
  <div class="col-xs-offset-0"><a href="CadastroForm2.php" class="btn btn-danger" >Voltar</a></td></div>
           
            
<?php 
   die; //MATA A CONDIÇÃO
   
   }else{


     // se houver conexão cadastra os dados no banco
    
     $sql = "insert into endereco (cep,numero, complemento, logradouro,bairro,cidade,estado) values('".$_POST['cep']."','".$_POST['numero']."','".$_POST['complemento']."','".$_POST['logradouro']."','".$_POST['bairro']."','".$_POST['cidade']."','".$_POST['estado']."')";
    
     pg_query($sql);
   
     echo "Dados Enviados com Sucesso";
    
  }
}

?>  
 

  <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
     </body>
</html>