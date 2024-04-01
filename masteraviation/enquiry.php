<?php



//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);



if(isset($_POST['submit_popup'])){
    // echo 'hi';
    $data = [
       'name'       => $_POST['first_name'],
       'email'      => $_POST['email'],
       'phone'      => $_POST['phone'],
       'pincode'    => $_POST['pincode'],
       'edu'        => $_POST['edu'],
       'course'     => $_POST['course'],
    ];

    $subject = 'Master Aviation Landing Page | Popup Enquiry Form';

    $message    = "<p>Popus Form Enquiry</p></br>";
    $message    .= "<p> name: <strong>". $data['name'] ."</strong></p></br>";
    $message    .= "<p> phone number: <strong>". $data['phone'] ."</strong></p></br>";
    $message    .= "<p> email: <strong>". $data['email'] ."</strong></p></br>";
    $message    .= "<p> Pincode: <strong>". $data['pincode'] ."</strong></p></br>";
    $message    .= "<p> Qualification: <strong>". $data['edu'] ."</strong></p></br>";
    $message    .= "<p> Course: <strong>". $data['course'] ."</strong></p></br>";
    $message    .= "<p>Thank you,</p>";
    $message    .= "<p>". $data['name'] ."</p>";
    $message    .= "<p>" . $data['email'] . " | " . $data['pincode'] . "</p>";
} else if(isset($_POST['contact_us'])){
    $data = [
        'name'       => $_POST['first_name'],
        'last_name'  => $_POST['last_name'],
        'email'      => $_POST['email'],
        'phone'      => $_POST['phone']
     ];
 
     $subject = 'Master Aviation Landing Page | Contact Us Form';
 
     $message    = "<p>Contact Us Form - Enquiry</p></br>";
     $message    .= "<p> name: <strong>". $data['name'] . " " . $data['name'] . "</strong></p></br>";
     $message    .= "<p> phone number: <strong>". $data['phone'] ."</strong></p></br>";
     $message    .= "<p> email: <strong>". $data['email'] ."</strong></p></br>";
    //  $message    .= "<p> Pincode: <strong>". $data['pincode'] ."</strong></p></br>";
    //  $message    .= "<p> Qualification: <strong>". $data['edu'] ."</strong></p></br>";
    //  $message    .= "<p> Course: <strong>". $data['course'] ."</strong></p></br>";
     $message    .= "<p>Thank you,</p>";
     $message    .= "<p>". $data['name'] ."</p>";
     $message    .= "<p>" . $data['email'] . " | " . $data['pincode'] . "</p>";
}

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'ssl://smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'digimatrix7@gmail.com';                     //SMTP username
    $mail->Password   = 'ktkgvnmboxxiohau';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('digimatrix7@gmail.com', 'Master Aviation');
    $mail->addAddress('digimatrix7@gmail.com', 'Manjesh');     //Add a recipient
    // $mail->addAddress('rohitwebco@gmail.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    $mail->addBCC('rohitwebco@gmail.com');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->AltBody = strip_tags($message);

    if($mail->send()){
        header('location:thank-you.html');
    }
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}