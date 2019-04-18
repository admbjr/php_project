<?php

    require_once 'includes/header.php';
    // require_once 'includes/contactform.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    //Load Composer's autoloader
    require 'vendor/autoload.php';
    $result = "";
    if(isset($_POST["test1"])){
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $mail_from = $_POST['email'];
        $message = $_POST['message'];

        $mail_to = "nomadicescape19@gmail.com";
        $headers = "From: ".$mail_from;
        $txt = "You have recieved a e-mail from ".$name.".\n\n".$message;

        
       
        
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.aol.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'rem3y@aol.com';                 // SMTP username
            $mail->Password = 'Seven_007';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;
            // TCP port to connect to
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            //Recipients
            $mail->setFrom('nomadicescape17@gmail.com', 'Mailer');
            $mail->addAddress('nomadicescape17@gmail.com', 'Joe User');     // Add a recipient
        
        
        
            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
}

?>
hello
    <header class="masthead" style="background-image:url('assets/img/contact.gif');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <div class="site-heading">
                        <h1>Contact US</h1><span class="subheading">Have questions? I have answers!</span></div>
                </div>
            </div>
        </div>
    </header>
    <div>
hhhhh<?php echo $result; ?>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
                    <form id="contactForm" name="sentMessage" method="post" action="<?= $_SERVER['PHP_SELF']; ?>" >
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls"><label>Name</label><input class="form-control" type="text" name="name" id="name" required placeholder="Name"><small class="form-text text-danger help-block"></small></div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls"><label>Email Address</label><input class="form-control"  name="email" type="text" id="email" required="" placeholder="Email Address"><small class="form-text text-danger help-block"></small></div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls"><label>Subject</label><input class="form-control" name="subject" type="text" id="subject" required="" placeholder="Subject"><small class="form-text text-danger help-block"></small></div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-3"><label>Message</label><textarea class="form-control" name="message" type="text" id="message" data-validation-required-message="Please enter a message." required="" placeholder="Message" rows="5"></textarea><small class="form-text text-danger help-block"></small></div>
                        </div>
                        <div id="success"></div>
                        <div class="form-group"><button class="btn btn-primary" id="sendMessageButton" name="test1"  type="submit">Send</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    

<?php
    require_once 'includes/footer.php';
?>