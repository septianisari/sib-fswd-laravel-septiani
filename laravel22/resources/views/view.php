<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Laravel Septiani</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script></head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
<body>
    <h1 style="text-align: center;">USER </h1>
    <a href="./insert.php" style="width: 12em; color:white" class="col btn btn-primary form-control my-2 mx-4" role="button">+ Tambah Pengguna</a>
    <div class= "card shadow-lg border-0 m-5 p-5 mx-auto">
    <table id ="myTable">
    <thead class="bg-light" style="color:black">
        <th class="text-center">ID</th>
        <th class="text-center">ACTION</th>
        <th class="text-center">AVATAR</th>
        <th class="text-center">NAME</th>
        <th class="text-center">EMAIL</th>
        <th class="text-center">PHONE NUMBER</th>
        <th class="text-center">ROLE</th>       
    </thead>

        <tbody>
           
            <tr class="text-center">
                <td><?php echo '1'?></td>
                <td><a href="" style="width: 5em; color:white" class="col btn btn-primary form-control my-2 mx-0" role="button">DETAIL</a>
                    <a href="" style="width: 5em; color:white" class="col btn btn-warning form-control my-2 mx-0" role="button">EDIT</a>
                    <a href="" style="width: 5em; color:white" class="col btn btn-danger form-control my-2 mx-0" role="button">DELETE</a></td>
                    
    
                <td><?php echo 'bts.png' ?></td>
                <td><?php echo 'SEPTIANI'?></td>
                <td><?php echo 'septianisarimanik@gmail.com'?></td>
                <td><?php echo '085268118474'?></td>
                <td><?php echo 'ADMIN'?></td>
            </tr>
            <tr class="text-center">
                <td><?php echo '2'?></td>
                <td><a href="" style="width: 5em; color:white" class="col btn btn-primary form-control my-2 mx-0" role="button">Detail</a>
                    <a href="" style="width: 5em; color:white" class="col btn btn-warning form-control my-2 mx-0" role="button">Edit</a>
                    <a href="" style="width: 5em; color:white" class="col btn btn-danger form-control my-2 mx-0" role="button">Hapus</a></td>
                    
    
                <td><?php echo 'RM.png' ?></td>
                <td><?php echo 'RM'?></td>
                <td><?php echo 'RM@gmail.com'?></td>
                <td><?php echo '0897999423299'?></td>
                <td><?php echo 'STAFF'?></td>
            </tr>
            <tr class="text-center">
                <td><?php echo '3'?></td>
                <td><a href="" style="width: 5em; color:white" class="col btn btn-primary form-control my-2 mx-0" role="button">Detail</a>
                    <a href="" style="width: 5em; color:white" class="col btn btn-warning form-control my-2 mx-0" role="button">Edit</a>
                    <a href="" style="width: 5em; color:white" class="col btn btn-danger form-control my-2 mx-0" role="button">Hapus</a></td>
                    
                    <td><?php echo 'bts.png' ?></td>
                <td><?php echo 'SEPTIANI'?></td>
                <td><?php echo 'septianisarimanik@gmail.com'?></td>
                <td><?php echo '085268118474'?></td>
                <td><?php echo 'ADMIN'?></td>

            </tr>
            <tr class="text-center">
                <td><?php echo '4'?></td>
                <td><a href="" style="width: 5em; color:white" class="col btn btn-primary form-control my-2 mx-0" role="button">Detail</a>
                    <a href="" style="width: 5em; color:white" class="col btn btn-warning form-control my-2 mx-0" role="button">Edit</a>
                    <a href="" style="width: 5em; color:white" class="col btn btn-danger form-control my-2 mx-0" role="button">Hapus</a></td>
                    
    
               <td><?php echo 'RM.png' ?></td>
                <td><?php echo 'RM'?></td>
                <td><?php echo 'RM@gmail.com'?></td>
                <td><?php echo '0897999423299'?></td>
                <td><?php echo 'STAFF'?></td>
            </tr>
            <tr class="text-center">
                <td><?php echo '5'?></td>
                <td><a href="" style="width: 5em; color:white" class="col btn btn-primary form-control my-2 mx-0" role="button">Detail</a>
                    <a href="" style="width: 5em; color:white" class="col btn btn-warning form-control my-2 mx-0" role="button">Edit</a>
                    <a href="" style="width: 5em; color:white" class="col btn btn-danger form-control my-2 mx-0" role="button">Hapus</a></td>
                    
    
                    <td><?php echo 'bts.png' ?></td>
                <td><?php echo 'SEPTIANI'?></td>
                <td><?php echo 'septianisarimanik@gmail.com'?></td>
                <td><?php echo '085268118474'?></td>
                <td><?php echo 'ADMIN'?></td>

            </tr>
            <tr class="text-center">
                <td><?php echo '6'?></td>
                <td><a href="" style="width: 5em; color:white" class="col btn btn-primary form-control my-2 mx-0" role="button">Detail</a>
                    <a href="" style="width: 5em; color:white" class="col btn btn-warning form-control my-2 mx-0" role="button">Edit</a>
                    <a href="" style="width: 5em; color:white" class="col btn btn-danger form-control my-2 mx-0" role="button">Hapus</a></td>
                    
                    <td><?php echo 'RM.png' ?></td>
                <td><?php echo 'RM'?></td>
                <td><?php echo 'RM@gmail.com'?></td>
                <td><?php echo '0897999423299'?></td>
                <td><?php echo 'STAFF'?></td>
            </tr>
        </tbody>

        
    
</table>
</div>
       
</body>

<script>
    $(document).ready(function (){
    $('#myTable').DataTable();
    });
</script>

</html>