<?php
    include("config.php");

    $sql = "SELECT * FROM stud_city WHERE state={$_POST['state_id']}";
    $query = mysqli_query($conn, $sql);
    $str = "";
    echo "<option>--Select--</option>";
    while($row=mysqli_fetch_assoc($query)){
        $str .= "<option value=".$row['cid'].">".$row['cityname']."</option>";
    }
    
    echo $str;
?>