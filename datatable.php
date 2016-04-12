<?php
include('connection.php');
session_start();
$id = $_SESSION['id'];
$query = "select * from UserTable where Id='$id'";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_row($result);
?>
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
<script>$(document).ready(function() {
    $('#example').DataTable();
} );</script>

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
                        <!--<ul class="nav navbar-nav">
                            <li><a href="#"></a></li>
                            <li><a href="myprofile.php">My Profile</a></li>
                            <li><a href="viewprofile.php">View Profile</a></li>
                            <li class="active"><a href="">Change Password</a></li>
                            <li><a href="index.php?logout=1">Log Out</a></li>

                        </ul>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <?php
                        while (mysqli_num_rows() > 0) {
                            echo $row[0];
                        }
                            ?>
    
        </div>
    </body>
</html>
