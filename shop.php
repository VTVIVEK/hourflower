<?php
$db = mysqli_connect("localhost", "root", "", "hourflower");


function displaytweets(){
  $db = mysqli_connect("localhost", "root", "", "hourflower");
  $query="SELECT * FROM products";
$result = $db->query($query);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // echo "id: " . $row["id"]. " - Name: " . $row["imagename"]. " " . $row["name"]. "<br> <img src='images/flower/".$row["category"]."/".$row["imagename"]."' height='90' width='90'>";
        echo "<div class='productdiv'>
		<div class='productbox'>
		<img src='images/flower/".$row['category']."/".$row['imagename']."'
			<span>".$row["name"]."</span><br/>
			<span>₹&nbsp;".$row["price"]."</span>
		</div>
	</div>";
    }
} else {
    echo "0 results";
}
}
$db->close();

?>
<?php include 'components/header.php'; ?>
<div class="shopdiv">
	<div class="productrow">
		<?php displaytweets(); ?>
	<div class="clearfix"></div>
	</div>
	
</div>

<?php include 'components/footer.php'; ?>
