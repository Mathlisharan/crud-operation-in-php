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
                <div class="col-lg-12">
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Username</th>
                                <th scope="col">Password</th>
                                <th scope="col">Delete</th>
                                <th scope="col">Update</th>
                            </tr>
                        </thead>      
                        <?php
                            include 'conn.php';
                            $query="SELECT * FROM user";
                            $result=mysqli_query($conn,$query);
                            while($res=mysqli_fetch_array($result)){
                        ?>   
                        <tbody>
                            <tr>
                                
                                <td><?php echo $res['id']?></td>
                                <td><?php echo $res['username']?></td>
                                <td><?php echo $res['password']?></td>
                                <td><a href="delet.php?id=<?php echo $res['id']?>"><input type="button" class="btn btn-primary" value="Delete"></a></td>
                                <td><a href="update.php?id=<?php echo $res['id']?>"><input type="button" class="btn btn-primary" value="Update"></a></td>
                               
                            </tr>
                        </tbody>    
                        <?php }?>   
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>