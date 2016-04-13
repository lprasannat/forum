<?php
include ('passwordchange.php');
session_start();
$Id = $_SESSION['id'];
if ($Id) {    
} else {
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet"  href="mycs.css" type='text/css'>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="changepasswordvalidation.js"></script>
    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">
        <img alt="full screen background image" src="image2.jpg" id="full-screen-background-image"  class="img-responsive"/>
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">FORUM MANAGEMENT</a>
                    <button type="button"  class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="myprofile.php"><i class="glyphicon  glyphicon-user" style="color:green"></i>My Profile</a></li>
                            <li><a href="viewprofile.php"><i class="glyphicon  glyphicon-eye-open" style="color:green"></i>View Profile</a></li>
                            <li class="active"><a href=""><i class="glyphicon  glyphicon-pencil" style="color:green"></i>Change Password</a></li>
                            <li><a href="index.php?logout=1"><i class="glyphicon  glyphicon-off" style="color:green"></i>Log Out</a></li>
                        </ul>
                        </div>
                </div>
            </div>
        </div>
        <div class="container contentcontainer" id="topcontainer">
            <form method="post">
                <div class='row'>
                    <p id='toprow'><label>change Password</label></p><br>
                    <label>Old Password</label> <input type="password" name="OldPassword"  oninvalid="validatePassword(this);"  oninput="validatePassword(this);"  required="required"  placeholder="enter ur password"  class='form-control'>
                    <?php
                    if (isset($Error)) {
                        echo "<div class='alert alert-danger'>" . $Error . "</div>";
                    }
                    ?>
                    <label>New Password</label> <input type="password" name="NewPassword"  id="newPassword" oninvalid="validatePassword(this);"  oninput="validatePassword(this);"  required="required"  placeholder="enter ur new password"  class='form-control'>
                    <label>Confirm New Password</label><input type="password" name="ConfirmNewPassword"  oninvalid="validatePassword(this);"  oninput="validatePassword(this);"  required="required"  placeholder="enter ur  confirm password"  id="confirmPassword" class='form-control'>
                    <input type="submit"  value="Submit" class="btn btn-success btn-lg margintop" name='submit'>
                </div>
        </div>
    </form>
    <div class="col-md-8 col-md-offset-2"><?php
                    if (isset($Message)) {
                        echo "<div class='alert alert-success'>" . $Message . "</div>";
                    }
                    ?>
    </div>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</body>
</html>