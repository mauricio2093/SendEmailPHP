<?php 
    //conectar servidor
    use PHPMailer\PHPMailer\PHPMailer;
    require 'vendor/autoload.php';
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'HOST';
        $mail->Port = 'PORT';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Username = 'Mail';
        $mail->Password = 'PW';
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
           
            $message = "<h2>Este mensaje fue enviado desde la pagina Web de Anova por nuestro cliente" . $name . "</h2><br> <h3> Su e-mail es: " . $to . "<br> Su telefono es: " . $phone . " <br> Mensaje enviado: " . $message1 . " <br> Enviado el " . date('d/m/Y', time()) ."</h3>";
            $subject = "Correo Enviado De Cliente ";
            $mail->setFrom($from1, 'name');
            $mail->addReplyTo($from1, 'name');
            $mail->addAddress($from, 'name');
            $mail->Subject = $subject;
            $mail->msgHTML($message);
            if (!$mail->send()) {
                echo "<p class='error'> Lo sentimos, algo salió mal. Por favor, inténtelo de nuevo más tarde.</p>";
             } 
        }
?>
