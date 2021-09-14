<?php
$result="";
if(isset($_POST['submit'])){
    require 'contacto/phpmailer/PHPMailerAutoload.php';
    $mail=new PHPMailer;
    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Username='braianlugo152001@gmail.com';
    $mail->Password='dni223515';

    $mail->setFrom($_POST['email'],$_POST['nombre']);
    $mail->addAddress('teacomp.oficial@gmail.com');
    $mail->addReplyTo($_POST['email'],$_POST['nombre']);

    $mail->isHTML(true);
    $mail->Subject='Enviado por '.$_POST['nombre'];
    $mail->Body='<h1 align=center>Nombre: '.$_POST['nombre'].'<br>Email '.$_POST['email'].'<br> Asunto:'.$_POST['asunto'].'<br>Mensaje: <br>'.$_POST['mensaje'].'</h1>';

    if(!$mail->send()){
        $result="Error, Intentelo de nuevo por favor";
    }
    else {
        $result="Gracias".$_POST['nombre']." por contactarnos, espere nuestra ruespuesta!";
    }



}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <title>TEAconsejamos | Inicio</title>
    <meta charset="UTF-8">
     <meta name="viewport" content="width-device-width, user-scalable-no, initial-scale-1, maximum-scale-1, minimum-scale-1">
    <link rel="stylesheet" href="css/navcontacto.css">
    <link rel="stylesheet" href="css/form.css">
</head>
<body>

    <!-- Menu de Navegacion -->
    <header id="header">
        <div class="topnav" id="myTopnav">
        <a href="index.html">Inicio</a>
        <a href="ambientes.html">Ambientes</a>
        <a href="formulario.html"class="active">Contacto</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
              </a>
          </div>

 <!-- Imagen Header -->
    <div class="img-header">
     </div>       

    </header>

    <form name="contact" action="enviar.php" method="POST">
        <h2>Contacto</h2>
        <input type="text" name="name" placeholder="Nombre..." required>
        <input type="email" name="email" placeholder="Correo..." required>
        <input type="email" name="asunto" placeholder="asunto..." required>
        <textarea name="mensaje" placeholder="Escriba su mensaje:" required></textarea>
        <button type="submit" value="Enviar" id="boton">Enviar</button>


    </form>
    <script src="js/nav.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</body>
</html>
