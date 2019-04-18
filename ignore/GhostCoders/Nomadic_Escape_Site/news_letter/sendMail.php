<?php 

$action = null;

if (!empty($_GET['action'])) {
    $action = $_REQUEST['action'];
}

require '../includes/Classes/Subscriber.php';
require_once '../includes/database.php';

require "./phpmailer/phpmailer/src/Exception.php";
require "./phpmailer/phpmailer/src/PHPMailer.php";
/*
 * Set Smtp Configruation And email password To send mail To subscriber
 */
$dbcon = Database::getDb();
$pdo = new Subscriber();
$subscriberList =  $pdo->getSubscriber($dbcon);

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions

try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.zoho.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'gurnajdhaliwal255@gmail.com';                 // SMTP username
    $mail->Password = 'Manpreet@123';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients (subscribers)
    $mail->setFrom('gurnajdhaliwal255@gmail.com', 'Manpreet Kaur');
    foreach ($subscriberList as $subscriber) {
       $mail->addAddress($subscriber->subscriber_email);               // Name is optional
    }

    $mail->addReplyTo('info@example.com', 'Information');


    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the News Letter For You';
        $mail->Body    = '<p> HERE is a News Letter '.$action.' please visit and view 
                            <b>Thanks For Subscribe Our News Letter For Getting more please visit newsletter</b>
                          </p>';

    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent
    <script>
        window.location.href = "../pages/newsletter.php";
    </script>
    ';


} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
