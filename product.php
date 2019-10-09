<?php include 'components/header.php'; 

if($_GET['id']){
  	$query="SELECT * FROM products WHERE id = '".$_GET['id']."'";
	$result = $link->query($query);
	if ($result->num_rows > 0) {
    	while($row = $result->fetch_assoc()) {
	    	$name = $row["name"];
	    	$price = $row["price"];
	    	$description = $row["description"];
	    	$category = $row["category"];
	    	$imagename = $row['imagename'];
    	}
	}
}

function displayproducts($category){
  include 'connection.php'; 
  $query="SELECT * FROM products WHERE category = '".$category."' LIMIT 6";
	$result = $link->query($query);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	echo " <div class='col'>
    	<div class='productdiv'>
        <a href='product.php?id=".$row['id']."'>
		<div class='productbox'>
		<img src='crud/images/".$row['imagename']."'
			<span>".$row["name"]."</span><br/>
			<span>₹&nbsp;".$row["price"]."</span>
		</div></a>
	</div>
    	</div>";}
} else {
    echo "0 results";
}
}


function cartdetails1($userid){
  include 'connection.php'; 
  $query="SELECT * FROM cart WHERE userid = '".$userid."' AND productid = '".$_GET['id']."'";
  $result = $link->query($query);

  if ($result->num_rows > 0) {
      return 1;
} else {
    return 0;
}
}

?>
<section class="productpage">
	
<div class="container">
 <div class="row">
    <div class="col-4 imgdiv">
      <img src="crud/images/<?php echo $imagename ?>">
    </div>
    <div class=" col-8 contentdiv">
      <div class="contentrapper">
      	<h2><?php echo $name ?></h2>
      	<b>₹&nbsp;<?php echo $price ?></b><br/>
      	<span><?php echo $description ?></span><br/>
      	<p><b> 2 Hour Fast Delivery!</b></p>
      	<div>
      		<form class="Contact" id="cartform">
			<input type="hidden" value="<?php echo $_SESSION["id"] ?>"  name="userid" id="userid"/>
			<input type="hidden" value="<?php echo $_GET['id'] ?>" name="productid" id="productid"/>
			<input type="hidden" value="<?php echo $name ?>" name="name" id="name"/>
			<input type="hidden" value="<?php echo $price ?>" name="price" id="price"/>
			<div class="form-inline">
    <select class="form-control" id="quantity">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  </div><br/>
    <!-- <button class="btn btn-primary" type="button" id="submit_btn">POST</button>
     <button class="btn btn-danger" type="button" id="update_btn" style="display: none;">UPDATE</button> -->
     <?php
     if((array_key_exists("id",$_SESSION) AND $_SESSION["id"]) OR (array_key_exists("id",$_COOKIE) AND $_COOKIE["id"])){

        if(cartdetails1($_SESSION["id"]) == 0){
     echo '<button id="addtocart" value="addtocart" name="addtocart" type="button" class="btn btn-success"><b>ADD TO CART</b></button>
     <a data-toggle="modal" data-target="#exampleModal"  href="#"><button id="gotocart" style="display: none;" type="button" class="btn btn-primary"><b>GO TO CART</b></button></a>';
     }else{
      echo '<a data-toggle="modal" data-target="#exampleModal"  href="#"><button id="gotocart" type="button" class="btn btn-primary"><b>GO TO CART</b></button></a>';
       // echo '<a data-toggle="modal" data-target="#exampleModal"  href="#"><button id="gotocart" style="display: none;" type="button" class="btn btn-primary"><b>GO TO CART</b></button></a>';
     }
    }else{
             echo '<button type="button" class="btn loginalert btn-success"><b>ADD TO CART</b></button>';
            }


       ?>
     
		</form>

	</div>
      </div>
    </div>
  </div>
  <div class="row">
  	<?php displayproducts($category); ?>
  </div>
</div>
</section>

<?php include 'components/footer.php'; ?>

