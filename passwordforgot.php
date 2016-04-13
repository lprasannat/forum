<?php

include ('connection.php');
session_start();
$id = $_SESSION['id'];
if ($id) {
    if (isset($_POST["submit"])) {
        $email = $_POST["email"];
        $query = "select FirstName, Password from UserTable where EmailId='$email'";
        $result = mysqli_query($link, $query);

        $row = mysqli_fetch_row($result);
//$FirstName=$row['FirstName'];
        if (!$row) {
            $error = "This email address is not registered";
        } else {

            $message = "Passowrd has been sent to your email Id";
            require_once('PHPMailer-master/class.phpmailer.php');
            include("PHPMailer-master/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

            $mail = new PHPMailer();

            $body = "Your Password is: " . $row[1];

            $mail->IsSMTP(); // telling the class to use SMTP

            $mail->Host = "mail.gmail.com"; // SMTP server

            $mail->SMTPDebug = 0;                     // enables SMTP debug information (for testing)

            $mail->SMTPAuth = true;                  // enable SMTP authentication

            $mail->SMTPSecure = "tls";                 // sets the prefix to the servier

            $mail->Host = "smtp.gmail.com";      // sets GMAIL as the SMTP server

            $mail->Port = 587;                   // set the SMTP port for the GMAIL server

            $mail->Username = "lakshmi.nadella@karmanya.co.in";  // GMAIL username

            $mail->Password = "lakshmi@123";            // GMAIL password



            $mail->SetFrom('lakshmi.nadella@karmanya.co.in', 'lakshmi');
            $mail->AddReplyTo("lakshmi.nadella@karmanya.co.in", "lakshmi");
            $mail->Subject = "Registration Complete";
            $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
            $mail->MsgHTML($body);
            $address = $email;
            $mail->AddAddress($address, " h");
            if (!$mail->Send()) {

                $error.= $mail->ErrorInfo;
            }
        }
    }
} else {
    header("Location:index.php");
}
?>