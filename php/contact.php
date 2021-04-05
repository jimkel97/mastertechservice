<?php
  
if($_POST) {
    $cname = "";
    $email = "";
    $instructions = "";
    $concerned_department = "";
    $description = "";
    $email_body = "<div>";
      
    if(isset($_POST['cname'])) {
        $cname = filter_var($_POST['cname'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Visitor Name:</b></label>&nbsp;<span>".$cname."</span>
                        </div>";
    }
 
    if(isset($_POST['email'])) {
        $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        $email_body .= "<div>
                           <label><b>Visitor Email:</b></label>&nbsp;<span>".$email."</span>
                        </div>";
    }
      
    if(isset($_POST['instructions'])) {
        $instructions = filter_var($_POST['instructions'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Reason For Contacting Us:</b></label>&nbsp;<span>".$instructions."</span>
                        </div>";
    }
      
    if(isset($_POST['description'])) {
        $description = htmlspecialchars($_POST['description']);
        $email_body .= "<div>
                           <label><b>Visitor Message:</b></label>
                           <div>".$description."</div>
                        </div>";
    }
      
    $recipient = "brothers.jim@gmail.com";
      
    $email_body .= "</div>";
 
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $email . "\r\n";
      
    if(mail($recipient, $instructions, $email_body, $headers)) {
        echo "<p>Thank you for contacting us, $cname. You will get a reply within 24 hours.</p>";
    } else {
        echo '<p>We are sorry but the email did not go through.</p>';
    }
      
} else {
    echo '<p>Something went wrong</p>';
}
?>