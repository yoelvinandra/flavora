<?php
include "classes/class.phpmailer.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $firstName = htmlspecialchars(trim($_POST['firstName']));
    $lastName  = htmlspecialchars(trim($_POST['lastName']));
    $email     = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $company   = htmlspecialchars(trim($_POST['company']));
    $country   = htmlspecialchars(trim($_POST['country']));
    $message   = htmlspecialchars(trim($_POST['message']));

    $to = "info@floresflavora.com";
    
    $mail = new PHPMailer; 
    $mail->IsSMTP();
    $mail->SMTPSecure = 'ssl'; 
    $mail->Host = "mail.floresflavora.com"; //host masing2 provider email
    $mail->SMTPDebug = 0;
    $mail->Port = 465;
    $mail->SMTPAuth = true;
    $mail->Username = "client@floresflavora.com"; //user email
    $mail->Password = "Client123!@#"; //password email 
    $mail->SetFrom("client@floresflavora.com", "Flores Flavora Website"); //set email pengirim
    $mail->Subject = "Website Contact Form"; //subyek email
    $mail->AddAddress($to);  //tujuan email
    $mail->isHTML(true);
    $body = "
        <html>
        <head></head>
        <body>
            <table>
                <tr valign='top'>
                    <td colspan='3'> You received a new message from your website contact form:</td>
                </tr>
                <tr valign='top'>
                    <td>Name</td>
                    <td>:</td>
                    <td>$firstName $lastName</td>
                </tr>
                <tr valign='top'>
                    <td>Email</td>
                    <td>:</td>
                    <td>$email</td>
                </tr>
                <tr valign='top'>
                    <td>Company</td>
                    <td>:</td>
                    <td>$company</td>
                </tr>
                <tr valign='top'>
                    <td>Country</td>
                    <td>:</td>
                    <td>$country</td>
                </tr>
                <tr valign='top'>
                    <td>Message</td>
                    <td>:</td>
                    <td>$message</td>
                </tr>
            </table>
            <br>
            Please, engage your customer with send email back to $email
        </body>
        </html>
    ";
    $mail->MsgHTML($body);
    if($mail->Send())
    {
        echo "Thanks for contacting us. We'll be in touch soon.";
    }
    else
    {
        echo "Failed to sending message";
    }
    
} else {
    echo "No form submitted.";
}

?>