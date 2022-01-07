<?php 



    $to = "m.ezzekmi@compohub.com"; // this is your Email address

    $from = $_POST['email']; // this is the sender's Email address

    $name = $_POST['name'];



    $subject = "Contact Form Submission";

    $message = "Contact form was submitted with the following details. \nName:".$name."\n\nMessage:".$_POST['message'];

    

    $headers = "From:" . $from;

    mail($to,$subject,$message,$headers);



?>