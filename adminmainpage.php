<?php
include ('connection.php');

session_start();
$id = $_SESSION["id"];
$queryUserLogIn = "select AdminName from AdminTable where Id='$id'";
$resultUserLogIn = mysqli_query($link, $queryUserLogIn);
$row = mysqli_fetch_row($resultUserLogIn);
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


    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header pull-left">
                    <a class="navbar-brand" href="#">FORUM MANAGEMENT</a>
                </div>
                <div class=" navbar-header pull-right"><h4><a href=""><?php echo $row[0]; ?></a></h4>

                    </div>

            </div>
        </div>
        <div class="container contentcontainer">
            <img alt="full screen background image" src="image2.jpg" id="full-screen-background-image"  class="img-responsive"/>
            <div class="row">
                <div class="col-md-6 col-md-offset-3" id="toprow">
                    <strong><center><p class="forgot">YOU HAVE SUCCESSFULLY LOGGED IN<?php echo $row[0]; ?></p></center></strong>
                    <a href="adminpage.php"><p class="forgot">DashBoard</p></a>
                </div>
            </div>

        </div>



        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!--<script src="js/bootstrap.min.js"></script>-->
        <!--<script>
            $(".contentcontainer").css("height", $(window).height());
            $(".containertext").css("height", $(window).height() - 120);
            $("textarea").keyup(function () {
                $.post("updatediary.php", {diary: $("textarea").val()});
            });

        </script>-->

    </body>
</html>