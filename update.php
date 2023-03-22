<?php
    include 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vimigo | Update Request</title>
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

    <div class="container">
        <h3>Delete Requests</h3>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">operation</th>
    </tr>
  </thead>
  <tbody>

    <?php
        $sql= "select * from UserDetails ";
        $result = mysqli_query($con,$sql);
        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $id=$row['personid'];
                $firstname = $row['FirstName'];
                $lastname = $row['LastName'];
                echo '
                <tr>
                <td>'.$firstname.'</td>
                <td>'.$lastname.'</td>
                <td>
                <button class="btn btn-danger"><a href="deleteRequest.php?id='.$firstname.'" class="text-light">Delete</a></button>
                </td>
                </tr>';
            } 
        }
    ?>
  </tbody>
</table> 

    </div>

    
</body>
</html>