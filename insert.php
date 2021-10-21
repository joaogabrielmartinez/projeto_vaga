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

$nome_arquivo=$_POST['arquivo'];
$tipo_atividade=$_POST['tipo_atividade'];
$Horas=$_POST['horas'];

$status="Não-Homologado";


$sql = "INSERT INTO envios_ (nome_documento, Horas,tipo_atividade,Status_) VALUES ( '$nome_arquivo','$Horas','$tipo_atividade','$status')";
if (mysqli_query($conn, $sql)) {
      echo  '
      <!DOCTYPE html>
      <html lang="en">
      <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
   
          <title>Document</title>
      </head>
      <body>
          
      </body>
      </html>
      <script >
      Swal.fire({

        icon: "success",
        title: "Arquivo enviado com sucesso!",
        showConfirmButton: true,
    
        confirmButtonText: "Ok"
      }).then((result) => {
        if (result.value) {
          window.location.href="index.html"
        }
      });
      </script>';






} else {
      echo  "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>



