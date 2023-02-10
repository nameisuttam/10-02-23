<?php
    include('config.php');

    // if(isset($_POST['insert'])){
    //     $fname=$_POST['fname'];
    //     $mname=$_POST['mname'];
    //     $lname=$_POST['lname'];
    //     $dob=$_POST['dob'];
    //     $gender=$_POST['gender'];
    //     $chk=implode(",",$_POST['chk']);
    //     $email=$_POST['email'];
    //     $reli=$_POST['reli'];
    //     $age=$_POST['age'];
    //     $blood=$_POST['blood'];
    //     $bplace=$_POST['bplace'];
    //     $grade=$_POST['grade'];
    //     $mno=$_POST['mno'];
    //     $pmno=$_POST['pmno'];
    //     $adr=$_POST['adr'];
    //     $state=$_POST['state'];
    //     $city=$_POST['city'];
    //     $pin=$_POST['pin'];

    //     $sql="INSERT INTO stud_regiajax(fname,mname,lname,dob,gender,chk,email,reli,age,blood,bplace,grade,mno,pmno,adr,state,city,pin) VALUES('$fname','$mname','$lname','$dob','$gender','$chk','$email','$reli','$age','$blood','$bplace','$grade','$mno','$pmno','$adr','$state','$city','$pin')";
    //     $query=mysqli_query($conn,$sql);

    //     if($query){
    //         echo "Successful...!";
    //     }else{
    //         echo "Failled...!";
    //     }
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="insertbyajax.css">
    <title>Document</title>
