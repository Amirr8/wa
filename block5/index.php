<?php include 'connection.php' ?>
<?php
if(isset($_POST['submit'])){
  $users=$_POST['users'];
  $passs=$_POST['pass'];

  if(empty($users) || empty($passs)){
    echo '<p>Please enter both username and password</p>';
}else{
  $sql="SELECT * FROM `users` WHERE `Username` = ? AND `Password`=?";
  $stmt=$conn->prepare($sql);
  $stmt-> bind_param("ss",$users,$passs);
  $stmt-> execute();
  $result = $stmt->get_result();
  $row = $result->fetch_assoc(); 

  if($passs != @$row['Password'] && $users != @$row['Username']){
    echo '<p>Incorrect Credentials, Try Again!</p>';
  }else{
    header("Location:dashboard.php");
    exit();
  }
}
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>LOGIN</title>
        <meta charset="utf-8">
        <meat name="viewport" content="width=device-width, initial-sacle=1">
            <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body style="background-color: black;">
    <div class="alert alert-dark" role="alert">
        <div class="wa">
            <h3>LOGIN</h3>
            </div>
        <form method="post">
            <div class="mb-3">
              <label for="username" id="username" class="form-label">Email</label>
              <input type="text" class="form-control" id="users" placeholder="Email" name="users" aria-describedby="emailHelp">
            
            <div class="mb-3">
              <label for="password" id="password" class="form-label">Password</label>
              <input type="password" placeholder="Password" name="pass" id="pass" class="form-control" id="password">
            </div>
            
            <button type="submit" name="submit" class="btn btn-primary">Login</button><br>
  <span class="small">CREATE NEW ACCOUNT?</span>
  <a class="wow" href="register.php">REGISTER</a>

</div>
          </form>
      </div>
</body>
</html>
<style>
   .wow:hover{
        color: blue;
  box-shadow: 0 0 10px black;
  text-shadow: 0 0 10px black;
  background-color: black;
  border-radius: 100px;
    }
  .wow{
        background-color: black;
        border-radius: 5px;
        color:white;
        margin-left:15px;
        text-decoration:none;
  }
  .small{
    color:blue;
  }
    .form-label{
        color: blue;
    }
    .alert{
        width: 30%;
        margin-left: 36%;
        margin-top: 13%;
        border-radius: 50px;
        box-shadow:0 0 30px blue;
    }
    .btn:hover{
        color: blue;
  box-shadow: 0 0 10px black;
  text-shadow: 0 0 10px black;
  background-color: black;
  border-radius: 100px;
    }
    .btn{
        width: 25%;
        background-color: black;
        border-radius: 10px;
    }
    .wa{
        width: 23%;
        border-radius: 10px;
        color: whitesmoke   ;
    }
    .wa:hover:before,
.wa:hover:after{
  transform: translate(0,0);
  opacity: 1;
}

.wa:hover {
  color: blue;
  
  
}
  .wa {
  padding: .5em .8em;
  color: rgba(255,255,255,.5);
  position: relative;
  text-decoration: none;
  font-size: 20px;
}

.wa::before,
.wa::after {
  content: '';
  height: 20px;
  width: 20px;
  position: absolute;
  transition: all .35s ease;
  opacity: 0;
}

.wa::before {
  content: '';
  right: 0;
  top: 0;
  border-top: 3px solid black;
  border-right: 3px solid black;
  transform: translate(-100%, 50%);
}

.wa:after {
  content: '';
  left: 0;
  bottom: 0;
  border-bottom: 3px solid black;
  border-left: 3px solid black;
  transform: translate(100%, -50%)
}
p{
  color:red;
}
</style>