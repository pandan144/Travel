<?php 


$connection = mysqli_connect('localhost:3305','root','password123','travelstour');


if(isset($_POST['submit'])){
    $username= $_POST['adminname'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM adminlogin WHERE name='$username' AND password='$password'";
    $result = mysqli_query($connection,$sql);
    $resultcheck = mysqli_num_rows($result);

    if($resultcheck > 0){
        header("Location: http://localhost/myworktask/Travel");
        echo"LOGIN SUCCES";
    }
    else{
        echo"LOGIN FAIL";
    }

}else{
    
}

?>