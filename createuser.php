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
        <link rel="stylesheet" type='text/css' href="mycs.css">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="clientvalidation.js"></script>
        <?php
        include("submit.php");
        ?>
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
                </div>
            </div>
        </div>
        <div class="container contentcontainer">
            <img alt="full screen background image" src="image2.jpg" id="full-screen-background-image"  class="img-responsive"/>
            <div class="row">
                <div class="col-md-6 col-md-offset-3" id="toprow">
                    <h1 class="margintop">SIGN UP</h1>
                    <?php
                    if (isset($Error)) {
                        echo '<div class="alert alert-danger">' . $Error . '</div>';
                    }
                    if (isset($Message)) {
                        echo '<div class="alert alert-success">' . $Message . '</div>';
                    }
                    ?>
                    <p class="bold margintop"></p>
                    <form class="margintop" method="post" >
                        <div class="row">
                            <div class="col-md-6 col-offset-3">
                                <div class="form-group">
                                    <label for="FirstNamesignup">FirstName</label><br>
                                    <input type="text" name="FirstNamesignup" id="fname"  oninvalid="validateFirstName(this);"  oninput="validateFirstName(this);"  required="required"  placeholder="enter ur  name"  class='form-control'>
                                    <span id="firstspan"></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-offset-3">
                                <div class="form-group">
                                    <label for="LastNamesignup">LastName</label><br>
                                    <input type="text" name="LastNamesignup" id="lname" oninvalid="validateLastName(this);"  oninput="validateLastName(this);"  required="required"  placeholder="enter ur  name"  class='form-control'>
                                    <span id="lastspan"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-offset-3">
                                <div class="form-group">
                                    <label for="emailsignup">EmailAddress</label><br>
                                    <input type="email" name="emailsignup" id="mail" oninvalid="validateEmail(this);"  oninput="validateEmail(this);" required="required" placeholder="enter ur email"  class='form-control'>
                                    <span id="emailspan"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group col-offset-3">
                                    <label for="passwordsignup">Password</label><br>
                                    <input type="password" name="passwordsignup" id="mobile" placeholder="enter ur password"  class='form-control'>
                                    <span id="mobilespan"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-offset-3">
                                <div class="form-group">
                                    <label for="ConfirmPassword">Confirm PAssword</label><br>
                                    <input type="password" name="ConfirmPassword"  placeholder="confirm assword"  class='form-control'>
                                    <span id="emailspan"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group col-offset-3">
                                    <label for="MobileNumber">Mobile Number</label><br>
                                    <input type="text" name="MobileNumber" id="mobile" placeholder="enter ur mobilenumber"  class='form-control'>
                                    <span id="mobilespan"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-offset-3">
                                <div class="form-group">
                                    <label for="AddressLine1">Address Line1</label><br>
                                    <input type="text" name="AddressLine1"  placeholder="AddressLine1"   class='form-control'>
                                    <span id="emailspan"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group col-offset-3">
                                    <label for="AddressLine2">Address Line2</label><br>
                                    <input type="text" name="AddressLine2" placeholder="AddressLine2"  class='form-control'>
                                    <span id="mobilespan"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-offset-3">
                                <div class="form-group">
                                    <label for="City">City</label><br>
                                    <input type="text" name="City"  placeholder="city" class='form-control'>
                                    <span id="emailspan"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group col-offset-3">
                                    <label for="State">State</label><br>
                                    <input type="text" name="State"   placeholder="state" class='form-control'>
                                    <span id="mobilespan"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-offset-3">
                                <div class="form-group">
                                    <label for="Country">Country</label><br>
                                    <input type="text" name="Country"   placeholder="country"  class='form-control'>
                                    <span id="emailspan"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group col-offset-3">
                                    <label for="ZipCode">ZipCode</label><br>
                                    <input type="text" name="ZipCode" placeholder="zipcode"  class='form-control'>
                                    <span id="mobilespan"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-offset-3">
                                <div class="form-group">                                    
                                    <div class="checkbox">
                                        <label><input type="checkbox"  name="terms" id="term1"  required value="accept">Terms And Conditions</label>
                                        <span id="checkspan"></span>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <input type="submit"  value="SignUp" class="btn btn-success btn-lg margintop" name='signup'>
                    </form>
                </div>
            </div>
        </div>
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>      

    </body>
</html>
