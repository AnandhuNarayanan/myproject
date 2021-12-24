<?php

function run_sql($sql)
{
    $servername="localhost";
$root="myproject";
$pass="myproject123";
$db="myproject";
    $con = mysqli_connect($servername, $root, $pass, $db);
    $result = mysqli_query($con, $sql);
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $rows;
}


function search_donar($column,$value,$sortcolumn=NULL)
{
    $today=date("Y-m-d", (time() - 60*60*24*90));
   // echo $today;
if($column=="blood")
{

$sql="SELECT * from tbl_user where blood='$value' AND `donationdate` <= '$today'" ; 

}
else if($column=="place")
{
$sql="SELECT * from tbl_user where place='$value'  AND `donationdate` <= '$today'"; 

}
else
{
    $sql="SELECT * from `tbl_user` where `mobile`='$value' AND `donationdate` <= '$today'"; 
}

if(isset($sortcolumn))
{
    $sql=$sql. "ORDER BY $sortcolumn";
    return run_sql($sql);
    
}

return run_sql($sql);

}





?>