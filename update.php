<?php
include 'conn.php';
if(count($_POST)!=0)
{
    extract($_POST);
    extract ($_GET);
    $query="UPDATE user SET username='$username', password='$password' WHERE id='$id'";
    $result=mysqli_query($conn,$query);
    if($result==true)
    {
        echo "Record Updated";
    }
    else
    {
        echo "Record not Updated";
    }
}
?>

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
                <div class="col-lg-6 m-auto">
                    <form method="post">
                            <div class="card">
                       
                                <div class="card-header bg-dark">
                                    <h1 class="text-center text-white">Update Operation</h1>
                                </div>
                                <div class="from-group">
                                     <lable for="username">Username</lable>
                                     <input type ="text" name="username" class="form-control">
                                 </div>

                                <div class="from-group">
                                <lable for="password">Password</lable>
                                <input type ="password" name="password" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-success">Submit</button>
                   
                            </div>
                    </form>
                    <h5><a href="display.php"><input type="button" class="btn btn-primary" value="View User"></a></h5>
                </div>
            </div>
        </div>
</body>
</html>