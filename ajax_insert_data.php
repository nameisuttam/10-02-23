<?php
    include("config.php");

    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $mname = mysqli_real_escape_string($conn, $_POST['mname']);
    $lname = mysqli_real_escape_string($conn,$_POST['lname']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $chk = mysqli_real_escape_string($conn, $_POST['chk']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $reli = mysqli_real_escape_string($conn, $_POST['reli']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $blood = mysqli_real_escape_string($conn, $_POST['blood']);
    $bplace = mysqli_real_escape_string($conn, $_POST['bplace']);
    $grade = mysqli_real_escape_string($conn, $_POST['grade']);
    $mno = mysqli_real_escape_string($conn, $_POST['mno']);
    $pmno = mysqli_real_escape_string($conn, $_POST['pmno']);
    $adr = mysqli_real_escape_string($conn, $_POST['adr']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $pin = mysqli_real_escape_string($conn, $_POST['pin']);
   
    $sql="INSERT INTO stud_regiajax(fname,mname,lname,dob,gender,chk,email,reli,age,blood,bplace,grade,mno,pmno,adr,state,city,pin) VALUES('".$fname."','".$mname."','".$lname."','".$dob."','".$gender."','".$chk."','".$email."','".$reli."','".$age."','".$blood."','".$bplace."','".$grade."','".$mno."','".$pmno."','".$adr."','".$state."','".$city."','".$pin."')";
    
    if($sql){
       echo "Successs...!"; 
    }else{
        echo "Error";
    }
    mysqli_close($conn);
?>