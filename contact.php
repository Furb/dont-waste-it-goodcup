<?php 

if (isset($_POST['submit'])) {
   
    $sendTo = 'jthabo@gmail.com';
    
    $from = $_POST['email'];
    
    $name = $_POST['navn'];
    
    $tel = $_POST['nummer'];
    
    $firma = $_POST['firma'];
    
    $event = $_POST['event'];
    
    $dato = $_POST['dato'];
    
    $besked = $_POST['besked'];

    // message that will be displayed when everything is OK :)
    $okMessage = 'Contact form successfully submitted. Thank you, I will get back to you soon!';

    // If something goes wrong, we will display this message.
    $errorMessage = 'There was an error while submitting the form. Please try again later';

    
    $headers = "From: ". $fra;
    $txt ="Goodcup bestilling ".$name.".\n".$besked;

    mail($headers, $name, $firma, $txt);
    header("Location: index.html?mailsend");
}


