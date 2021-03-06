<?php 
    header('Content-Type: text/html; charset=UTF-8');  
    //conectar servidor
    use PHPMailer\PHPMailer\PHPMailer;
    require 'vendor/autoload.php';
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'HOST';
        $mail->Port = 'PORT';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Username = 'USER_NAME';
        $mail->Password = 'PASWORD';
        
        //Variables
        $name = $_POST["name"];//nombre cliente
        $phone = $_POST["telefono"]; //telefono cliente
        $to = $_POST["email"];// correo del cliente
        $message1 = $_POST["message"]; //mensaje cliente
            
        //Validaciones
        if(empty($name)) {
            $a = 0;
        } elseif(strlen($name) > 30){
            $a = 0;
        }else{
            $a = 1;
        }
    
        if(! is_numeric($phone)) {
        $b = 0;
        } else{
            $b = 1;
        }
    
        if(empty($to)) {
            $c = 0;
        } elseif(!filter_var($to, FILTER_VALIDATE_EMAIL)){
            $c = 0;
        }else{
            $c = 1;
        }
    
        if(empty($message1)) {
            $d = 0;
        }elseif(strlen($message1) < 5){
            $d = 0;
        }elseif(strlen($message1) > 300){
            $d = 0;
        }else{
            $d = 1;
        }
        
        //Validacion Phone
        if($a==1 && $b == 1 && $c == 1 && $d == 1 ){
            $from = "mail";
            $from1 = "mail";
            

            $message = "Confirmacion";
            $subject = "[Confirmación]: Tu mensaje ha sido enviado exitosamente";
            $subject = utf8_decode($subject);
            $mail->setFrom($from1, 'EMAIL');
            $mail->addReplyTo($from1, 'NAME');
            $mail->addAddress($to, $name);
            $mail->Subject = $subject;
            $mail->msgHTML($message);
            if (!$mail->send()) {
                echo "<p class='error'> Lo sentimos, algo salió mal. Por favor, inténtelo de nuevo más tarde.</p>";
            } else {
                echo "<p class='succes'> ¡Mensaje enviado! Gracias por contactarnos.</p>";
            } 
        }
?>
