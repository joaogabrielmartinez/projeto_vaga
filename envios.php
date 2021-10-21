<?php
$servername = "localhost";
$database = "bd_alunos";
$username = "root";
$password = "1234";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}


// $codigo=$_GET['codigo']; 
// codigo de usuario passado por url para encontra-lo na tabela
// $query ="SELECT * FROM envios_ where codigo='$codigo'";



 $query ="SELECT * FROM envios_";
 $consulta=mysqli_query($conn,$query);
 $link = $consulta->fetch_array();
//   $nome_doc=$link['nome_documento'];
//   $horas=$link['Horas'];
//   $Tipo_ativ=$link['tipo_atividade'];
//   $Status_=$link['Status_'];


 




 
?>
<!DOCTYPE html>
<html lang="en">

<head>
   
    <link href="css/style.css" rel="stylesheet">
    <!-- tirar a barra de rolagem em dispositivos mobile -->
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" type="imagem/png" href="">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<script src="js/js.js"></script>

      <title>Área Usuário</title>
    

</head>
<body>
<div class="area_title">
   
        <br>
         <h2 class="title-1 ml-2 mr-2 ">Área Usuário</h2> 
   <br>
</div>
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
        <div class="d-flex justify-content-center">

        <div class="area_principal mt-5 ml-2 mr-2">
            
            <h5 id="mobile-2" class="title-2 ml-2 mr-2 mt-2"><span><a class=" a-title-2" href="">Enviar Documento</a></span> <span><a class="ml-2 a-title-2_active"  href="envios.php">Ver Envios</a></span></h5>
            <div class="d-flex justify-content-center">

            <div class="table-responsive ml-2 mr-2">
      <table class="table table-bordered mt-2  "> 
        <tr> 
          
          <td>Arquivo</td> 
          <td>Tipo de Atividade</td> 
          <td>Horas </td> 
          <td>Status</b></td> 
  
        </tr> 
        <?php while($dado = $consulta->fetch_array())
       { ?> 
        <tr> 
          <td> <a href="<?php echo $dado['nome_documento']; ?>" download><?php echo $dado['nome_documento']; ?></a></td>
          <td><?php echo $dado['tipo_atividade']; ?></td> 
          <td><?php echo $dado['Horas']; ?></td> 
          <td><?php echo $dado['Status_']; ?></td> 

        </tr> 
        <?php } ?> 
      </table> 
       </div>
        </div>

              </div>

















    </div>

    </div>
    <div class="col-lg-1"></div>
</div>


    </body>
    </html>

    <script>
        mobile()

function mobile(){
    var windowWidth = window.innerWidth
    if(windowWidth<414){
    var id_text=document.getElementById("mobile-2")
   console.log(id_text)
    id_text.innerHTML='<span><a class="a-title-2_active" href="">Enviar Documento</a></span> <span><a class="ml-2 a-title-2"  href=""><br>Ver Envios</a></span>'
    }


}
    </script>