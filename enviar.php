<?php		
    require_once 'PHPMailer/PHPMailerAutoload.php';
    
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";
    $mail->Host = "smtp.gmail.com";
    $mail->Port = "587";
    $mail->Username = "cambiar-email";
    $mail->Password = "";
    
    $mail-> setFrom("cambiar-email","prueba");
    $mail->addAddress($email, $nombre);
    
    $mail->Subject = $asunto;
    $mail->Body    = $cuerpo;
    $mail->IsHTML(true);
    
    if($mail->send())
    return true;
    else
    return false;
