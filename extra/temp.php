<?php 
  $conn = mysqli_connect('localhost', 'root', '', 'hourflower');
  if (!$conn) {
    die('Connection failed ' . mysqli_error($conn));
  }
  if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
  	$sql = "INSERT INTO products (name, description, category, price, discount) VALUES ('{$name}', '{$description}', '{$category}', '{$price}', '{$discount}')";
  	if (mysqli_query($conn, $sql)) {
  	  $id = mysqli_insert_id($conn);
      $saved_comment = '<div class="comment_box">
        <span class="delete" data-id="' . $row['id'] . '" >delete</span>
        <span class="edit" data-id="' . $row['id'] . '">edit</span>
        <div class="display_name">'. $row['name'] .'</div>
        <div class=" display_price">'. $row['price'] .'</div>
        <div class="d-none display_description">'. $row['description'] .'</div>
        <div class="d-none display_category">'. $row['category'] .'</div>
        <div class="d-none display_discount">'. $row['discount'] .'</div>
      </div>';
  	  echo $saved_comment;
  	}else {
  	  echo "Error: ". mysqli_error($conn);
  	}
  	exit();
  }
  // delete comment fromd database
  if (isset($_GET['delete'])) {
  	$id = $_GET['id'];
  	$sql = "DELETE FROM products WHERE id=" . $id;
  	mysqli_query($conn, $sql);
  	exit();
  }

  if (isset($_POST['update'])) {
  	$id = $_POST['id'];
  	$name = $_POST['name'];
  	$description = $_POST['description'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
  	$sql = "UPDATE products SET name='{$name}', description='{$description}', price='{$price}' category='{$category}' discount='{$discount}' WHERE id=".$id;
  	if (mysqli_query($conn, $sql)) {
  		$id = mysqli_insert_id($conn);
  		$saved_comment = '<div class="comment_box">
        <span class="delete" data-id="' . $row['id'] . '" >delete</span>
        <span class="edit" data-id="' . $row['id'] . '">edit</span>
        <div class="display_name">'. $row['name'] .'</div>
        <div class=" display_price">'. $row['price'] .'</div>
        <div class="d-none display_description">'. $row['description'] .'</div>
        <div class="d-none display_category">'. $row['category'] .'</div>
        <div class="d-none display_discount">'. $row['discount'] .'</div>
      </div>';
  	  echo $saved_comment;
  	}else {
  	  echo "Error: ". mysqli_error($conn);
  	}
  	exit();
  }

  // Retrieve comments from database
  $sql = "SELECT * FROM products LIMIT 2";
  $result = mysqli_query($conn, $sql);
  $comments = '<div id="display_area">'; 
  while ($row = mysqli_fetch_array($result)) {
  	$comments .= '<div class="comment_box">
  		  <span class="delete" data-id="' . $row['id'] . '" >delete</span>
  		  <span class="edit" data-id="' . $row['id'] . '">edit</span>
  		  <div class="display_name">'. $row['name'] .'</div>
  		  <div class=" display_price">'. $row['price'] .'</div>
        <div class="d-none display_description">'. $row['description'] .'</div>
        <div class="d-none display_category">'. $row['category'] .'</div>
        <div class="d-none display_discount">'. $row['discount'] .'</div>
  	  </div>';
  }
  $comments .= '</div>';
?>




<!-- 
$comments .= '<div class="comment_box">
        <div class="display_name">'. $row['name'] .'</div>
        <div class=" display_price">'. $row['price'] .' <span><button class="btn delete btn-danger" type="button" data-id="' . $row['id'] . '" >DELETE</button><button class="btn edit btn-primary" type="button" data-id="' . $row['id'] . '" >EDIT</button></span></div>
        <div class="d-none display_description">'. $row['description'] .'</div>
        <div class="d-none display_category">'. $row['category'] .'</div>
        <div class="d-none display_discount">'. $row['discount'] .'</div>
      </div>'; -->


   <!--    $comments .= '<tr>
      <th scope="row">'. $row['id'] .'</th>
      <td class="display_name">'. $row['name'] .'</td>
      <td class=" display_price">'. $row['price'] .'</td>
      <td><button class="btn edit btn-primary" type="button" data-id="' . $row['id'] . '" >EDIT</button></td>
        <td class="d-none display_description">'. $row['description'] .'</td>
        <td class="d-none display_category">'. $row['category'] .'</td>
        <td class="d-none display_discount">'. $row['discount'] .'</td>
      </tr>'; -->




<?php 
  $conn = mysqli_connect('localhost', 'root', '', 'hourflower');
  if (!$conn) {
    die('Connection failed ' . mysqli_error($conn));
  }
  if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $sql = "INSERT INTO products (name, description, category, price, discount) VALUES ('{$name}', '{$description}', '{$category}', '{$price}', '{$discount}')";
    if (mysqli_query($conn, $sql)) {
      $id = mysqli_insert_id($conn);
      $saved_comment = '<div class="comment_box">
        <span class="delete" data-id="' . $id . '" >delete</span>
        <span class="edit" data-id="' . $id . '">edit</span>
        <div class="display_name">'. $name .'</div>
        <div class=" display_price">'. $price .'</div>
        <div class="d-none display_description">'. $description .'</div>
        <div class="d-none display_category">'. $category .'</div>
        <div class="d-none display_discount">'. $discount .'</div>
      </div>';
      echo $saved_comment;
    }else {
      echo "Error: ". mysqli_error($conn);
    }
    exit();
  }
  // delete comment fromd database
  if (isset($_GET['delete'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM products WHERE id=" . $id;
    mysqli_query($conn, $sql);
    exit();
  }

  if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $sql = "UPDATE products SET name='{$name}', description='{$description}', price='{$price}', category='{$category}', discount='{$discount}', WHERE id=".$id;
    // $sql = "UPDATE products SET name='{$name}', description='{$description}' WHERE id=".$id;
    if (mysqli_query($conn, $sql)) {
      $id = mysqli_insert_id($conn);
      $saved_comment = '<div class="comment_box">
        <span class="delete" data-id="' . $id . '" >delete</span>
        <span class="edit" data-id="' . $id . '">edit</span>
        <div class="display_name">'. $name .'</div>
        <div class=" display_price">'. $price .'</div>
        <div class="d-none display_description">'. $description .'</div>
        <div class="d-none display_category">'. $category .'</div>
        <div class="d-none display_discount">'. $discount .'</div>
      </div>';
      echo $saved_comment;
    }else {
      echo "Error: ". mysqli_error($conn);
    }
    exit();
  }

  // Retrieve comments from database
  $sql = "SELECT * FROM products";
  $result = mysqli_query($conn, $sql);
  $comments = '<div id="display_area">'; 
  while ($row = mysqli_fetch_array($result)) {
    $comments .= '<tr>
    <td>' . $row['id'] . '</td>
        <td class="display_name">'. $row['name'] .'</td>
        <td class=" display_price">'. $row['price'] .'</td>
        <td class="btn-sm edit btn-primary" type="button" data-id="' . $row['id'] . '" >EDIT</td>
        <td class="btn-sm delete btn-danger" type="button" data-id="' . $row['id'] . '" >DELETE</td>
        <td class="d-none display_description">'. $row['description'] .'</td>
        <td class="d-none display_category">'. $row['category'] .'</td>
        <td class="d-none display_discount">'. $row['discount'] .'</td>
      </tr>';
  }
  $comments .= '</div>';
?>