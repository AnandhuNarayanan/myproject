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
if($column=="blood")
{

$sql="select * from tbl_user where blood='$value' "; 

}
elseif($column=="place")
{
$sql="select * from tbl_user where place='$value' "; 

}
else
{
    $sql="select * from tbl_user where mobile='$value'"; 
}
if(isset($sortcolumn))
{
    $sql=$sql. "ORDER BY $sortcolumn";
    return run_sql($sql);
    
}

return run_sql($sql);

}





?>