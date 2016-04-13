<?php

session_start();
//$id=$_SESSION["id"];
$Id = $_GET['Id'];
$Query = "select * from UserTable where Id='$Id'";
$Result = mysqli_query($link, $Query);
$Row = mysqli_fetch_row($Result);
$FirstName = $Row[1];
$LastName = $Row[2];
$EmailAddress = $Row[3];
$MobileNumber = $Row[6];
$AddressLineOne = $Row[7];
$AddressLineTwo = $Row[8];
$City = $Row[9];
$State = $Row[10];
$Country = $Row[11];
$ZipCode = $Row[12];
if (isset($_POST["submit"])) {
    if ($_POST["submit"] == "SUBMIT") {
        $EditAddressOne = $_POST["AddressLine1"];
        $EditAddressTwo = $_POST["AddressLine2"];
        $EditCity = $_POST["City"];
        $EditState = $_POST["State"];
        $EditCountry = $_POST["Country"];
        $EditZipCode = $_POST["ZipCode"];
        $QueryEdit = "update UserTable set AddressLine1='$EditAddressOne', AddressLine2='$EditAddressTwo', City='$EditCity', State='$EditState', Country='$EditCountry', ZipCode='$EditZipCode' where Id='$Id'";
        $EditResult = mysqli_query($link, $QueryEdit);
        if ($EditResult) {

            $Message = "Successfully Updated the Profile";
        } else {
            $Error = "Profile could not be Updated Please try again";
        }
    }
}
if (isset($_POST['Delete-Profile'])) {
    $DeleteQuery = 'DELETE FROM UserTable WHERE Id="' . $_GET['Id'] . '" LIMIT 1';
    $DeleteResult = mysqli_query($link, $DeleteQuery);
    if ($DeleteResult)
        $Message.="Your Profile Has beeen Successfully deleted.";
}
?>