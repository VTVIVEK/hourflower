<?php 
include 'components/header.php'; 

if(!$_SESSION["id"] || $_SESSION["admin"] != 1){
        header("Location: index.php");
      }

// if($_SESSION["admin"] == 1){
//         header("Location: index.php");
//       }

?>

<div class="homediv">
	
<h1>This is Admin Pages <?php 
echo $_SESSION["admin"]; ?></h1>

<div class="logindiv">
<form method="post" action="upload.php" enctype="multipart/form-data">
  <p class="mr">Add New Product</p>
  <fieldset class="form-group">
    <input class="form-control" type="text" name="name" placeholder="Product Name">
  </fieldset>
  <fieldset class="form-group">
  	<textarea class="form-control" name="description" placeholder="Product Description" rows="3"></textarea>
  </fieldset>
  <fieldset class="form-group">
    <select class="form-control" name="category">
      <option value="">Select Category</option>
      <option value="Roses">Roses</option>
      <option value="Carnations">Carnations</option>
      <option value="Gerberas">Gerberas</option>
      <option value="Lilies">Lilies</option>
      <option value="MixedFlowers">Mixed Flowers</option>
    </select>
  </fieldset>
  <fieldset class="form-group">
    <input class="form-control-file" type="file" name="uploadedFile" >
  </fieldset>
  <fieldset class="form-group">
    <input class="form-control" type="text" name="price" placeholder="Price">
  </fieldset>
  <fieldset class="form-group">
  	<input class="form-control" type="number" name="discount" min="0" max="100" placeholder="Discount 0%">
  </fieldset>
  <fieldset class="form-group">
  <input class="btn btn-primary" type="submit" name="submit" value="Add Product">
  <input class="btn btn-primary" type="submit" name="uploadBtn" value="Upload" />
  </fieldset>
</form>
<!-- <div id="error" class="errormargin"><?php echo $error; ?></div> -->
	</div>


</div>

<?php include 'components/footer.php'; ?>

