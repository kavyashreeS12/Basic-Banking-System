<?php
include 'config.php';
if(isset($_POST['submit'])){

    $Name=$_POST['name'];
    $Email=$_POST['email'];
    $Balance=$_POST['amt'];

    if($Name==NULL ||$Email==NULL || $Balance==NULL)
    {
	//
    }
   else
   {

	$sql="INSERT into users(name,email,balance) VALUES('$Name','$Email','$Balance')";
    $mail=mysqli_query($conn,$sql);

    if($mail)
	{
        ?>
		<script>
            alert('Successfully Saved!');
        </script>
        <?php
	}
	else
	{
		?>
		<script>
            alert('User Already Exits!');
        </script>
        <?php
	}

}

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sparks Bank</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/table.css">
  <link rel="stylesheet" type="text/css" href="css/createuser.css">
  <link rel="stylesheet" type="text/css" href="css/contact.css">
  <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
  <link rel = "icon" href = "img/logo.png" type = "image/x-icon">

</head>


<body >
    <div class="bgc">

  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #dfe4ea;">
    <div class="container-fluid">
      <a class="navbar-brand logo" href="index.php"><img src="img/logo.png" alt="logo" height=50px width=50px></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">


        <ul class="navbar-nav">
          <li class="nav-item btn btn-secondary">
            <a class="nav-link text-white" href="index.php">Home</a>
          </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <li class="nav-item btn btn-secondary">
            <a class="nav-link text-white" href="createuser.php">Create User</a>
          </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <li class="nav-item btn btn-secondary">
            <a class="nav-link link-text text-white" href="https://internship.thesparksfoundation.info/">About us</a>
          </li>
        </ul>

      </div>

    </div>
  </nav>

  <form method="post" action="">
<table border="0" cellpadding="5" cellspacing="5" class="design" style="background-color:transparent; border:1px solid #126062;border-radius:5px;margin:100px 500px;padding:5px 5px;inline-size:400px ;box-shadow:0px 0px 40px #000000;">

<tr><td colspan="2" align="center" class="msg"></td></tr>
<tr><td class="labels" style="color:#302e58;font-weight:bold">Name :</td><td><input type="text" name="name" class="fields" required="required" size="20" placeholder="Enter Full Name" style="font-family:Segoe UI;font-size:14px;
	padding:2px 2px;
	color:black;
	background-color:transparent;
	border:1px solid #302e58;
border-radius:5px;"/></td></tr>
<tr><td class="labels" style="color:#302e58;font-weight:bold">E-Mail ID : </td><td><input type="email" name="email" class="fields" size="20" placeholder="Enter Email" required="required" style="font-family:Segoe UI;
	font-size:14px;
	padding:2px 2px;
	color:black;
	background-color:transparent;
	border:1px solid #302e58;
	border-radius:5px;"/></td></tr>
<tr><td class="labels" style="color:#302e58;font-weight:bold">Add Amount : </td><td><input type="number" name="amt" min="500" max="1000000" class="fields" s placeholder="Enter Amount" required="required" style="font-family:Segoe UI;
	font-size:14px;
	padding:2px 2px;
	color:black;
    inline-size:165px;
	background-color:transparent;
	border:1px solid #302e58;
	border-radius:5px;"/></td></tr>

<tr><td colspan="2" align="center"><input type="submit" name="submit" value="SAVE" class="fields" style="font-family:Segoe UI;
	font-size:14px;
	color:black;
    background-color:#47799f;border-radius:5px;border-color:#47799f"/>
    </td></tr>
</table>
</form>

</div>  
<?php include('footer.php') ?>
</body>
</html>
