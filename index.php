<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/37b700fbec.js" crossorigin="anonymous"></script>
    <script src="index.js" defer></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>Login Page</title>
</head>

<body>

    <div class="container">
        <h2>Login Here</h2>
        <form class="form" action=" "method="post">
            <div class="icon">
                <input class="input" type="text" name="username" placeholder="Enter Your Username">
                <i class="fa-regular fa-user"></i>
            </div>
            <div class="icon">
                <input class="input" type="password" name="password" placeholder="Enter Password">
                <i class="fa-solid fa-lock"></i>
            </div>
            <button name="save" class="loginButton">LogIn</button>
        </form>
    </div>
    <?php 
        if(isset($_POST['save'])){
            $userError=null;
            $passwordError=null;
           $userName=$_POST['username'];
           $password=$_POST['password'];
           $upperCase=preg_match("@[A-Z]@",$password);
           $lowerCase=preg_match("@[a-z]@",$password);
           $number=preg_match("@[0-9]@",$password);
           $specialChar=preg_match("@[^\w]@",$password);
        //    USERNAME VALIDATION
           if(empty($userName)){
            $userError=1;
            echo "<script>alert('username should not empty');</script>";
           }
           elseif(!preg_match("/^[A-Z]*$/",$userName)){
            $userError=1;
            echo "<script>alert('username should capital letter only');</script>";
           }
        // PASSWORD VALIDATION
           if($password==null){
                $passwordError=1;
           }
           elseif(!$upperCase || !$lowerCase || !$number || !$specialChar || strlen($password<8) || strlen($password)>15){
            $passwordError=1;
            echo "<script style='color:red'>alert('Password should be minimum of 8 character and maximum of 15 character must contain atleast one uppercase one lowercase and one special character');</script>";
           }
           if($userError!=1 && $passwordError!=1){
            header("Location:http://localhost/EMPLOYEE TASK/employeeTable.php");
           }
           






        }
    ?>



</body>

</html>