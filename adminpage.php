<?php
include 'submit.php';
session_start();
$Id = $_SESSION['id'];
if ($Id) {
    $Sql = "SELECT Id,FirstName,LastName,EmailId,MobileNumber,AddressLine1 FROM UserTable";
    $Result = mysqli_query($link, $Sql);
    $Row = mysqli_fetch_all($Result);
} else {
    header("Location:index.php");
}
?>
<!doctype html>
<html>
    <head>
        <title>Admin Dashboard</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet"  href="mycs.css" type='text/css'>
        <script type="text/javascript" src="js/jquery.js"></script>
        <link href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css" rel="stylesheet">
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
        <script>
            var Data =<?php echo json_encode($Row); ?>;
            $(document).ready(function () {

                $('#example').DataTable({
                    data: Data,
                    columns: [
                        {title: "Id"},
                        {title: "Firstname"},
                        {title: "Lastname"},
                        {title: "EmailId"}
                    ]
                });
                var table = $('#example').DataTable();
                $('#example tbody').on('click', 'tr', function () {
                    var data = table.row(this).data();
                    //alert('You clicked on ' + data[0] + '\'s row');
                    window.location.href = "adminviewedit.php?Id=" + data[0];
                });


            });
        </script>
    </head>
    <body>
        <img alt="full screen background image" src="image2.jpg" id="full-screen-background-image"  class="img-responsive"/>
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand">Regt Page</a>
                    <button type="button" class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse">
                        <span class="sr-only"> Toggle</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav ">
                        <li class="active"><a href=""><i class="glyphicon  glyphicon-table"></i>User Table</span></a></li>
                        <li class=""><a href="createuser.php"><i class="glyphicon  glyphicon-user" style="color:green"></i>Create User</a></li>
                    </ul>
                    <ul class="nav navbar-nav pull-right">
                        <li><a href="index.php?logout=1"><i class="glyphicon  glyphicon-off" style="color:green"></i>Log Out</a></li>
                    </ul>                    
                </div>
                <div class="container">
                    <form class="form-group"  id="UserProfile" method="post" enctype="multipart/form-data" > 
                        <table id="example" class="display" width="100%">                           
                        </table>
                    </form>   
                </div>
                <script src="js/bootstrap.min.js"></script>
                </body>
                </html>
            </div>
        </div>
    </body>
</html>