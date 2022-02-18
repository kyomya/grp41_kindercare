
<?php
$server='localhost';
$username='root';
$password='';
$dbname='kc';
$dbconnect=mysqli_connect($server,$username,$password,$dbname);
$table='pupilregister';
if(isset($_POST['pregbtn'])){
    
    $FIRSTNAME= $_POST['pfname'];
    $LASTNAME= $_POST['plname'];
    $PHONE= $_POST['ptel'];
    $CODE= $_POST['pcode'];
    
}
if(mysqli_connect_errno()){
    echo "Failed to connect to database";
}
else
{
    echo "Database connection successiful";
}

$sql="insert into  $table (FIRSTNAME,LASTNAME,PHONE,CODE,STATUS) values ('$FIRSTNAME','$LASTNAME','$PHONE','$CODE',1) ";

$run=mysqli_query($dbconnect,$sql);
if($run =FALSE){
    echo "ERROR";
}
else{
    echo "Data inserted into table";
}

header("Location: ../listpupils.php");



?>

