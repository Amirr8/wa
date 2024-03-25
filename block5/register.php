<?php include 'connection.php' ?>
<?php
if(isset($_POST['submit'])){
    $users = $_POST['users'];
    $passs = $_POST['pass'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $pos = 'emplopyee';

    $query = "SELECT * FROM `users` WHERE `Username` = '$users'";
    $stmts=$conn->prepare($query);
	$stmts-> execute();
	$result = $stmts->get_result();
	$row = $result->fetch_assoc(); 

    if($users == @$row['Username']){
        echo 'User is Already Exist';
    }else{
    $sql="INSERT INTO `users` (`Username`, `Password`, `Fname`, `Mname`, `Lname`, `Position`) VALUES (?,?,?,?,?,?)";
    $stmt=$conn->prepare($sql);
	$stmt-> bind_param("ssssss",$users,$passs,$fname,$mname,$lname,$pos);
	$stmt-> execute();
    echo'<h1> Registered Successfully </h1>';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
</head>
<body style="background-color:black;">
	<form method="post">
  <div class="container">
    <h2>Register</h2>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="users" id="user" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" id="pass" required>

    <label for="psw-repeat"><b>First Name</b></label>
    <input type="text" placeholder="First Name" name="fname" id="fname" required>

    <label for="psw-repeat"><b>Middle Name</b></label>
    <input type="text" placeholder="Middle Name" name="mname" id="mname" required>

    <label for="psw-repeat"><b>Last Name</b></label>
    <input type="text" placeholder="Last Name" name="lname" id="lname" required>

    <hr>


    <button type="submit" name="submit" class="registerbtn">Register</button>
    <p>ALREADY HAVE AN ACCOUNT?<a href="index.php">Login Here</a></p>
  </div>

</form>
</body>
</html>
<style>
  h1{
    color:white;
  }
	* {box-sizing: border-box}


.container {
  padding: 15px;
  width: 50%;
  background-color:whitesmoke;
}


input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: black;
  color:white;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: black;
  outline: none;
}


hr {
  border: 1px solid black;
  margin-bottom: 25px;
}


.registerbtn {
  background-color: blue;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}


a:hover{
        color: blue;
  box-shadow: 0 0 10px black;
  text-shadow: 0 0 10px black;
  background-color: black;
  border-radius: 100px;
    }
  a{
        background-color: black;
        border-radius: 5px;
        color:white;
        margin-left:15px;
        text-decoration:none;
  }
form{
  margin-left:37%;
}
</style>