<?php
include('connection.php');
session_start();
$Id = $_SESSION['id'];
if ($Id) {
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
} else {
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>View Profile</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet"  href="mycs.css" type='text/css'>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">
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
                            <li><a href="#"></a></li>
                            <li><a href="myprofile.php"><i class="glyphicon  glyphicon-user" style="color:green"></i>My Profile</a></li>
                            <li  class="active"><a href=""><i class="glyphicon  glyphicon-eye-open" style="color:green"></i>View Profile</a></li>
                            <li><a href="changepassword.php"><i class="glyphicon  glyphicon-pencil" style="color:green"></i>Change Password</a></li>
                            <li><a href="index.php?logout=1"><i class="glyphicon  glyphicon-off" style="color:green"></i>Log Out</a></li>
                        </ul>
                        <div class=" navbar-header pull-right"><h4><a href=""><?php echo $FirstName; ?></a></h4>
                            <form method="post"></form>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <div class="container contentcontainer">
            <img alt="full screen background image" src="image2.jpg" id="full-screen-background-image"  class="img-responsive"/>
            <div class="col-md-6 col-md-offset-3" id="toprow">
                <p class="bold margintop"></p>
                <form class="margintop" method="post">
                    <div class="row">
                        <div class="col-md-6 col-offset-3">
                            <div class="form-group">
                                <label>First Name:</label>
                                <input type="text" class="form-control" value="<?php echo $FirstName; ?>" disabled>
                            </div>
                        </div>
                        <div class="col-md-6 col-offset-3">
                            <div class="form-group">
                                <label for="LastNamesignup">LastName</label><br>
                                <input type="text" name="LastNamesignup" value="<?php echo $LastName; ?>" disabled oninvalid="validateLastName(this);"  oninput="validateLastName(this);"  required="required"  placeholder="enter ur  name"  class='form-control'>
                                <span id="lastspan"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-offset-3">
                            <div class="form-group">
                                <label for="emailsignup">EmailAddress</label><br>
                                <input type="email" name="emailsignup" value="<?php echo $EmailAddress; ?>" disabled oninvalid="validateEmail(this);"  oninput="validateEmail(this);" required="required" placeholder="enter ur email"  class='form-control'>
                                <span id="emailspan"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group col-offset-3">
                                <label for="MobileNumber">Mobile Number</label><br>
                                <input type="text" name="MobileNumber" value="<?php echo $MobileNumber; ?>" disabled placeholder="enter ur mobilenumber"  class='form-control'>
                                <span id="mobilespan"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-offset-3">
                            <div class="form-group">
                                <label for="AddressLine1">Address Line1</label><br>
                                <input type="text" name="AddressLine1"  value="<?php echo $AddressLineOne; ?>" disabled  class='form-control'>
                                <span id="emailspan"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group col-offset-3">
                                <label for="AddressLine2">Address Line2</label><br>
                                <input type="text" name="AddressLine2" value="<?php echo $AddressLineTwo; ?>" disabled  class='form-control'>
                                <span id="mobilespan"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-offset-3">
                            <div class="form-group">
                                <label for="City">City</label><br>
                                <input type="text" name="City" value="<?php echo $City; ?>" disabled class='form-control'>
                                <span id="emailspan"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group col-offset-3">
                                <label for="State">State</label><br>
                                <input type="text" name="State" value="<?php echo $State; ?>" disabled  class='form-control'>
                                <span id="mobilespan"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-offset-3">
                            <div class="form-group">
                                <label for="Country">Country</label><br>
                                <input type="text" name="Country"  value="<?php echo $Country; ?>" disabled  class='form-control'>
                                <span id="emailspan"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group col-offset-3">
                                <label for="ZipCode">ZipCode</label><br>
                                <input type="text" name="ZipCode" value="<?php echo $ZipCode; ?>" disabled  class='form-control'>
                                <span id="mobilespan"></span>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="read" data-toggle="modal" data-target="#ModalId">Click to view map</a>
                </form>
            </div>
        </div>
        <div class="modal fade" id="ModalId" >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times</button>
                        <h4 class="modal-title">Location</h4>
                    </div>
                    <div class="modal-body">
                        <?php include("usermap.php"); ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>

        </div>

    </body>
</html>