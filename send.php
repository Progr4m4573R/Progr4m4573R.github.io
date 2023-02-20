<?php
//source: https://www.youtube.com/watch?v=9tD8lA9foxw&ab_channel=DavidGTech
use PHPMailer\PHPMailer\PHPMailer;


require "PHP\PHPMailer-master\src\Exception.php";
require "PHP\PHPMailer-master\src\PHPMailer.php";
require "PHP\PHPMailer-master\src\SMTP.php";

// Send email 

if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'visusmailer@gmail.com';//sending email address
    $mail->Password = 'xtesofwztcrxorvn';//gmail app password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    //retrieve info from form source: https://stackoverflow.com/questions/49373173/issue-with-contact-form-html-and-php-405-not-allowed
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $customer_email = $_POST["email"];
    $message = $_POST[ "message"];

    $mail->setFrom('visusmailer@gmail.com');//your gmail

    $mail->addAddress("shiift13@gmail.com");//visusperfectus@gmail.com" receiving email address

    $mail->isHTML(true);

    $mail->Subject = "Customer Email";
    
    $textbody = "Customer name: ".$fname." $lname"." \n\nCustomer Email: ".$customer_email."\n\nMessage: ".$message;
    $mail->Body = $textbody;
    
    $mail->send();

    echo
    "<script>
    alert('Message submitted');
    document.location.href = 'index.php';
    </script>";
}
else{
    echo 'Email sending failed';
}

///Automated reply to customer email as well
if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'visusmailer@gmail.com';//sending email address
    $mail->Password = 'xtesofwztcrxorvn';//gmail app password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('visusmailer@gmail.com');//your gmail

    $mail->addAddress($_POST["email"]);

    $mail->isHTML(true);

    $mail->Subject = "Automated confirmation";
    $mail->Body = "Thank you for contacting us, a member of the staff will respond to you as soon as possible.";
    
    $mail->send();

    echo
    "<script>
    alert('Message submitted');
    document.location.href = 'index.php';
    </script>";
}
else{
    echo 'Email sending failed';
}
?>
