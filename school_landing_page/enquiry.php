<?php

    if(isset($_POST['contact_us'])){

        $parent_name = $_POST['parent_name'];
        $student_name = $_POST['student_name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        echo "$parent_name, $student_name, $phone, $email, $message = message";
    }

    if(isset($_POST['enquiry'])){

        $parent_name = $_POST['parent_name'];
        $student_name = $_POST['student_name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        echo "$parent_name, $student_name, $phone, $email = enquiry";
    }

    if(isset($_POST['brochure'])){

        $parent_name = $_POST['parent_name'];
        $student_name = $_POST['student_name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        echo "$parent_name, $student_name, $phone, $email = brochure";
    }

?>