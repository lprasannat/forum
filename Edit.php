<?php
include('connection.php');
include ('adminedit.php');
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
        <!--<script type="text/javascript" src="js/jquery.js"></script>-->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="clientvalidation.js"></script>

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
                            <li class="active"><a href=""><i class="glyphicon  glyphicon-user" style="color:green"></i>My Profile</a></li>
                            <li><a href="viewprofile.php"><i class="glyphicon  glyphicon-eye-open" style="color:green"></i>View Profile</a></li>
                           <!-- <li><a href="changepassword.php">Change Password</a></li>-->
                            <li><a href="index.php?logout=1"><i class="glyphicon  glyphicon-off" style="color:green"></i>Log Out</a></li>

                        </ul>
                        <div class=" navbar-header pull-right"><h4><a href=""><i class="glyphicon  glyphicon-user" style="color:green"></i><?php echo $firstName; ?></a></h4>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="container contentcontainer">
            <img alt="full screen background image" src="image2.jpg" id="full-screen-background-image"  class="img-responsive"/>
            <div class="row">
                <div class="col-md-6 col-md-offset-3" id="toprow">
                    <!-- <h1 class="margintop">SIGN UP</h1>
                     <!--<p class="lead"> Your secret Diary</p>-->
                     <!--<p>some more information about the app.You can go into alittle more details if you want to.</p>-->

                    <p class="bold margintop"></p>
                    <form class="margintop" method="post">

                        <div class="row">
                            <div class="col-md-6 col-offset-3">

                                <div class="form-group">

                                    <label for="FirstNamesignup">FirstName</label><br>
                                    <input type="text" name="FirstNamesignup"  value="<?php echo $firstName; ?>" disabled oninvalid="validateFirstName(this);"  oninput="validateFirstName(this);"  required="required"  placeholder="enter ur  name"  class='form-control'>
                                    <span id="firstspan"></span>

                                </div>
                            </div>
                            <div class="col-md-6 col-offset-3">
                                <div class="form-group">

                                    <label for="LastNamesignup">LastName</label><br>
                                    <input type="text" name="LastNamesignup"   value="<?php echo $lastName; ?>" disabled oninvalid="validateLastName(this);"  oninput="validateLastName(this);"  required="required"  placeholder="enter ur  name"  class='form-control'>
                                    <span id="lastspan"></span>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-offset-3">

                                <div class="form-group">

                                    <label for="emailsignup">EmailAddress</label><br>
                                    <input type="email" name="emailsignup"    value="<?php echo $emailAddress; ?>" disabled oninvalid="validateEmail(this);"  oninput="validateEmail(this);" required="required" placeholder="enter ur email"  class='form-control'>
                                    <span id="emailspan"></span>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group col-offset-3">

                                    <label for="MobileNumber">Mobile Number</label><br>
                                    <input type="text" name="MobileNumber"   value="<?php echo $mobileNumber; ?>" disabled placeholder="enter ur mobilenumber"  class='form-control'>
                                    <span id="mobilespan"></span>

                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-6 col-offset-3">

                                <div class="form-group">

                                    <label for="AddressLine1">Address Line1</label><br>
                                    <input type="text" name="AddressLine1"  oninvalid="validateAddressLine1(this);"  oninput="validateAddressLine1(this);" required="required" placeholder="enter ur email"  class='form-control'>
                                    <span id="emailspan"></span>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group col-offset-3">

                                    <label for="AddressLine2">Address Line2</label><br>
                                    <input type="text" name="AddressLine2"  oninvalid="validateAddressLine2(this);"  oninput="validateAddressLine2(this);" required="required"placeholder="enter ur mobilenumber"  class='form-control'>
                                    <span id="mobilespan"></span>

                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-6 col-offset-3">

                                <div class="form-group">

                                    <label for="City">City</label><br>
                                    <input type="text" name="City"  oninvalid="validateCity(this);"  oninput="validateCity(this);" required="required" placeholder="enter ur email"  class='form-control'>
                                    <span id="emailspan"></span>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group col-offset-3">

                                    <label for="State">State</label><br> 
                                    <input type="text" name="State" placeholder="enter ur mobilenumber"  oninvalid="validateState(this);"  oninput="validateState(this);" required="required" class='form-control'>
                                    <span id="mobilespan"></span>

                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-6 col-offset-3">

                                <div class="form-group">

                                    <label for="Country">Country</label><br>
                                    <input type="text" name="Country"  oninvalid="validateCountry(this);"  oninput="validateCountry(this);" required="required" placeholder="enter ur Country"  class='form-control'>
                                    <span id="emailspan"></span>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group col-offset-3">

                                    <label for="ZipCode">ZipCode</label><br>
                                    <input type="text" name="ZipCode"  oninvalid="validateZipCode(this);"  oninput="validateZipCode(this);" required="required"placeholder="enter ur ZipCode"  class='form-control'>
                                    <span id="mobilespan"></span>

                                </div>
                            </div>


                        </div>




                        <input type="submit"  value="SUBMIT" class="btn btn-success btn-lg margintop" name='submit'>
                    </form>
                    <div class="col-md-8 col-md-offset-2"><?php
                        if (isset($message)) {
                            echo "<div class='alert alert-success'>" . $message . "</div>";
                        }
                        ?></div>
                </div>

            </div>
        </div>
