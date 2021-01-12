<?php
include 'conn.php';
if(count($_POST)!=0)
{
    extract($_POST);
    $query="INSERT INTO user (username,password)VALUES('$username','$password')";
    $result=mysqli_query($conn,$query);
    if($result==true)
    {
        echo "Record Inserted";
    }
    else
    {
        echo "Record not Inserted";
    }
}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 m-auto">
                    <form method="post">
                            <div class="card">
                       
                                <div class="card-header bg-dark">
                                    <h1 class="text-center text-white">Insert Operation</h1>
                                </div>

                                <div class="from-group">
                                     <lable for="username">Username</lable>
                                     <input type ="text" name="username" class="form-control" required>
                                 </div>

                                <div class="from-group">
                                    <lable for="password">Password</lable>
                                    <input type ="password" name="password" class="form-control" required>
                                </div>

                                <button type="submit" class="btn btn-success">Submit</button>
                   
                            </div>
                    </form>
                    <h5><a href="display.php"><button type="View User" class="btn btn-primary">View User</button></a></h5>
                </div>
            </div>
        </div>
</body>
</html>