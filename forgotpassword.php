<?php
include ('passwordforgot.php');
session_start();
$id = $_SESSION['id'];
if ($id) {
    
} else {
    header("Location:index.php");
}
?>
<html>
    <head>

        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">
        <!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type='text/css' href="mycs.css">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="clientvalidation.js"></script>


    </head>
    <body>
        <div class="container contentcontainer">
            <img alt="full screen background image" src="image2.jpg" id="full-screen-background-image"  class="img-responsive"/>

            <form class="margintop" method="post">


                <div class="col-md-6 middle col-offset-3" id="toprow">

                    <div class="form-group">
                        <label for="UserName">UserName</label><br>
                        <input type="email" name="email"  oninvalid="validateUserName(this);"  oninput="validateUserName(this);"  required="required"  placeholder="enter ur  name"  class='form-control'>
                        <input type="submit"  value="Submit" class="btn btn-success btn-lg margintop" name='submit'>


                    </div>  
                </div>
            </form>
            <?php
            if (isset($error)) {
                echo '<div class="alert alert-danger">' . $error . '</div>';
            }
            if (isset($message)) {
                echo '<div class="alert alert-success">' . $message . '</div>';
            }
            ?>
        </div>
    </body>
</html>
