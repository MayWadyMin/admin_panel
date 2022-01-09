<?php

    if(isset($_POST['conmail'])) {

        require_once 'vendor/autoload.php';

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $msg = $_POST['message'];

        // echo $email;
        // die();

        $transport = (new Swift_SmtpTransport('smtp.googlemail.com', 587,'tls'))
        ->setUsername('capital.khinayemyint@gmail.com')
        ->setPassword('khinayemyint123!')
        ;

        $mailer = new Swift_Mailer($transport);

        $message = (new Swift_Message('Our Code World Newsletter'))
        ->setFrom([ $email  => $name])
        ->setTo([ 'capital.khinayemyint@gmail.com' => "Mail Receiver"])
        ->setSubject($subject)
        ->setBody($msg, 'text/html');
        $result = $mailer->send($message);
        if($result) {
            //echo "Mail Sent Successfully";
            header('location:contact.php');
        }
        else {
            echo "Mail Sent Unsuccessfully";
        }

    }

?>