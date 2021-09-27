<?php

if(isset($_POST['enquiry_form'])){

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $service = $_POST['service'];


    //send email to
    $to = "info@pragum.com";
    $to1 = "dndprash296@gmail.com";

    $subject = "Enquiry form | Landing Page";

    $message = "<p>Enquiry</p></br>";
    $message .= "<p> name: <strong>". $name ."</strong></p></br>";
    $message .= "<p> phone number: <strong>". $phone ."</strong></p></br>";
    $message .= "<p> email: <strong>". $email ."</strong></p></br>";
    $message .= "<p> Service: <strong>". $service ."</strong></p></br>";
    $message .= "<p> Message: <strong>". $message ."</strong></p></br>";
    $message .= "<p>Thank you,</p>";
    $message .= "<p>". $name ."</p>";
    $message .= "<p>" . $email . " | " . $phone . "</p>";

    $headers = "From:" . $name . " <" . $email . ">\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-type: text/html\r\n";

    mail($to, $subject, $message, $headers);
    mail($to1, $subject, $message, $headers);

    header("location:index.html");

}