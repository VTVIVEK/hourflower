<?php
session_start();
error_reporting(0);

if((array_key_exists("id",$_SESSION) AND $_SESSION["id"]) OR (array_key_exists("id",$_COOKIE) AND $_COOKIE["id"])){
  header("Location:index.php");}


if(array_key_exists("submit",$_POST)){

  include("connection.php");

  if(!$_POST["name"] & $_POST["signup"]=='1'){
    $error.="Name is Required<br>";
    }
  
  if(!$_POST["email"]){
    $error.="Email is Required<br>";
    }
  if(!$_POST["password"]){
    $error.="Password is Required";
    }
   // if($_POST["password"] === $_POST["confirmpassword"]){
   //  $error.="Cofirm Password Doesntmatch is Required";
   //  }
  if($error!=""){
    $error='<div class="alert alert-danger" role="alert">'.$error.'
</div>';
    }
  else{

    if($_POST["signup"]=='1'){


    $query="SELECT id FROM users WHERE email = '".mysqli_real_escape_string($link,$_POST['email'])."' LIMIT 1";
    $result=mysqli_query($link,$query);
    if(mysqli_num_rows($result)>0){
      $error="That email address is taken";
    }
    else{
     $query="INSERT INTO users (name,email,password) VALUES('".mysqli_real_escape_string($link,$_POST['name'])."','".mysqli_real_escape_string($link,$_POST['email'])."','".mysqli_real_escape_string($link,$_POST['password'])."')";

         if(!mysqli_query($link,$query)){
          $error="<br>error this therr sorry";
          }
         else{
          $query="UPDATE users SET password = '".md5(md5(mysqli_insert_id($link)).$_POST['password'])."' WHERE id=".mysqli_insert_id($link)." LIMIT 1";
          mysqli_query($link,$query);
          $_SESSION['id']=mysqli_insert_id($link);

          if($_POST['staylogin']=='1'){
            setcookie("id",mysqli_insert_id($link),time()+60*60*60*24*365);
          }

          header("Location:index.php");
            }

      } 
    }
    else{
      $query="SELECT * FROM users WHERE email='".mysqli_real_escape_string($link,$_POST['email'])."'";

        $result=mysqli_query($link,$query);
        $row=mysqli_fetch_array($result);
        if(isset($row)){
          $hashpassword=md5(md5($row["id"]).$_POST["password"]);
          if($hashpassword==$row["password"]){
            $_SESSION["id"]=$row["id"];
            $_SESSION["admin"]=$row["admin"];
            if($_POST['staylogin']=='1'){
            setcookie("id",$row["id"],time()+60*60*60*24*365);
            }

          header("Location:index.php");

          }else{$error='<div class="alert alert-danger" role="alert">The Email or password is wrong
</div>';}

        }else{$error='<div class="alert alert-danger" role="alert">The Email or password is wrong
</div>';}
    }
  }
}
?>


<?php include 'components/header.php'; ?>

<section class="loginsection">
	<div class="containerr">
	<div class="logindiv">
<form method="post" id="signup">
  <p class="mr">Interested Sign Up Now!</p>
  <fieldset class="form-group">
    <input class="form-control" type="text" name="name" placeholder="Name">
  </fieldset>
  <fieldset class="form-group">
    <input class="form-control" type="email" name="email" placeholder="Email">
  </fieldset>
  <fieldset class="form-group">
    <input class="form-control" type="password" name="password" placeholder="Password">
  </fieldset>
  <fieldset class="form-group">
    <input class="form-control" type="password" name="confirmpassword" placeholder="Confirm Password">
  </fieldset>
  <div class="checkbox">
    <label class="whitee">
      <input  type="checkbox"  name="staylogin" value=1>  Stay Logged In
      </label>
      <small><a class="toggleform float-right">Existing User? Log in</a></small> 
  <div class="clearfix"></div>
  </div>
  <fieldset class="form-group">
  <input  type="hidden" name="signup" value="1">
  <input class="btn btn-primary" type="submit" name="submit" value="Signup">
  </fieldset>
</form>

<form method="post" id="login">
  <p class="mr">Welcome Back! Please Login</p>
  <fieldset class="form-group">
  <input class="form-control" type="email" name="email" placeholder="Email">
  </fieldset>
  <fieldset class="form-group">
  <input class="form-control" type="password" name="password" placeholder="Password">
  </fieldset>
  <div class="checkbox">
    <label class=" whitee">
      <input  type="checkbox" class="whitecolor" name="staylogin" value=0>  Stay Logged In
      </label>
      <small><a class="toggleform float-right">New? Create an account</a></small> 
  </div>
  <div class="clearfix"></div>
  <fieldset class="form-group">
  <input  type="hidden" name="signup" value="0">
  <input class="btn btn-primary" type="submit" name="submit" value="Login">
  </fieldset>
  
</form>
<div id="error" class="errormargin"><?php echo $error; ?></div>
	</div>
</div>
</section>


<?php include 'components/footer.php'; ?>

