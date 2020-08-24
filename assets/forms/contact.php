<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = "connectshivani1337@gmail.com";
$headers = "From: ".$email . "\r\n";

if(mail($to,$subject,$message,$headers)){
    http_response_code(200);
    echo json_encode("Your message has been sent. Thank you!");

}else{
    http_response_code(200);
    echo json_encode(array("msg" => "Something went wrong, Try Again!"));

};
?>
