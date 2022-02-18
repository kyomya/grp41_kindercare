commentonscores.php
<?php
$server='localhost';
$username='root';
$password='';
$dbname='kc';
$dbconnect=mysqli_connect($server,$username,$password,$dbname);
$table='mark';
if(isset($_POST['upload'])){
    
    $COMMENT= $_POST['comment'];
    
}
if(mysqli_connect_errno()){
    echo "Failed to connect to database";
}
else
{
    echo "Database connection successiful";
}

$sql="update mark set comment='".$_POST['comment']."' where id='".$_POST['id']."'";

$run=mysqli_query($dbconnect,$sql);
if($run =FALSE){
    echo "ERROR";
}
else{
    echo "Data inserted into table";
}

header("Location: ../scores.php");



?>

