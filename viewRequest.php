<?php
    include 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vimigo | View Request</title>
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
      <li><a href="#">Home</a></li>
        <li><a href="https://www.vimigoapp.com/about-us/">About</a></li>
        <li><a href="https://www.vimigoapp.com/packages/">Packages</a></li>
        <li><a href="faq.html">FAQ</a></li>
        <li><a href="https://www.vimigoapp.com/privacy-policy/">Privacy Policy</a></li>
        </div>
        </ul>
    </nav>


<section class="requestPage">

<div class="container">
    <h3>View Requests</h3>
    <table class="table">
<thead>
<tr>
  <th scope="col">First name</th>
  <th scope="col">Last name</th>
  <th scope="col">Phone</th>
  <th scope="col">Email</th>
  <th scope="col">Description</th>
</tr>
</thead>
<tbody>
<?php
    $sql= "select * from userDetails ";
    $result = mysqli_query($con,$sql);
    if($result){
        while($row = mysqli_fetch_assoc($result)){
            $FirstName=$row['FirstName'];
            $LastName = $row['LastName'];
            $phone=$row['phone'];
            $email=$row['email'];
            $textBox=$row['textBox'];
            echo '
            <tr>
            <td>'.$FirstName.'</td>
            <td>'.$LastName.'</td>
            <td>'.$phone.'</td>
            <td>'.$email.'</td>
            <td>'.$textBox.'</td>
            </tr>';
        } 
    }
?>

</tbody>
</table> 

</div>

</section>
    
</body>
</html>