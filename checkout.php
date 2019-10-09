<?php include 'components/header.php';
// include('crud/cartajax.php'); 


function addressdetails(){
  include 'connection.php'; 
  $query="SELECT * FROM address WHERE userid = '".$_SESSION['id']."'";
  $result = $link->query($query);
  if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {

      $cartproduct="<div class='alert alert-primary' role='alert'><b>Delivery Address</b> 
      <h3>".$row['name']."</h3><span>".$row['phone']."</span><br/><span>".$row['address']."</span><br/>
      <span>".$row['pincode']."</span><br/><span>".$row['state']."</span><br/></div>";
    }
      echo $cartproduct;
  } else {
    $ero = '<div class="alert alert-danger" role="alert"><b>Delivery Address</b> 
      <a href="myaccount.php"><h3>Please Enter The Address</h3></a></div>';
    echo $ero;
}
}


 ?>

<section>

 <div class="modal-body">
  <?php addressdetails(); ?>
        <table class="table">
  <thead>
    <tr class="bg-success">
      <th scope="col">Product Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Action</th>
      <td></td>
    </tr>
  </thead>
  <!-- <form id='placeorderform'> -->
   <?php cartdetails($_SESSION["id"], $totalcartvalue) ?>
  <!--  <input type='text' id="userid" name='userid' value='<?php echo $_SESSION['id']; ?>'>
     <input type='text' id="totalquantity" name='totalquantity' value='<?php echo $totalquantity; ?>'>
     <input type='text'  id="totalcartvalue" name='totalcartvalue' value='<?php echo $totalcartvalue; ?>'> -->
   <!-- </form> -->
  <tbody>
    
    <tr class="bg-warning">
      <td>Total</td>
      <td><?php echo $totalcartvalue; ?></td>
      <td><?php echo $totalquantity; ?></td><td type="button" id="placeorder" class="btn-primary  btn-sm">PlaceOrder</td><td></td></tr>
      
  </tbody>
   
</table>
<!-- <form id='placeorderform'>
   <input type='text' id="userid" name='userid' value='<?php echo $_SESSION['id']; ?>'>
     <input type='text' id="totalquantity" name='totalquantity' value='<?php echo $totalquantity; ?>'>
     <input type='text'  id="totalcartvalue" name='totalcartvalue' value='<?php echo $totalcartvalue; ?>'>
     vtvt<input type='text' id='product".$rv."' name='product".$rv."' value='".$row['productid']."'>
   </form> -->

<div class="alert alert-danger" role="alert">
  <b>We are currently offering Cash on Delivery Only!</b>
</div>
      </div>  

</section>



<?php include 'components/footer.php'; ?>
