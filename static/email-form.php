<?php 
    
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    //Validate 
    if(empty($name)||empty($visitor_email)) 
    {
        echo "Please enter your name and a valid email";
        exit;
    }

    if(IsInjected($visitor_email))
    {
        echo "Invalid email";
        exit;
    }

    $email_from = '<arickraft.me>';
    $email_subject = "Portfolio Form submission";
    $email_body = "New message from $name.\n".
        "Message:\n $message".
        
    $to = "<kraft.aric@gmail.com>";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";

    //Send email
    mail($to,$email_subject,$email_body,$headers);

    //redirect to thank-you page.
    echo "Thank you for reaching out";
    exit;

?>