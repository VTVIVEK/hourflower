<?php 
include 'components/header.php';
include('crud/server.php'); 
?>


<div class="row addproduct">
    <div class="col displayproduct">
      <table class="table producttable ">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Category</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <!-- <tbody id="display_area" class="displayproduct"> -->
    
      <?php echo $comments; ?>
      
       <!-- </tbody> -->
</table>
    </div>
    <div class="col ">
      <form class="comment_form" id="productform">
      <fieldset class="form-group">
    <input class="form-control" type="text" name="name" id="name" placeholder="Product Name">
  </fieldset>
  <fieldset class="form-group">
    <textarea class="form-control" name="description" id="description" placeholder="Product Description" rows="3"></textarea>
  </fieldset>
      <fieldset class="form-group">
    <select class="form-control" id="category" name="category">
      <option value="">Select Category</option>
      <option value="Roses">Roses</option>
      <option value="Carnations">Carnations</option>
      <option value="Gerberas">Gerberas</option>
      <option value="Lilies">Lilies</option>
      <option value="Orchids">Orchids</option>
      <option value="LuxuryCollection">Luxury Collection</option>
      <option value="MixedFlowers">Mixed Flowers</option>
    </select>
  </fieldset>
  <fieldset class="form-group">
    <input class="form-control-file" id="uploadedFile" type="file" name="uploadedFile" >
  </fieldset>
  <fieldset class="form-group">
    <input class="form-control"  type="text" name="price" id="price" placeholder="Price">
  </fieldset>
  <fieldset class="form-group">
    <input class="form-control" type="number" name="discount" id="discount" min="0" max="100" placeholder="Discount 0%">
  </fieldset>
  <input type="hidden" name="uploadtype" id="uploadtype" value="C">
  <fieldset class="form-group">
  <!-- <input class="btn btn-primary" type="submit" name="submit" value="Add Product">
  <input class="btn btn-primary" type="submit" name="uploadBtn" value="Upload" /> -->
  <button class="btn btn-primary" type="button" id="submit_btn">POST</button>
  <button class="btn btn-danger" type="button" id="update_btn" style="display: none;">UPDATE</button>
  </fieldset>
    </form>
    </div>
  </div>
<script src="crud/adminscript.js?ver<%=DateTime.Now.Ticks.ToString()%>" type="text/javascript"></script>
<?php include 'components/footer.php'; ?>

