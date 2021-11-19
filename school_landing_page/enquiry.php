<?php

    if(isset($_POST['contact_us'])){

        $parent_name = $_POST['parent_name'];
        $student_name = $_POST['student_name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // echo "$parent_name, $student_name, $phone, $email, $message = message";
        $to         = 'officialsolarhause@gmail.com';
        $subject    = "Subject Name";

        $message    = "<h4>message</h4></br>";
        $message    .= "<p>name: <strong>". $name ."</strong></p></br>";
        $message    .= "<p>email: <strong>". $email ."</strong></p></br>";
        $message    .= "<p>phone number: <strong>". $phone ."</strong></p></br>";
        $message    .= "<p>Message: <strong>". $message ."</strong></p></br>";
        $message    .= "<p>Thank you,</p>";
        $message    .= "<p>". $name ."</p>";
        $message    .= "<p>" . $email . " | " . $phone . "</p>";

        $headers    = "From:" . $name . " <" . $email . ">\r\n";
        $headers    .= "Reply-To: " . $email . "\r\n";
        $headers    .= "Content-type: text/html\r\n";

        mail($to, $subject, $message, $headers);

        // Redirect to thank you page
        header('Location:thank-you.html');
    }

    if(isset($_POST['enquiry'])){

        $parent_name = $_POST['parent_name'];
        $student_name = $_POST['student_name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        // echo "$parent_name, $student_name, $phone, $email = enquiry";
        
        // echo "$parent_name, $student_name, $phone, $email, $message = message";
        $to         = 'officialsolarhause@gmail.com';
        $subject    = "Subject Name";

        $message    = "<h4>message</h4></br>";
        $message    .= "<p>name: <strong>". $name ."</strong></p></br>";
        $message    .= "<p>email: <strong>". $email ."</strong></p></br>";
        $message    .= "<p>phone number: <strong>". $phone ."</strong></p></br>";
        $message    .= "<p>Thank you,</p>";
        $message    .= "<p>". $name ."</p>";
        $message    .= "<p>" . $email . " | " . $phone . "</p>";

        $headers    = "From:" . $name . " <" . $email . ">\r\n";
        $headers    .= "Reply-To: " . $email . "\r\n";
        $headers    .= "Content-type: text/html\r\n";

        mail($to, $subject, $message, $headers);

        // Redirect to thank you page
        header('Location:thank-you.html');
    }

    if(isset($_POST['brochure'])){

        $parent_name = $_POST['parent_name'];
        $student_name = $_POST['student_name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        // echo "$parent_name, $student_name, $phone, $email = brochure";
        
        // echo "$parent_name, $student_name, $phone, $email, $message = message";
        $to         = 'officialsolarhause@gmail.com';
        $subject    = "Subject Name";

        $message    = "<h4>message</h4></br>";
        $message    .= "<p>name: <strong>". $name ."</strong></p></br>";
        $message    .= "<p>email: <strong>". $email ."</strong></p></br>";
        $message    .= "<p>phone number: <strong>". $phone ."</strong></p></br>";
        // $message    .= "<p>Message: <strong>". $message ."</strong></p></br>";
        $message    .= "<p>Thank you,</p>";
        $message    .= "<p>". $name ."</p>";
        $message    .= "<p>" . $email . " | " . $phone . "</p>";

        $headers    = "From:" . $name . " <" . $email . ">\r\n";
        $headers    .= "Reply-To: " . $email . "\r\n";
        $headers    .= "Content-type: text/html\r\n";

        mail($to, $subject, $message, $headers);

        // Redirect to thank you page
        header('Location:thank-you.html');
    }

?>