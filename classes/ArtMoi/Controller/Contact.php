<?php

class Artmoi_Controller_Contact{


    public function action_index(){
        $name = strip_tags(trim($_POST["name"]));
        $name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $phone = $_POST["phone"];
        $message = trim($_POST["message"]);

        $userEmail = $_POST["recipient"];

        if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }

        $composer = new Email_Composer();

        $composer->email->attributes('to', array(
            array(
                'email' => $userEmail,
                'type' => 'to'
            )
        ));

        $composer->email->attributes(
            array(
                'type' => 'text/plain',
                'from_name' => $name,
                'from_email' => $email,
                'subject' => 'Message from: ' . $name . ' on Artmoi', // Probably change this
                'html' => " <table style='font-family:Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0;  width: 100%; padding: 20px;'><tr style='margin-bottom:10px;'><div>From: $name < $email ></div></tr> <tr><td>$message</td></tr> <tr style='margin-top:15px;'><td>Name: $name<br/>Email: $email<br/>Phone: $phone</td></tr></table>"
            ));

        $result = $composer->send(); // Sending needs some work too

//        error_log("Email notification results are ... " . json_encode($result));

        if($result[0]['status'] == "sent"){
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank You! Your message has been sent.";
            exit;
        } else{
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message.";
            exit;
        }

    }

}