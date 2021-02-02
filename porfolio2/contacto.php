<?php

$titulo = "contacto";
$pagina = "contacto";


include_once("PHPMailer/src/PHPMailer.php");
include_once("PHPMailer/src/SMTP.php");

if($_POST){ /* es postback */
  header("Location: confirmacion-envio.php");

  $nombre = $_POST["txtNombre"];
  $correo = $_POST["txtCorreo"];
  $mensaje = $_POST["txtMensaje"];

  if($nombre != "" && $correo != ""){
      $mail = new PHPMailer();
      $mail->IsSMTP();
      $mail->SMTPAuth = true;
      $mail->Host = "mail.dominio.com"; // SMTP a utilizar
      $mail->Username = "info@dominio.com.ar"; // Correo completo a utilizar
      $mail->Password = "aqui va la clave de tu correo";
      $mail->Port = 25;
      $mail->From = "info@dominio.com.ar"; //Desde la cuenta donde enviamos
      $mail->FromName = "Tu nombre a mostrar";
      $mail->IsHTML(true);
      $mail->SMTPOptions = array(
                  'ssl' => array(
                      'verify_peer' => false,
                      'verify_peer_name' => false,
                      'allow_self_signed' => true
                  )
              );

      //Destinatarios
      $mail->addAddress($correo);
      $mail->addBCC("otrocorreo@gmail.com"); //Copia oculta
      $mail->Subject = utf8_decode("Contacto página Web");
      $mail->Body = "Recibimos tu consulta, te responderemos a la brevedad.";
      /*if(!$mail->Send()){
        $msg = "Error al enviar el correo, intente nuevamente mas tarde.";
     }*/
      $mail->ClearAllRecipients(); //Borra los destinatarios

      //Envía ahora un correo a nosotros con los datos de la persona
      $mail->addAddress("info@dominio.com.ar");
      $mail->Subject = utf8_decode("Recibiste un mensaje desde tu página Web");
      $mail->Body = "Te escribio $nombre cuyo correo es $correo el siguiente mensaje:<br><br>$mensaje";
     
      //if($mail->Send()){ /* Si fue enviado correctamente redirecciona */
          header("Location: confirmacion-envio.php");
     // } else {
      //    $msg = "Error al enviar el correo, intente nuevamente mas tarde.";
     // }    
  } else {
      $msg = "Complete todos los campos";
  } 

}

include_once("header.php");

?>
  <main>
    <div class="container pb-5">
      <div class="row">
        <div class="col-12"><br></div>
      </div>
      <div class="row pt-5">
        <div class="col-12">
          <h1>Contacto</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-6">
          <p class="contacto-p">Para más detalles sobre mi
            trabajo podés ver mi Linkedin, descargar mi CV o mandarme un mensaje.</p>
        </div>
        <div class="col-12 col-sm-6">
          <div id="formulario">
            <form action="" method="POST">
              <div class="mb-3">
                <input type="text" name="txtNombre" id="txtNombre" placeholder=" Nombre" class="shadow">
              </div>
              <div class="mb-3">
                <input type="email" name="txtEmail" id="txtEmail" placeholder=" email" class="shadow">
              </div>
              <div class="mb-3">
                <textarea name="txtMensaje" id="txtMensaje" cols="30" rows="10" placeholder=" Comentarios"
                  class="shadow"></textarea>
                <div class="mt-3">
                  <button type="submit" class="btn1 shadow">Enviar</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer class="footer-1 fixed-bottom pb-0">
    <div class="container pt-5">
      <div class="row pt-5">
        <div id="bt-footer-cont" class="text-center text-sm-left col-12 col-sm-3">
          <i class="fab fa-github"></i>
          <a href="https://www.linkedin.com/in/pablo-ezequiel-abagnale/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <div class="text-center text-sm-left col-12 col-sm-3">
          Sponsor:<a href="https://depcsuite.com/" target="_blank">DepcSuite</a></div>
        <div class="text-center text-sm-left col-12 col-sm-3">
          <a href="mailto:pablo.e.abagnale@gmail.com" target="_blank">pablo.e.abagnale@gmail.com</a>
        </div>
        <div class="text-center text-sm-left col-12 col-sm-3">
          <a id="bt-wp" href="https://api.whatsapp.com/send?phone=543512294734" target="_blank">
            <i class="fab fa-whatsapp"></i></a>
      </div>
      </div>
  </footer>
</body>

</html>