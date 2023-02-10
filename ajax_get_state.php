<?php
    include("config.php");

    $sql = "SELECT * FROM stud_state";
    $query = mysqli_query($conn,$sql);
    $str = "";

    while($row=mysqli_fetch_assoc($query)){
        $str .= "<option value=".$row['sid'].">".$row['statename']."</option>";
    }

    echo $str;
?>