<?php 

if(isset($_POST["submit"])) {

    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $phone=$_POST["phone"];
    $email=$_POST["email"];
    $introduce=$_POST["introduce"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup($fname, $lname, $phone, $email, $introduce) !==false) {

        header("location: ../index.php?error=emptyinput");
        exit();
    }


    if(invalidEmail($email) !==false) {

        header("location: ../index.html?error=invalidEmail");
        exit();
    }


    if(UidExists($con, $email) !==false) {

        header("location: ../index.html?error=usernametaken");
        exit();
    }

 

    createUser($con, $fname, $lname, $phone, $email, $introduce);

}

else {
    header("location: ../index.html");
    exit();
}
