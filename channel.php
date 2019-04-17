<?php
    include('inc/dbconn.php');
    include("init.inc.php");
    $sql="select * from channel";
    $result=$mysqli->query($sql);
    if($result->num_rows > 0){
        while ($row=mysqli_fetch_assoc($result)){
            $data[]=$row;
    }
}
$smarty->assign("data",$data);
$smarty->display("channel.html");
