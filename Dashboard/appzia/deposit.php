<?php
// Start the session
session_start();
?>

<?php
$servername = "localhost";
$username = "capitalc_001";
$password = "An0therrichard3303";
$dbname = "capitalc_001";
$date = date('d-m-Y H:m:s');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_SESSION["username"])){
   }else{
echo'<script>window.location = 

"https://capitalcuonline.com"</script>';
}

   if (isset($_SESSION["username"])){

$username="". $_SESSION["username"] . "";
$password="". $_SESSION["password"] . "";
$otp="". $_SESSION["otp"] . "";

$sql = "SELECT * FROM register WHERE username = '".$_SESSION["username"]."' AND password = '".$_SESSION["password"]."' AND d = '".$_SESSION["otp"]."'";
$result = $conn->query($sql);
if ($result->num_rows > 0 ) {
  
$sql = "SELECT * FROM register WHERE username = '".$username."' AND password = '".$password."' AND d = '".$otp."'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
          $name = $row['name'];
          $accountnumber = $row['account_number'];
          $accounttype = $row['account_type'];
          $accountlimit = $row['account_limit'];
          $accountbalance = $row['account_balance'];
          $address = $row['address'];
          $phone = $row['phone'];
          $transferstatus = $row['transaction_status'];
            $accountstatus = $row['account_status'];
   }





}else{

//what happens if it doesnt get rows wia session exists
  

}
}else{

//what happens if session aint set.

}
?>

<!DOCTYPE html><html>
<!-- Mirrored from themesdesign.in/appzia/typography.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2018 18:29:07 GMT -->
<head><meta charset="utf-8" /><title><?php echo $name?></title><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /><meta content="Admin Dashboard" name="description" /><meta content="ThemeDesign" name="author" /><meta http-equiv="X-UA-Compatible" content="IE=edge" /><link rel="shortcut icon" href="assets/images/favicon.ico"><link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"><link href="assets/css/icons.css" rel="stylesheet" type="text/css"><link href="assets/css/style.css" rel="stylesheet" type="text/css"></head>

<?php
$servername = "localhost";
$username = "capitalc_001";
$password = "An0therrichard3303";
$dbname = "capitalc_001";
$date = date('d-m-Y H:m:s');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

   if (isset($_SESSION["username"])){

$username="". $_SESSION["username"] . "";
$password="". $_SESSION["password"] . "";


$sql = "SELECT * FROM register WHERE username = '".$_SESSION["username"]."' AND password = '".$_SESSION["password"]."'";
$result = $conn->query($sql);
if ($result->num_rows > 0 ) {
  
$sql = "SELECT * FROM register WHERE username = '".$username."' AND password = '".$password."'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
          $name = $row['name'];
          $accountnumber = $row['account_number'];
          $accounttype = $row['account_type'];
          $accountlimit = $row['account_limit'];
          $accountbalance = $row['account_balance'];
          $address = $row['address'];
          $phone = $row['phone'];
          $transferstatus = $row['transaction_status'];
            $accountstatus = $row['account_status'];
            $dp = $row['e'];
   }





}else{

//what happens if it doesnt get rows wia session exists
  

}
}else{

//what happens if session aint set.

}
?>


<body class="fixed-left"><div id="wrapper"><div class="topbar"><div class="topbar-left"><div class="text-center"> <a href="index.html" class="logo"><img src="assets/images/capital.jpg"></a> <a href="index.html" class="logo-sm"><img src="assets/images/logo_sm.png"></a></div></div><div class="navbar navbar-default" role="navigation"><div class="container"><div class=""><div class="pull-left"> <button type="button" class="button-menu-mobile open-left waves-effect waves-light"> <i class="ion-navicon"></i> </button> <span class="clearfix"></span></div><form class="navbar-form pull-left" role="search"><div class="form-group"><div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script></div> <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button></form><ul class="nav navbar-nav navbar-right pull-right"><li class="dropdown hidden-xs"> <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light notification-icon-box" data-toggle="dropdown" aria-expanded="true"> <i class="fa fa-bell"></i> <span class="badge badge-xs badge-danger"></span> </a><ul class="dropdown-menu dropdown-menu-lg noti-list-box"><li class="text-center notifi-title">Notification <span class="badge badge-xs badge-success">3</span></li><li class="list-group"> <a href="javascript:void(0);" class="list-group-item"><div class="media"><div class="media-heading">Your order is placed</div><p class="m-0"> <small>Dummy text of the printing and typesetting industry.</small></p></div> </a> <a href="javascript:void(0);" class="list-group-item"><div class="media"><div class="media-body clearfix"><div class="media-heading">New Message received</div><p class="m-0"> <small>You have 87 unread messages</small></p></div></div> </a> <a href="javascript:void(0);" class="list-group-item"><div class="media"><div class="media-body clearfix"><div class="media-heading">Your item is shipped.</div><p class="m-0"> <small>It is a long established fact that a reader will</small></p></div></div> </a> <a href="javascript:void(0);" class="list-group-item"> <small class="text-primary">See all notifications</small> </a></li></ul></li><li class="hidden-xs"> <a href="#" id="btn-fullscreen" class="waves-effect waves-light notification-icon-box"><i class="mdi mdi-fullscreen"></i></a></li><li class="dropdown"> <?php echo '<a href="https://capitalcuonline.com/Dashboard/appzia/'.$dp.'" class="profile waves-effect waves-light" aria-expanded="true"><img src='.$dp.' alt="user-img" class="img-circle"></a>'?><ul class="dropdown-menu"><li><a href="javascript:void(0)"> Profile</a></li><li><a href="javascript:void(0)"><span class="badge badge-success pull-right">5</span> Settings </a></li><li><a href="javascript:void(0)"> Lock screen</a></li><li class="divider"></li><li><a href="javascript:void(0)"> Logout</a></li></ul></li></ul></div></div></div></div><div class="left side-menu"><div class="sidebar-inner slimscrollleft"><div id="sidebar-menu"><ul><li class="menu-title">Menu</li><li> <a href="index.php" class="waves-effect"><i class="mdi mdi-home"></i><span> Dashboard <span class="badge badge-primary pull-right">1</span></span></a></li><li> <a href="typography.php" class="waves-effect"><i class="mdi mdi-account"></i><span>Account



