<?php session_start();
include "classes/class.phpmailer.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header('Content-Type: application/json');
    $recaptcha = $_POST['captcha'];
    $bahasa = $_POST['bahasa']??'EN';

    if (!empty($recaptcha)) {
        $secret = "6LdXgdQrAAAAAD9f1U6puSlU0zddy5HdRPOS8cfx";
        $verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$recaptcha}");
        $response = json_decode($verify);

        if ($response->success) {
             // Collect and sanitize form data
            $firstName = htmlspecialchars(trim($_POST['firstname']));
            $lastName  = htmlspecialchars(trim($_POST['lastname']));
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
                echo json_encode([
                    "success" => true,
                    "message" => $bahasa == "EN"? "Thanks for contacting us. We'll be in touch soon": "Terima kasih telah menghubungi kami, kami akan segera membantu anda"
                ]);
            }
            else
            {
                echo json_encode([
                    "success" => false,
                    "message" => $bahasa == "EN"? "Failed to send data": "Gagal mengirim data"
                ]);
            }
            // lanjut simpan data / kirim email
        } else {
            echo json_encode([
                "success" => false,
                "message" => $bahasa == "EN"? "Failed to verify Captcha": "Captcha gagal diverifikasi" 
            ]);
        }
    } else {
        echo json_encode([
                "success" => false,
                "message" => $bahasa == "EN"? "Please check Captcha first": "Tolong centang Captcha dulu"
        ]);
    }
    
} else {
   echo json_encode([
           "success" => false,
           "message" => $bahasa == "EN"? "No form submitted": "Tidak ada form yang disimpan"
   ]);
}

?>