</head>
<body>
<center>
        <form action="" method="post" id="form" autocomplete="off">
            <table>
            <tbody>
                    <h2>Student Registration Form</h3>
                    <tr>
                        <td><label for="">First Name</label></td>
                        <td><input type="text" name="fname" id="fname" placeholder="Enter your first name"></td>
                    </tr>
                    <tr>
                        <td><label for="">Middle Name</label></td>
                        <td><input type="text" name="mname" id="mname" placeholder="Enter your middle name"></td>
                    </tr>
                    <tr>
                        <td><label for="">Last Name</label></td>
                        <td><input type="text" name="lname" id="lname" placeholder="Enter your last name"></td>
                    </tr>
                    <tr>
                        <td><label for="">DOB</label></td>
                        <td><input type="date" name="dob" id="dob" placeholder="Enter your DOB"></td>
                    </tr>
                    <tr>
                        <td><label for="">Gender</label></td>
                        <td>
                            <input type="radio" name="gender" id="gender" value="Male" >Male
                            <input type="radio" name="gender" id="gender"  value="Female" >Female
                            <input type="radio" name="gender" id="gender"value="Other">Other
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Hobbies</label></td>
                        <td>
                            <input type="checkbox" name="chk[]" id="chk[]" value="Playing" >Playing
                            <input type="checkbox" name="chk[]" id="chk[]" value="Dancing" >Dancing
                            <input type="checkbox" name="chk[]" id="chk[]" value="Reading" >Reading
                            <input type="checkbox" name="chk[]" id="chk[]" value="Other" >Other      
                        </td>
                    </tr>
                    <tr>
                        <td><label>Email</label></td>
                        <td>
                            <input type="email" name="email" id="email" placeholder="Enter your email">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Religion</label></td>
                        <td><input type="text" name="reli" id="reli" placeholder="Enter your religion">
                           
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Age</label></td>
                        <td><input type="text" name="age" id="age" placeholder="Enter your age">
                           
                        </td>
                    </tr>
                    
                    <tr>
                        <td><label for="">Blood Group</label></td>
                        <td><input type="text" name="blood" id="blood" placeholder="Enter your blood group">
                           
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Birth Place</label></td>
                        <td><input type="text" name="bplace" id="bplace" placeholder="Enter your birth place">   
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Graducation</label></td>
                        <td>
                            <select name="grade" id="grade">
                                <option value="" disabled selected>--Select--</option>
                                <option value="BCA">BCA</option>
                                <option value="BCom">BCom</option>
                                <option value="BBA">BBA</option>
                                <option value="BA">BA</option>
                                <option value="Other">Other</option>
                            </select>
                           
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Moblie No</label></td>
                        <td><input type="number" name="mno" id="mno" placeholder="Enter your moblie no">
                           
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Parent's No</label></td>
                        <td><input type="number" name="pmno" id="pmno" placeholder="Enter your parent's no">
                           
                        </tr>
                    </tr>
                    <tr>
                        <td><label for="">Address</label></td>
                        <td><textarea type="text" name="adr" id="adr" placeholder="Enter your address" rows="5" cols="25" style="font-weight:bold; font-family: Arial, Helvetica, sans-serif;"></textarea>
                           
                        </td>
                    </tr>
                    
                    <tr>
                        <td><label for="">State</label></td>
                        <td>
                            <select name="state" id="state">
                                <option value="" disabled selected>--Select--</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">City</label></td>

                        <td>
                            <select name="city" id="city">
                                <option value="" >--Select--</option>
                                
                            </select>
                        </td>
                    </tr>
                    
                    <tr>
                        <td><label for="">Pin Code</label></td>
                        <td><input type="number" name="pin" id="pin" placeholder="Enter your pin code"></td>
                    </tr>
                </tbody>
            </table>
            <br>
                    <button type="submit" name="insert" id="insert">Insert</button>
        </form>
        <script>
            $(document).ready(function(){
                function loadData(){
                    $.ajax({
                        url : "ajax_get_state.php",
                        type : "POST",
                        success : function(data){
                            $("#state").append(data);
                        }
                    });
                }
                loadData();
                $("#state").change(function(){
                    console.log("changeStte");
                    var id=$(this).find(":selected").val();
                    console.log(id);
                    $.ajax({
                        type:"POST",
                        url: "ajax_get_city.php",
                        data: {state_id:id},
                        success : function(data){
                           console.log(data);
                           $("#city").html(data);
                        }
                    });
                });
            });
        </script>
        <script>
            $(document).ready(function(){
                $("#insert").click(function(){
                    var fname = $("#fname").val();
                    var mname = $("#mname").val();
                    var lname = $("#lname").val();
                    var dob = $("#dob").val();
                    var gender = $("#gender").val();
                    var chk = $("#chk").val();
                    var email = $("#email").val();
                    var reli = $("#reli").val();
                    var age = $("#age").val();
                    var blood = $("#blood").val();
                    var bplace = $("#bplace").val();
                    var grade = $("#grade").val();
                    var mno = $("#mno").val();
                    var pmno = $("#pmno").val();
                    var adr = $("#adr").val();
                    var state = $("#state").val();
                    var city = $("#city").val();
                    var pin = $("#pin").val();

                    if(fname=='' || mname=='' || lname=='' || dob=='' || gender=='' || chk=='' || email=='' || reli=='' || age=='' || blood=='' || bplace=='' || grade=='' || mno=='' || pmno=='' || adr=='' || state=='' || city=='' || pin=='' ){
                        alert("Please fill all Field.");
                    }

                    $.ajax({
                        type:"POST",
                        url:"ajax_insert_data.php",
                        data:{
                            fname: fname,
                            mname: mname,
                            lname: lname,
                            dob: dob,
                            gender: gender,
                            chk: chk,
                            email: email,
                            reli: reli,
                            age: age,
                            blood: blood,
                            bplace: bplace,
                            grade: grade,
                            mno: mno,
                            pmno: pmno,
                            adr: adr,
                            state: state,
                            city: city,
                            pin: pin
                        },
                        cache: false,
                        success: function(data){
                            console.log(data);
                        },
                        error: function(xhr,status,error){
                            console.error(xhr);
                        }
                    });
                });
            });
        </script>
</center>
</body>
</html>