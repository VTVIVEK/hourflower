<?php 
session_start();
include 'connection.php'; 
include('crud/cartajax.php'); 

if((array_key_exists("id",$_SESSION) AND $_SESSION["id"]) OR (array_key_exists("id",$_COOKIE) AND $_COOKIE["id"])){
 $sql_qry="SELECT SUM(price) AS count FROM cart WHERE userid = '".$_SESSION['id']."'";
$duration = $link->query($sql_qry);
while($record = $duration->fetch_array()){
    $totalcartvalue = $record['count'];
}

$sql_qry1="SELECT SUM(quantity) AS count FROM cart WHERE userid = '".$_SESSION['id']."'";
$duration1 = $link->query($sql_qry1);
while($record1 = $duration1->fetch_array()){
$totalquantity = $record1['count'];}
// $totalquantity = 34;
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Hour Flower</title>
  <!-- <meta http-equiv="refresh" content="3" > -->
  <script src="js/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <style type="text/css">
    
  </style>
</head>
<body>
  
  <header>
	<nav style="background-color:#3474f0; font-weight:bold;" class="navbar  navbar-expand-lg navbar-dark">
		<div class="container">
  <a class="navbar-brand" style="color:#eeeeee;" href="index.php"><ion-icon style="margin-top:-2px; margin-bottom:-5px; margin-right: 5px; font-size:25px;" name="rose"></ion-icon><b>Hour Flower </b>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul  class="navbar-nav ml-auto nav-flex-icons">
      <?php
      if((array_key_exists("id",$_SESSION) AND $_SESSION["id"]) OR (array_key_exists("id",$_COOKIE) AND $_COOKIE["id"])){
            if($_SESSION["admin"] == 1){
        echo '<li class="nav-item">
        <a class="nav-link" href="admin.php"> Admin</a>
      </li>';
      }
    }
       ?>
     	<li class="nav-item">
        <a class="nav-link" href="shop.php">Shop</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <li class="nav-item">
        <a data-toggle="modal" data-target="#exampleModal" class="nav-link" href="#"><ion-icon style="margin-top:-2px; margin-bottom:-5px; font-size:25px;" name="cart"></ion-icon></a>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labellelinky="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!-- <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Shopping Cart <ion-icon style="margin-top:-2px; margin-bottom:-5px; font-size:25px;" name="cart"></ion-icon></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> -->
      <div class="modal-body">
        <table class="table">
  <thead>
    <tr class="bg-success">
      <th scope="col">Product Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col"><button type="button" class="btn btn-dark btn-sm" data-dismiss="modal">Close</button></th>
    </tr>
  </thead>
  <?php cartdetails($_SESSION["id"], $totalcartvalue) ?>
  <tbody>
    <tr class="bg-warning">
      <td>Total</td>
      <td><?php echo $totalcartvalue; ?></td><td><?php echo $totalquantity; ?></td>
      <td><a href="checkout.php"><button type="button" class="btn-primary btn btn-sm">CheckOut</button></a></td>
      </tr>
  </tbody>
</table>

      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Check Out</button>
      </div> -->
    </div>
  </div>
</div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <ion-icon style="margin-top:-2px; margin-bottom:-5px; font-size:25px;"  name="person"></ion-icon>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-default"
          aria-labellelinky="navbarDropdownMenuLink-333">
          <?php 
          if((array_key_exists("id",$_SESSION) AND $_SESSION["id"]) OR (array_key_exists("id",$_COOKIE) AND $_COOKIE["id"])){
            echo '<a class="dropdown-item" href="myaccount.php?vt=1">My Account</a><a class="dropdown-item" href="logout.php">Logout</a>';
            }else{
              echo '<a class="dropdown-item" href="login.php">Login/Signup</a>';
            }
            ?>
        </div>
      </li>
    </ul>
  </div>
  </div>
</nav>
</header>