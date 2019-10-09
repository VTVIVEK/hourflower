<?php
include 'components/header.php';




function displayproducts(){
	include 'connection.php';
  
  $query="SELECT * FROM products";
	$result = $link->query($query);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // echo "id: " . $row["id"]. " - Name: " . $row["imagename"]. " " . $row["name"]. "<br> <img src='images/flower/".$row["category"]."/".$row["imagename"]."' height='90' width='90'>";
        echo "<div class='productdiv'>
        <a href='product.php?id=".$row['id']."'>
		<div class='productbox'>
		<img src='images/flower/".$row['category']."/".$row['imagename']."'
			<span>".$row["name"]."</span><br/>
			<span>₹&nbsp;".$row["price"]."</span>
		</div></a>
	</div>";
    }
} else {
    echo "0 results";
}
}
$link->close();

?>

<div class="shopdiv">
	<div class="productrow">
		<?php displayproducts(); ?>
	<div class="clearfix"></div>
	</div>
	
</div>

<?php include 'components/footer.php'; ?>
