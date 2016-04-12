<?php

session_start();
/*if ($_GET['logout'] == 1 AND $_SESSION['id']) {
    session_destroy();
    $message = "you have been successfully logged out!";
}*/
include("connection.php");

if (isset($_POST["login"])) {

    if ($_POST["login"] == "LogIn") {

        $email = $_POST["email"];
        $password = $_POST["password"];

        $query = "select * from AdminTable where email='$email' and password='$password'";
        $resultlogin = mysqli_query($link, $query);
        $row1 = mysqli_fetch_array($resultlogin);
        if (!$row1) {

            $error = "Login Failed check the credentials ";
        } else {
            $_SESSION["id"] = $row1["id"];
            //$error = "Login Successful";

            header("Location:mainpage.php");
        }
    }
}

/*if (isset($_POST["signup"])) {
    if ($_POST["signup"] == "SignUp") {
        $error = "";
       /* if (!$_POST['EmailSignup'])
            $error.="please enter the email id <br/>";
        else if (!(filter_var($_POST['EmailSignup'], FILTER_VALIDATE_EMAIL)))
            $error.="please enter valid email id <br/>";


        if (!$_POST['PasswordsSignup'])
            $error.="please enter the password <br/>";
        else {


            if (strlen($_POST['PasswordSignup']) < 8)
                $error.="the length of pssword must be atleast 8 characters<br/>";
            if (!preg_match('`[A-Z]`', $_POST['PasswordSignup']))
                $error.="password should contain atleast one Captial Letter <br/>";
        }
        if ($error)
            $error = "there were errors in your signup details<br/>" . $error;
        else {*/
           /* $emailsignup = $_POST["EmailSignup"]; echo $emailsignup;
            $passwordsignup = $_POST["PasswordSignup"];
            if (!($_POST["EmailSignup"] == "" && !($_POST["PasswordSignup"]))) {
                $queryselect = "select * from UserTable where Email='$emailsignup' and Password='$passwordsignup'";
                $resultselect = mysqli_query($link, $queryselect);
                $values = mysqli_fetch_array($resultselect);

                if ($values) {
                    $error = "email already registered";
                } else {
                    $query1 = "insert into UserTable(Email,Password) values($emailsignup','$passwordsignup')";
                    $resultsignup = mysqli_query($link, $query1);

                    mysqli_query($link, $query);
                   //$message.="you were successfully signed!";
                   // $_SESSION['id'] = mysqli_insert_id($link);
                    // print_r($_SESSION);
                    //header("Location:mainpage.php");
                }
            } else {
              $error = "Please enter Email and password to sign Up";
              }
              if (!(isset($resultsignup))) {
              $error = "Unable to sign up <br>" . $error;
              }
              else if (!($error)) {
              $message = "Sign up successful " . "Please login to use your secret diary";
              } 
        }
    }
*/
?>