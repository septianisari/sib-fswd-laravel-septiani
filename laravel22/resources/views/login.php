<?php 
 session_start();
 
 include 'koneksidb.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Laravel Septiani</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body style="background-color: #F0F8FF; ">

    <div class="row">
            <div class="col-md-4 mx-auto my-5">
                <div class="card shadow-lg border-0">
                    <div class ="card-body">
                    <h1 class="text-center my-4"style="color :#0F7AFC; font-weight:bold">LOGIN</h1>
                            <form method = "post" action="./loginprocess.php">
                                <div class ="form-group">
                                    <p>Email </p><input type="EMAIL" class = "form-control" name = "EMAIL" placeholder="xxx@gmail.com"><br>
                                    <p>Password </p><input type="password" class = "form-control" name = "PASSWORD" placeholder="ENTER PASSWORD"><br>
                                    <p>Password </p><input type="text" class = "form-control" name = "NAME" placeholder="ENTER NAME"><br>
                                    
                                </div>
                                
                                <div class ="d-flex flex-end form-group" >
                                <button type="submit" class="col btn btn-primary form-control my-2 mx-2"   style=" font-weight:bold" name="add_post">LOGIN</button>
                                </div>

                            </form>
                    </div>
                </div>
            </div>
        </div>


</div>
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
</body>
</html>