<?php
$redireccion = "../pages/en/index.php";

//if (!empty($_POST['employer']) && !empty($_POST['email'])&& !empty($_POST['cel'])&& !empty($_POST['name'])&& !empty($_POST['position'])&& !empty($_POST['number'])) {
    //variables del formulario
    $fecha = date('d/m/Y', time());
    $employer = $_POST['employer'];
    $mail = $_POST['email'];
    $cel = $_POST['cel'];
    $nombre = $_POST['name'];
    $position = $_POST['position'];
    $number = $_POST['number'];
    $msg = $_POST['msg']; 

    //variables del e-mail
    $correoDestino = "R.R.H.H. <bryleo2009@hotmail.com>";
    $asunto = "Mail_server Prueba - Solicitud";

    //cuerpo del e-mail
    $html_empresa = require('email/empresa_s.php');
    $html_cliente = require('email/cliente_s.php');

    //variables del archivo
    $nameFile = $_FILES['archivo_fls']['name'];
    $sizeFile = $_FILES['archivo_fls']['size'];
    $typeFile = $_FILES['archivo_fls']['type'];
    $tempFile = $_FILES['archivo_fls']['tmp_name'];


    /*************E-mail a empresa */
    //Mensaje en formato Multipart MIME -> cabecera
    $cabecera = "MIME-VERSION: 1.@\r\n";
    $cabecera .= "Content-type: multipart/mixed;";
    $cabecera .= "boundary=\"=O=F=S=Y=S=T=E=M=\"\r\n"; //SE USA COMO SEPARADOR DE PARTES DEL EMAIL
    $cabecera .= "From: {$nombre} <$mail>";

    //Primera parte del cuerpo
    $cuerpo = "--=O=F=S=Y=S=T=E=M=\r\n";
    $cuerpo .= "Content-type: text/html;";
    $cuerpo .= "charset=UTF-8\r\n";
    $cuerpo .= "Content-Transfer-Encoding: 8bit\r\n";
    $cuerpo .= "\r\n";
    $cuerpo .= $html_empresa;

    $cuerpo .= "\r\n";

    if ($sizeFile > 0) { //si envia archivo
        //Segunda parte del cuerpo (archivo adjunto)
        $cuerpo .= "--=O=F=S=Y=S=T=E=M=\r\n";
        $cuerpo .= "Content-type: application/octet-stream;";
        $cuerpo .= "name=" . $nameFile . "\r\n";
        $cuerpo .= "Content-Transfer-Encoding: base64\r\n";
        $cuerpo .= "Content-Disposition: attachment\r\n";
        $cuerpo .= "filename=" . $nameFile . "\r\n";
        $cuerpo .= "\r\n";

        $fp = fopen($tempFile, "rb"); //nombre temporal
        $file = fread($fp, $sizeFile);
        $file = chunk_split(base64_encode($file)); //codifica el archivo

        $cuerpo .= "$file\r\n";
        $cuerpo .= "\r\n";
    }

    $cuerpo .= "--=O=F=S=Y=S=T=E=M=--\r\n"; //delimitador de todo el archivo

    //validación de envio
    if (mail($correoDestino, $asunto, $cuerpo, $cabecera)) {
        $respuesta_empresa = "correo enviado exitosamente al empresa";
    } else {
        $respuesta_empresa = "correo no enviado al empresa";
    }


    /*************E-mail a cliente */
    //variables del e-mail
    $correoDestino = $mail;
    $asunto = "Mail_server Prueba - cliente";

    //Mensaje en formato Multipart MIME -> cabecera
    $cabecera = "MIME-VERSION: 1.@\r\n";
    $cabecera .= "Content-type: multipart/mixed;";
    $cabecera .= "boundary=\"=O=F=S=Y=S=T=E=M=\"\r\n"; //SE USA COMO SEPARADOR DE PARTES DEL EMAIL
    $cabecera .= "From: Of System <info@ofsystem.com>";

    //Primera parte del cuerpo
    $cuerpo = "--=O=F=S=Y=S=T=E=M=\r\n";
    $cuerpo .= "Content-type: text/html;";
    $cuerpo .= "charset=UTF-8\r\n";
    $cuerpo .= "Content-Transfer-Encoding: 8bit\r\n";
    $cuerpo .= "\r\n";
    $cuerpo .= $html_cliente;

    $cuerpo .= "\r\n";

    $cuerpo .= "--=O=F=S=Y=S=T=E=M=--\r\n"; //delimitador de todo el archivo

    //validación de envio
    if (mail($correoDestino, $asunto, $cuerpo, $cabecera)) {
        $respuesta_cliente = "correo enviado exitosamente al cliente";
    } else {
        $respuesta_cliente = "correo no enviado al cliente";
    }

    $respuesta = $respuesta_empresa . ' / ' . $respuesta_cliente;
//} else {
  //  $respuesta = "existen campos vacios";
//}
//echo "<script>alert(' . $respuesta . ')</script>";
echo "<script> setTimeout(\"location.href='" . $redireccion . "'\",100)</script>";
