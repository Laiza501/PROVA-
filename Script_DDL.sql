CREATE TABLE ENDERECO 
(
    ID SERIAL PRIMARY KEY,
    LOGRADOURO VARCHAR(50) NOT NULL,
    NUMERO INT NOT NULL,
    COMPLEMENTO VARCHAR(30),
    BAIRRO VARCHAR(30) NOT NULL,
    CIDADE VARCHAR(30) NOT NULL,
    ESTADO VARCHAR(30) NOT NULL,
    CEP INT NOT NULL,
    UNIQUE(LOGRADOURO, NUMERO, COMPLEMENTO,CEP)
);





<?php

  // RECEBE AS VARIAVEIS DO BANCO PARA O FORMULÁRIO
$cep = $_POST['cep'];
$logradouro = $_POST['logradouro'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

  


// REALIZA A CONSULTA DA TABELA DE ENDERECO
    $sql = "SELECT * FROM endereco WHERE cep = '$cep'";

     $sql = "INSERT INTO endereco (CEP,LOGRADOURO,BAIRRO,CIDADE,ESTADO) VALUES ('$cep ', '$logradouro', '$bairro','$cidade', '$estado')";

//Invoca o método pg_query passando o ponteiro de conexão com o PostgreSQL e a string contendo a instrução SQL.  
      pg_query($link, $sql);
       /**
           Fecha a conexão com o PostgreSQL
       */
       pg_close($link);

?>



