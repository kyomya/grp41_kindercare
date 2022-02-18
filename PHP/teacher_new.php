
<?php
$server='localhost';
$username='root';
$password='';
$dbname='kc';
$dbconnect=mysqli_connect($server,$username,$password,$dbname);
$table='teacher_record';

if(isset($_POST['registerteacher'])){
    
    $FIRSTNAME= $_POST['tfname'];
    $LASTNAME= $_POST['tlname'];
    $EMAIL= $_POST['temail'];
    $PHONE= $_POST['tphone'];
    $CODE= $_POST['tcode'];
    
}
if(mysqli_connect_errno()){
    echo "Failed to connect to database";
}
else
{
    echo "Database connection successiful";
}

$sql="insert into  $table (firstname,lastname,email,phone,code) values ('$FIRSTNAME','$LASTNAME','$EMAIL','$PHONE','$CODE') ";

$run=mysqli_query($dbconnect,$sql);
if($run =FALSE){
    echo "ERROR";
}
else{
    header("Location: ../listteachers.php");

}




?>

