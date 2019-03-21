<html>
    <style type = "text/css">
        background{
            color : red;
        }
        
    
    </style>
    
    <body>
        <?php
            echo "<background>";
            //if(isset($_POST['submit'])) {
                $name = $_POST['name'];
                $subject = $_POST['name'];
                $mailFrom = $_POST['email'];
                $message = $_POST['message'];
                $mailTo = "abdullahwebdesign@gmail.com";
                $headers = "From: " .$mailFrom;
                $txt = "You have received an e-mail from " .$mailFrom.".\n\n";
                $txt = " This person's name is : " .$name.".\n\n"."They said : \n\n".$message;
                if (mail($mailTo,$subject,$txt,$headers)){
                    echo 'Thank you for choosing Ahmad Web Design. You have Successfully sent your email!';
                }
                else{
                    echo 'Failed to send email.';
                }
            //}
        ?>
    </body>
</html>