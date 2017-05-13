<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
  

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css" />
    <script src="bootstrap/js/bootstrap.min.js"></script>
   

</head>

<body>


<?php
session_start(); 
  ?>


<div id="cadastro01" class="col-md-6" style="margin-top:30px;" >
              <form class="form-horizontal" method="POST" action="enderecos.php">
              <div class="col-md-6">
                    <input type="text" class="form-control" id="cep" name="cep2"  placeholder="Enter cep" >    
                       
               </div>
                 <div class="col-sm-offset-2 col-sm-10">
                  <button type="SALVAR" class="btn btn-default"  style="background-color:#0FC">Pesquisar</button>
                 </div>  
                 </form>


    <div class="col-sm-6"  style="margin-left:100px;" > 
       <div class="well" style="width:430px;"> 
                   <h2>Cadastro</h2>
                   <form class="form-horizontal" method="POST" action="cadastro01.php">
           <div class="form-group" id="cadastro01">
                   <label class="control-label col-sm-2" for="nome">cep:</label>
                    
               <div class="col-md-6">
                    <input type="text" class="form-control" id="cep" name="cep" value="<?php echo $_SESSION['cep']; ?>" placeholder="Enter cep" >    
                       
               </div>
             
            </div>
  
            <div class="form-group">
    <label class="control-label col-sm-2" for="logradouro">logradouro:</label>
    <div class="col-sm-10">
      <input type="logradouro" class="form-control" id="logradouro" value="<?php echo $_SESSION['logradouro']; ?>" name="logradouro" placeholder="Enter logradouro">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="numero">numero:</label>
    <div class="col-sm-10">
      <input type="numero" class="form-control" id="numero" name="numero" placeholder="Enter numero">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="complemento">complemento:</label>
    <div class="col-sm-10">
      <input type="complemento" class="form-control" id="complemento" name="complemento" placeholder="Enter complemento">
    </div>
  </div>

<div class="form-group">
    <label class="control-label col-sm-2" for="bairro">bairro:</label>
    <div class="col-sm-10">
      <input type="bairro" class="form-control" id="bairro" value=" <?php echo $_SESSION['bairro']; ?> " name="bairro" placeholder="Enter bairro">
    </div>
  </div>


<div class="form-group">
    <label class="control-label col-sm-2" for="cidade">cidade:</label>
    <div class="col-sm-10">
      <input type="cidade" class="form-control" id="cidade" value="<?php echo $_SESSION['cidade']; ?>" name="cidade" >
    </div>
  </div>

<div class="form-group">
    <label class="control-label col-sm-2" for="estado">estado:</label>
    <div class="col-sm-10">
      <input type="estado" class="form-control" id="estado" value=" <?php echo $_SESSION['estado']; ?> " name="estado" placeholder="Enter estado">
    </div>
  </div>
      
            <div class="form-group">
                 <div class="col-sm-offset-2 col-sm-10">
                  <button type="SALVAR" class="btn btn-default" style="background-color:#0FC">SALVAR</button>
                 </div>
            </div>
                 </form>
                 
        </div>       
 </div>
   </div>
</div>



</div> 
 


 <!-- jQuery (necessario para os plugins Javascript do Bootstrap) -->
  <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
     </body>
</html>