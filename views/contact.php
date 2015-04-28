<?php
$title = "contact";
$form= "<form method='post' action=''>
        <label for='email'>Your email:</label>
        <input type='email' name='email' id='email'>
        <label for='sub'>Subject:</label>
        <input type='text' name='subject' id='sub'>
        <label for='msg'>Message:</label>
        <textarea name='msg' id='msg'></textarea>
        <input type='submit' value='Send'>
        </form>";
        
$content = "<h1>Send me a message</h1>";

if(isset($_POST["msg"])){
    $to = "jessicatierney0407@gmail.com";
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $msg = $_POST["msg"];
    $head = "FROM: $email";
    
    $ok = mail($to, $subject, $msg, $head);
    
    if($ok){
        $content = "<h1>Your message was sent.</h1>
                  <p>Thank you for your message.</p>";
    }else{
        $content = "<h1>Your message was not sent</h1>
                    <p>Please try again.</p>" . $form;
    }
}else{
    $content .=$form;
}







