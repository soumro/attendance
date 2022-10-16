<?php

    require_once 'vendor/autoload.php';

    class sendEmail{
        public static function SendMail($to,$subject,$content){
            $key = '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';

            $email = new \SendGrid\Mail\Mail();
            $email->setFrom("ashrafsoomro@gmail.com", "Muhammad Ashraf");
            $email->setSubject('Welcome');
            $email->addTo('ashrafsoomro@gmail.com');
            $email->addContent("text/plain", 'Welvome to Conference');
            //$email->addContent("text/html", $content);

            try {
                $response = $sendgrid->send($email);
                return $response;
            } catch (Exception $e) {
                echo 'Email Exception Caught: '. $e->getMessage(). "\n";
                return false;
            }
        }
    }

?>