<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Nome é obrigatório ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email é obrigatório ";
} else {
    $email = $_POST["email"];
}

// MSG SUBJECT
if (empty($_POST["subject"])) {
    $errorMSG .= "O assunto é obrigatório ";
} else {
    $msg_subject = $_POST["subject"];
    die("Cheguei ate aqui");
}


// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "A mensagem é obrigatória ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "weslleysoliver@gmail.com";
$Subject = "Resposta do CV recebida";

// prepare email body text
$Body = "";
$Body .= "Nome: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Assunto: ";
$Body .= $msg_subject;
$Body .= "\n";
$Body .= "Mensagem: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   //echo "Email enviado com sucesso!";
   die("Okay");
}else{
    if($errorMSG == ""){
        //echo "Algo deu Errado :(";
        die("Erro");
    } else {
        //echo $errorMSG;
        die("Aqui");
    }
}

?>