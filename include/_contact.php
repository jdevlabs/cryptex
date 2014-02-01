<?php

    // require PHPMailer
    require("class.phpmailer.php");

    // validate submission
    if (!empty($_POST['prob']))
    {
        // instantiate mailer
        $mail = new PHPMailer();
         
        // use SMTP
        $mail->IsSMTP();
        $mail->Host = ""; //specify a host
          
        // set From:
        $mail->SetFrom(""); //sending ID
          
        // set To:
        $mail->AddAddress(""); //receiving id

        // set Subject:
        $mail->Subject = "admin contact";
             
        // set body
        $mail->Body = $_POST['prob'] ;
        // send mail
        if ($mail->Send() == false)
        {
            die($mail->ErrInfo);
        }
    }
    else
    {
        header("Location: http://"); //specify a location to redirect the user to , in case of a failure
        exit;
    }
?>

<!DOCTYPE html>
