<?php 
     $name=$_POST['employee-name'];
     $contact=$_POST['contact'];
     $email=$_POST['email'];
     $phone=preg_match("@[0-9]@",$contact);
     $validEmail=preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$email);


    $conn=mysqli_connect("localhost","root","","empolyee") or die("Connection failed");
    if($name!=null && $contact!=null && $email!=null){
        if(strlen($contact)==10 && $phone){
            if($validEmail){
            $query="INSERT INTO `employeedetail`(`Employee Name`, `Contact`, `Email Department`) VALUES ('{$name}','{$contact}','{$email}')";
            $value=mysqli_query($conn,$query) or die("query failed"); 
            header("Location:http://localhost/EMPLOYEE TASK/employeeTable.php");
            mysqli_close($conn);
            }else{
                echo "<Script>alert('email is invalid');</script>";
            }
            

        }else{
            echo "<Script>alert('Mobile number should be equal to 10 digit and numbers only');</script>";
        }
        

    }else{
        echo "<Script>alert('Please Fill All Required values');</script>";
        
    }
   


   

?>