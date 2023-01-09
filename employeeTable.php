<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/table.css">
    <title>Document</title>
</head>

<body>
    <?php
        $conn=mysqli_connect("localhost","root","","empolyee") or die("Connection failed");
        $query="SELECT * FROM employeedetail ";
        $result= mysqli_query($conn,$query) or die("query unsucsesssfulll");
        if(mysqli_num_rows($result) >0){ 
    ?>
    <div class="table-container">
        <table class="table" border="2px" cellspacing="0px">
            <thead class="thead">
                <tr>
                    <th scope="col">Employee Name</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Email Department</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row=mysqli_fetch_assoc($result)){   
                ?>
                <tr>
                    <td><?php echo $row["Employee Name"]; ?></td>
                    <td><?php echo $row["Contact"] ;?></td>
                    <td><?php echo $row["Email Department"] ;?></td>
                </tr>
                
                <?php } ?>
            </tbody>
        </table>
        <?php }else{
            echo "<h1>No Record Found</h1>";
        }
        mysqli_close($conn);
         ?>
        <form action="addEmployee.php">
            <button class="add-employee">Add Empolyee</button>
        </form>
    </div>
</body>

</html>