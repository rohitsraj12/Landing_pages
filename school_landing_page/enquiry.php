<?php

    if(isset($_POST['contact_us'])){

        $parent_name = $_POST['parent_name'];
        $student_name = $_POST['student_name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        echo "$parent_name, $student_name, $phone, $email, $message";


    }






?>