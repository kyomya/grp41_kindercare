
<?php
session_start();

$dbserver='localhost';
$dbuser='root';
$dbpassword='';
$dbname='kc';

//checking if the data from the login form was submitted
$dbconnect=mysqli_connect($dbserver,$dbuser,$dbpassword,$dbname);
if(mysqli_connect_errno()){
    exit('Failed to connect to database:'.mysqli_connect_error());
}
 if(!isset($_POST['username'],$_POST['usercode'])){
     //displaying error message
     exit('Please fill in both fields!');
 }
//preparing sql to prevent sql injection
else if($stmt=$dbconnect->prepare('SELECT id, code FROM teacher_record where email=?')){
    //bind parameters
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    //store the result to check if user exists in the database
    $stmt->store_result();
    if($stmt->num_rows>0){
        $stmt->bind_result($id,$password);
        $stmt->fetch(); 
        //account exists, now we verify the password using hashed passswrd
        if($_POST['usercode']===$password){
            //verification success. user has logged in
            //create sessions, so we know the user is logged in
            session_regenerate_id();
            $_SESSION['loggedin']=TRUE;
            $_SESSION['name']=$_POST['username'];
            $_SESSION['id']=$id;
            header('Location: ../addpupil.php? Llogin was successiful');
        }else{
            //incorrect password
            echo 'Incorrect username and/ or password!';
        }
    } 
    
    $stmt->close();
    
}

?>

