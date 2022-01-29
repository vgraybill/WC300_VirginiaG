<?php
//if they pressed the button, pull out the user inputs
if($_POST['did_send'] == 1){
    //http://www.webdeveloper.com/forum/showthread.php?224951-Sending-an-email-with-PHP-and-HTML-Forms-specifically-using-checkboxes
    

    // create variables from inputs and sanitize
    $senderName= filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $senderPhone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $senderEmail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $senderSubject = filter_var($_POST['inquiry'], FILTER_SANITIZE_STRING);
    $senderContact = filter_var($_POST['contact'], FILTER_SANITIZE_STRING);
    $senderMessage = filter_var($_POST['comment'], FILTER_SANITIZE_STRING);

    // IMPORTANT - Change these lines to be appropriate for your needs - IMPORTANT !!!!!!!!!!!!!!!!!!
    $to = "virginiaegraybill@gmail.com";
    $from = "$senderEmail";
    $subject = "Inquiry from $senderEmail";
    // Modify the Body of the message however you like
    $message = "form info:

        Name:  $senderName
        Email:  $senderEmail
        Phone: $senderPhone
        Subject: $senderSubject
        Contact: $senderContact
        Message: $senderMessage";

        // Build $headers Variable
        $headers = "From: $from\r\n";
        $headers .= "Reply-to: $senderEmail\r\n";

    //send the mail!
    $mail_sent = mail($to, $subject, $message, $headers);

    // success/error
    if($mail_sent == 1){
        //success
        // $display_msg = '<h5 class="success">Thanks for your inquiry! A member of our team will respond within three business days with an answer to your message. </h5>';
        $status = 'success';
        header( 'Location: ../../faq-form-success.html' );
        //to open a new thank you page use: header( 'Location: thankYou.html' ) ;
    }
    else{
        //failure
        $display_msg = '<h5 class="failure">Sorry, something went wrong, and the form was not submitted. Please try again </h5>';
        $status = 'notsent';
    }
}
?>
