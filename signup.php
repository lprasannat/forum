<?php
include("connection.php");
function NewUser()
{
	$FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
	$emailsignup = $_POST['emailsignup'];
	$passwordsignup =  $_POST['passwordsignup'];
	$query = "INSERT INTO UserTable (Firstame,LastName,emailsignup,passwordsignup) VALUES ('$FirstName','$LastName','$emailsignup','$passwordsignup')";
	$data = mysql_query ($query)or die(mysql_error());
	if($data)
	{
	echo "YOUR REGISTRATION IS COMPLETED...";
	}
}

function SignUp()
{
if(!empty($_POST['emailsignup']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{
	$query = mysql_query("SELECT * FROM UserTable WHERE Email= '$_POST[emailsignup]' AND Password = '$_POST[passwordsignup]'") or die(mysql_error());

	if(!$row = mysql_fetch_array($query) or die(mysql_error()))
	{
		newuser();
	}
	else
	{
		echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
	}
}
}
if(isset($_POST['submit']))
{
	SignUp();
}
?>