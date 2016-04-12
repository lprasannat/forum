<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login-Success</title>


         <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type='text/css' href="mycs.css">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="clientvalidation.js"></script>
        <script>
        </script>
        
    </head>


    <?php
    include 'submit.php';
    //include 'AdminSql.php';
    session_start();
    $id=$_SESSION['id'];
    if(!$id){
        header("Location:index.php");
    }
    ?>

    <body data-type="scroll" >


<img alt="full screen background image" src="image2.jpg" id="full-screen-background-image"  class="img-responsive"/>


        <div class="nav navbar-default">

            <div class="container">

                <div class="navbar-header">

                    <a href="" class="navbar-brand"><h4>DashBoard</h4></a>

                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">

                        <span class="sr-only">Toggle navigation</span>

                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>


                    </button>

                </div>

                <div class="collapse navbar-collapse">

                    <ul class="nav navbar-nav">

                        <li class="active"><a href=""> DashBoard</a></li>

                        <li><a href="createuser.php">Users</a></li>

                        <li><a href="index.php?logout=1">Logout</a></li>

                    </ul>
                    <div class="navbar-form navbar-right">
                        <div class="sign">
                            
                            <?php
                            echo $AdminName;
                            ?>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <div class="container UserContainer">
            <div class="container childContainer">
                <form class="form-group"  id="UserProfile" method="post" enctype="multipart/form-data" >

                    <?php
                    $UserQuery = "SELECT * FROM UserTable WHERE Id='" . $_GET['Id'] . "' LIMIT 1";
                    $UserResult = mysqli_query($link, $UserQuery);
                    $id = $_GET['Id'];
                    ?>

                    <div class="table-responsive">          
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>FirstName</th>
                                    <th>LastName</th>
                                    <th>EmailId</th>
                                    <th>Mobile-Number</th>
                                    <th>Password</th>
                                    <th>AddressOne</th>
                                    <th>AddressTwo</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Country</th>
                                    <th>Zip-Code</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_row($UserResult)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row[0] ?></td>
                                        <td><?php echo $row[1] ?></td>
                                        <td><?php echo $row[2] ?></td>
                                        <td><?php echo $row[3] ?></td>
                                        <td><?php echo $row[6] ?></td>
                                        <td><?php echo $row[4] ?></td>
                                        <td><?php echo $row[7] ?></td>
                                        <td><?php echo $row[8] ?></td>
                                        <td><?php echo $row[9] ?></td>
                                        <td><?php echo $row[10] ?></td>
                                        <td><?php echo $row[11] ?></td>
                                        <td><?php echo $row[12] ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                   
                    <input type="button" class="btn btn-success" id="Edit" value="Edit"/>
                     <input type="button" class="btn btn-success" id="Delete" value="Delete"/>
                    <a href="maps.php?Id=<?php echo $id?>">Click here To View Location</a>
                    <a href="#" class="read" data-toggle="modal" data-target="#myModal" >Click Here to view location</a>

                </form> 
               
            </div>

        </div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">X</button>
                <h4 class="modal-title">Location</h4>
            </div>
            <div class="modal-body">
                <?php include("maps.php");?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
    
</div>

    

    </body>



    <script>
        

        $(".UserContainer").css("min-height", $(window).height() - 100);
       
            $(document).ready(function(){
                $("#Edit").click(function(){
                   
                   window.location.href="Edit.php?Id=<?php echo $_GET['Id']; ?>"; 
                });
               
            });
             $(document).ready(function(){
                $("#Delete").click(function(){
                   
                   window.location.href="Delete.php?Id=<?php echo $_GET['Id']; ?>"; 
                });
               
            });
      
    </script>

</html>