<?php

if($accountstatus === "1"){
  echo'<span class="badge badge-success pull-right">Active</span>';
}
if($accountstatus === "0"){
 echo'<span class="badge badge-danger pull-right">suspended</span>';

}
if($accountstatus === "3"){
  echo'<span class="badge badge-warning pull-right">Pending</span>';
}
   
    ?>



    </span></a></li><li class="has_sub"> <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-card-details"></i> <span>Transactions </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a><ul class="list-unstyled"><li><a href="deposit.php">Deposit</a></li><li><a href="transfer.php">Transfer</a></li></ul></li></li>

<li> <a href="index.html" class="waves-effect"><i class="mdi mdi-key"></i><span> Logout </span></a></li><li>



	</ul></li></ul></div></a></div></li></ul></div></ul><div class="clearfix"></div></div></div><div class="content-page"><div class="content"><div class=""><div class="page-header-title"><h4 class="page-title">Make a deposit.</h4></div></div><div class="page-content-wrapper "><div class="container"><div class="row"><div class="col-md-12"><div class="panel panel-primary"><div class="panel-body"><h4 class="m-b-30 m-t-0"><font color="#034c7c">Choose a method to deposit to your account(<?php
echo $accountnumber

?>
) below.</font>

<div class="modal fade bs-example-modal-sm1" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true"><div class="modal-dialog modal-sm"><div class="modal-content"><div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h4 class="modal-title" id="mySmallModalLabel"><font clas="text-primary" size="2">Option not available for this type of account.</font></h4></div><div class="modal-body">/div></div></div></div></div>


<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true"><div class="modal-dialog modal-sm"><div class="modal-content"><div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h4 class="modal-title" id="mySmallModalLabel"><font clas="text-primary" size="2">You are not yet verified to make card deposits<br>kindly contact your account officer bobroberts@creditcuonline.com</font></h4></div><div class="modal-body">/div></div></div>




</div></div></div></div><div class="row"><div class="col-md-12"></div></div><div class="row"><div class="col-md-6"><div class="panel panel-primary"><div class="panel-body"><h4 class="m-b-30 m-t-0">Deposit by card</h4><p class="text-success">Transfer money from your credit/debit card to your bank account.</p><p class="text-info"><button class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-sm">Deposit</button></p><p class="text-warning"></p><p class="text-danger"></p></div></div></div>

<!-- modal -->




<div class="col-md-6"><div class="panel panel-primary">




  <div class="panel-body"><h4 class="m-b-30 m-t-0">Mobile deposit</h4><p class="text-muted">Deposit a cheque directly to your account(unavailable).</p><p class="text-info"><button class="btn btn-dark waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-sm1">Deposit</button></p><p class="text-warning"></p><p class="text-danger"></p></div></div></div></div></div></div></div>




<footer class="footer"> © 2018 Capital Credit union - All Rights Reserved. </footer></div></div> <script src="assets/js/jquery.min.js"></script> <script src="assets/js/bootstrap.min.js"></script> <script src="assets/js/modernizr.min.js"></script> <script src="assets/js/detect.js"></script> <script src="assets/js/fastclick.js"></script> <script src="assets/js/jquery.slimscroll.js"></script> <script src="assets/js/jquery.blockUI.js"></script> <script src="assets/js/waves.js"></script> <script src="assets/js/wow.min.js"></script> <script src="assets/js/jquery.nicescroll.js"></script> <script src="assets/js/jquery.scrollTo.min.js"></script> <script src="assets/js/app.js"></script> </body>
<!-- Mirrored from themesdesign.in/appzia/typography.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2018 18:29:07 GMT -->
</html>