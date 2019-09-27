<?php
session_start(); 


$db = mysqli_connect("localhost", "root", "", "hourflower");


function displaytweets(){
  $db = mysqli_connect("localhost", "root", "", "hourflower");
  $query="SELECT * FROM images";
$result = $db->query($query);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["image"]. " " . $row["image_text"]. "<br> <img src=".$row["image"]." height='40' width='40'>";
    }
} else {
    echo "0 results";
}
}
$db->close();

?>
<!DOCTYPE html>
<html>
<head>
  <title>PHP File Uploads</title>
</head>
<body>
  <p>This the upload pagevd <?php displaytweets(); ?></p>
  <?php
    if (isset($_SESSION['message']) && $_SESSION['message'])
    {
      printf('<b>%s</b>', $_SESSION['message']);
      unset($_SESSION['message']);
    }
  ?>
  <form method="POST" action="upload.php" enctype="multipart/form-data">
    <div>
      <span>Upload a File:</span>
      <input type="file" name="uploadedFile" />
      <input type="text" name="image_text" />
    </div>

    <input type="submit" name="uploadBtn" value="Upload" />
  </form>
</body>
</html>
