<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vimigo | Delete Request</title>
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



<?php
    include 'includes/dbh.inc.php';

    if(isset($_GET['FirstName'])){
        $firstname = $_GET['FirstName'];

        $sql = "delete from `UserDetails`  where FirstName = $firstname ";
        $result = mysqli_query($con,$sql);
        
        if($result){
            header('location: update.php');
        }

        else{
            die(mysqli_error($con));
        }
    }
?>

</tbody>
</table> 

</div>

</section>
    
</body>
</html>