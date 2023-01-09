<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/addEmployee.css">
    <title>Document</title>
</head>
<body>
    <div class="employee-container">
        <div class="employee-wrapper">
            <h2 class="main-headind" >Add Employee</h2>
            <form class="employee-add" action="employeeData.php" method="post">
                <div class="employee-detail">
                    <lable>Employee Name :</lable>
                    <input type="text" name="employee-name">
                </div>
                <div class="employee-detail">
                    <lable>Contact No :</lable>
                    <input type="text" name="contact">
                </div>
                <div class="employee-detail">
                    <lable>Email :</lable>
                    <input type="email" name="email">
                </div>
                <button class="add">Add</button>

            </form>
        </div>
    </div>
</body>
</html>