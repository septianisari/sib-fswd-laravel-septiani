<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Laravel Septiani</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
        <h1 style="text-align: center;">EDIT USER</h1>

        <div class="col-6 card shadow-lg border-0 m-5 p-5 mx-auto">
            <div class = "card-body">
        <form action="./editusers.php" method="post" enctype="multipart/form-data">
            
            <input type="hidden" value="<?php echo 'id'?>" name="id">
            <div>
            <label for="name">NAME</label><br>
            <input style="width: 100%" type="text" id="name" name = "name" value="<?php echo 'ANISSA'?>" placeholder="FULL NAME" required>
            <br>
            <br>
            </div>

            <div class="d-flex flex-coloumn">
            <div class="col">
            <label  for="role">ROLE USER</label> <br> 
            <select  class="my-2" style="width: 90%; height :30%" name="role" value="<?php echo 'ADMIN'?>" id="role" placeholder="CHOOSE ROL">
                <option value="admin">ADMIN</option>
                <option value="staff">STAFF</option>
            </select>
            </div>

            <div class="col">
            <label for="password">PASSWORD</label><br>
            
            <input  style="width: 63%" type="password" id="password" name = "password" value="<?php echo 'password'?>" placeholder="Recipient's username" required>
            <a  id ="see" style="width: 5em; color:white" onclick="seeFunction()" class="col btn btn-primary form-control my-2 mx-2" role="button">OPEN</a>
            <br>
            <br>
            </div>
            </div>
            <script>
                function seeFunction() {
                    var pass = document.getElementById("password");
                    if (pass.type === "password"){
                        pass.type = "text";
                    }else{
                        pass.type = "password";
                    }

                }
                
            </script>

            <div class="d-flex flex-coloumn">
            <div class="col">
            <label for="email">EMAIL</label><br>
            <input style="width: 90%" type="email" id="email" name = "email" value="<?php echo '20104072@ITTELKOM-PWT.AC.ID'?>" placeholder="name@example.com" required>
            <br>
            <br>
            </div>

            <div class="col">
            <label for="phone">PHONE NUMBER</label><br>
            <input style="width: 100%" type="text" id="phone" name = "phone" value="<?php echo '0977828267820'?>" placeholder="089675632435" required>
            <br>
            <br>
            </div>
            </div>


            <div>
            <label for="address">FULL ADDRESS</label><br>
            <input style="width: 100%;"   type="text" id="address" name = "address" value="<?php echo 'SOUTH OF JAKARTA'?>" placeholder="INPUT FULL ADDRESS" required>
            <br>
            <br>
            </div>

            <div>
            <label for="avatar">CHOOSEN PHOTOS</label><br>
            <input style="width: 100%" type="file" id="avatar" name = "avatar" required>
            <br>
            <br>
            </div>
            
            <input type="submit" value="Edit" class="btn btn bg-primary" style="color :white">
        </form>

            </div>
        </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>   
</body>
</html>