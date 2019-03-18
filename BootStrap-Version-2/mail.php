<!-- if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
    $message = $_POST['message'];
    $formcontent="From: $name \n Message: $message";
    
    $mailTo = "drithin@vernaa.com";
    $mailheader = "From: $email \r\n";

    mail($mailTo, $subject, $mailheader, $formcontent);

    echo "Thank You for your response. We will revert ASAP"; 

    header("Location: index.html?mailsend");
}

?> -->

<?php

    $error = ""; $successMessage = "";

    if ($_POST) {

    	if (!$_POST["name"]) {
            
            $error .= "A name is required.<br>";
            
        }
        
        if (!$_POST["email"]) {
            
            $error .= "An email address is required.<br>";
            
        }
        
        if (!$_POST["content"]) {
            
            $error .= "The content field is required.<br>";
            
        }
        
        if (!$_POST["subject"]) {
            
            $error .= "The subject is required.<br>";
            
        }
        
        if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
            
            $error .= "The email address is invalid.<br>";
            
        }
        
        if ($error != "") {
            
            $error = '<div class="alert alert-danger" role="alert"><p>There were error(s) in your form:</p>' . $error . '</div>';
            
        } else {
            
            $emailTo = "drithin@vernaa.com";

            $name = $_POST['name'];
            
            $subject = $_POST['subject'];
            
            $content = $_POST['content'];
            
            $headers = "From: ".$_POST['email'];
            
            if (mail($emailTo, $name, $subject, $content, $headers)) {
                
                $successMessage = '<div class="alert alert-success" role="alert">Your message was sent, we\'ll get back to you ASAP!</div>';
                
                
            } else {
                
                $error = '<div class="alert alert-danger" role="alert"><p><strong>Your message couldn\'t be sent - please try again later</div>';
                
                
            }
            
        }
        
        
        
    }

?>
