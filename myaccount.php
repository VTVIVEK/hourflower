<?php include 'components/header.php'; 

function addressdetails(){
  include 'connection.php'; 
  $query="SELECT * FROM address WHERE userid = '".$_SESSION['id']."'";
  $result = $link->query($query);
	if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $cartproduct="<div  class='alert alert-primary' role='alert'><b>Delivery Address</b> 
      <h3>".$row['name']."</h3><span>".$row['phone']."</span><br/><span>".$row['address']."</span><br/>
      <span>".$row['pincode']."</span><br/><span>".$row['state']."</span><br/></div>";
    }
      echo $cartproduct;
} else {
    $ero = '<form class="comment_form" id="addressform">
      <fieldset class="form-group">
    <input class="form-control" type="text" name="name" id="name" placeholder="Full Name">
  </fieldset>
  <fieldset class="form-group">
    <input class="form-control"  type="text" maxlength="10" size="10" name="phone" id="phone" placeholder="Phone Number">
  </fieldset>
  <fieldset class="form-group">
    <textarea class="form-control" name="address" id="address" placeholder="Address" rows="3"></textarea>
    </fieldset>
  <fieldset class="form-group">
    <input class="form-control"  type="text" maxlength="6" size="6" name="pincode" id="pincode" placeholder="Pincode">
  </fieldset>
  <fieldset class="form-group">
    <input class="form-control" type="text" name="state" id="state" placeholder="State">
  </fieldset>
  <fieldset class="form-group">
  <button class="btn btn-primary" type="button" id="submitaddress">SUBMIT</button>
  <button class="btn btn-danger" type="button" id="update_btn" style="display: none;">UPDATE</button>
  </fieldset>
    </form>';
    echo $ero;
}
}

?>

<section class="myaccountsection">
	<div class="row">
    <div class="col">
      <!-- <form class="comment_form" id="addressform">
      <fieldset class="form-group">
    <input class="form-control" type="text" name="name" id="name" placeholder="Full Name">
  </fieldset>
  <fieldset class="form-group">
    <input class="form-control"  type="text" maxlength="10" size="10" name="phone" id="phone" placeholder="Phone Number">
  </fieldset>
  <fieldset class="form-group">
    <textarea class="form-control" name="address" id="address" placeholder="Address" rows="3"></textarea>
    </fieldset>
  <fieldset class="form-group">
    <input class="form-control"  type="text" maxlength="6" size="6" name="pincode" id="pincode" placeholder="Pincode">
  </fieldset>
  <fieldset class="form-group">
    <input class="form-control" type="text" name="state" id="state" placeholder="State">
  </fieldset>
  <fieldset class="form-group">
  <button class="btn btn-primary" type="button" id="submitaddress">SUBMIT</button>
  <button class="btn btn-danger" type="button" id="update_btn" style="display: none;">UPDATE</button>
  </fieldset>
    </form> -->
<!-- 
    <div  class='alert style="display: none;" alert-primary' role='alert'>
      <h3>".$row['name']."</h3><span>".$row['phone']."</span><br/><span>".$row['address']."</span><br/>
      <span>".$row['pincode']."</span><br/><span>".$row['state']."</span><br/></div> -->
	<div class="modal-body">
		<?php addressdetails(); ?>
	</div>
    </div>
	

    <div class="col">
    	<div class="modal-body"><div class="alert alert-warning" role="alert">
  <b>My Orders</b>
</div></div>
     
     
    </div>
  </div>
</section>

<?php include 'components/footer.php'; ?>
