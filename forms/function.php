<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'feedback');
class DB_con
{
function __construct()
{
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$this->dbh=$con;
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
}
public function insert($name,$email,$message)
{
$ret=mysqli_query($this->dbh,"insert into comments(Id,Name,Email,Comments)
values('0','$name','$email','$message')");
return $ret;
}
}
?>