<?php
//recojemos los datos
$email = $_POST['useremail'];
$nombre = $_POST['username'];
$mensaje =$_POST['usermessage'];

//La función mail
if (mail('razzziel001@gmail.com', $email, $nombre, $mensaje)) {
  echo "<script>

      window.location.replace('https://twinzeneldesarrollador.000webhostapp.com/');

          </script>";
}else{
  echo "No enviado";
}


 ?>
