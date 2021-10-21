<?php
//lấy dữu liệu bên đăng ký 
$registered_username = $regitered_password ="";
 if(isset($_GET['username'])){
     $registered_username = $_GET['username'];
 }
if(isset($_GET['password '])){
    $registered_password =$_GET['password '];
}
//lấy dữ liệu vừa đăng nhập
$username =$password="";
if(isset($_POST['username'])){
    $username=$_POST['username'];
}
if(isset($_POST['password'])){
    $password=$_POST['password'];
}
//kiểm tra dữ liệu đăng ký và đăng nhập 
if($registered_username == $username &&  $regitered_password == $password){
    header('Location:wellcome.php');
    die();
}else {
    echo'login failed !!';
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<ul class="list-group">
		    <li class="list-group-item active">login</li>
		    <li class="list-group-item">
		    			 <form method="post">
                         <div class="form-group">
						      <label for="usr">Name:</label>
						      <input type="text" class="form-control" id="usr" name="username">
						    </div>
						    <div class="form-group">
						      <label for="pwd">Password:</label>
						      <input type="password" class="form-control" id="pwd" name="password">
						    </div>
						    <button type="submit" class="btn btn-success ">login</button>
                            
						  </form>
		    </li>
		  </ul>
	</div>
</body>

</html>
    