<?php 
    
            if(isset($_POST["submit"])){
                $name = $_POST['name'];
                $subject = $_POST['subject'];
                $mail_from = $_POST['email'];
                $message = $_POST['message'];

                $mail_to = "nomadicescape19@gmail.com";
                $headers = "From: ".$mail_from;
                $txt = "You have recieved a e-mail from ".$name.".\n\n".$message;

                if(mail($mail_to, $subject, $txt, $headers)){
                    echo "<h1>Message Sent! Thank You"." ".$name.", We  will contact you shortly!</h1>"; 
                } else {
                    echo "Something went wrong!";
                }
                header("Location: contactus.php?mailsend");
                
            }

            
    
        ?>