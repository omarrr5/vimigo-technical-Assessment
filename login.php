<?php include 'includes/dbh.inc.php';?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vimigo Tech | Admin</title>
    <link rel="logo icon" href="images/vimigo-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body>

    <nav class="navbar">
        <div class="logo">Vimigo Tech</div>
        <ul class="nav-links">  
        <div class="menu">
      <li><a href="index.php">Home</a></li>
        <li><a href="https://www.vimigoapp.com/about-us/">About</a></li>
        <li><a href="https://www.vimigoapp.com/packages/">Packages</a></li>
        <li><a href="faq.html">FAQ</a></li>
        <li><a href="https://www.vimigoapp.com/privacy-policy/">Privacy Policy</a></li>
        </div>
        </ul>
    </nav>


    <section class="login-form">
    <form class="modal-content animate"  action="" method="post">
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="adminUid" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="adminPwd" required>

      <button type="submit" name="login" id="login" class="button">Login</button>
    </div>
    </form>
    </section>



    <?php
function test_input($data) {
      
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 
if ($_SERVER["REQUEST_METHOD"]== "POST") {
    
  $adminname = test_input($_POST["adminUid"]);
  $password = test_input($_POST["adminPwd"]);
  $stmt = $con->prepare("SELECT * FROM adminlogin");
  $stmt->execute();
  $users = $stmt->get_result();
  $result = $users->fetch_all();
  
  foreach($users as $user) {
        
      if(($user['adminUid'] == $adminname) && 
          ($user['adminPwd'] == $password)) {
              header("Location: admin-panel.html");
      }
      else {
          echo "<script language='javascript'>";
          echo "alert('WRONG INFORMATION')";
          echo "</script>";
          die();
      }
  }
}

?>


</body>
</html>