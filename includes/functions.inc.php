<?php

function emptyInputSignup($fname,$lname,$phone,$email,$introduce){
    $result;

    if(empty($fname) ||  empty($lname) || empty($phone) ||  empty($email) || empty($introduce) ){
        $result = true;
    }

    else{
        $result = false;
    }

    return  $result;
}





  function createUser ($con, $fname, $lname , $phone, $email, $introduce){
    $sql = "INSERT INTO UserDetails (FirstName, LastName , phone, email, textBox)  VALUES (?, ?, ?, ?, ?) ;";
    $stmt = mysqli_stmt_init($con);
 
    if(!mysqli_stmt_prepare($stmt,$sql)){
     header("location: ../index.php?error=rrrr");
     exit();
    }
    mysqli_stmt_bind_param($stmt, "sssss", $fname, $lname, $phone, $email, $introduce);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../index.php?error=none");
    exit();
 }



    