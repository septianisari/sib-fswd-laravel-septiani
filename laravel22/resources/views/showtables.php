<?php 
 session_start();
 

if(isset($_SESSION['is_login']) && $_SESSION['is_login'] == true){
 $_SESSION['email'];
 $_SESSION['password'];
} else {
    echo "<script>window.location='login.php';</script>";
}
?>

<?php 
include 'koneksidb.php';

if(isset($_GET['hapus'])){
    $id = $_GET['hapus'];
    $query = mysqli_query($connection,"DELETE FROM users WHERE id='$id'");
    echo "<script>alert('Data Pengguna Berhasil Dihapus');window.location='tampil_data_pengguna.php';</script>";
}


?>


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
    <h1 style="text-align: center;">DATA USER</h1>
    <a href="./insertuser.php" style="width: 12em; color:white" class="col btn btn-primary form-control my-2 mx-4" role="button">INSERT USER</a>
    <?php 
    include 'koneksidb.php';

    $result = mysqli_query($connection,"SELECT * FROM users ");
    ?>
    <div class= "card shadow-lg border-0 m-5 p-5 mx-auto">
    <table id ="myTable">
    <thead class="bg-light" style="color:black">
        <th class="text-center">ID</th>
        <th class="text-center">ACTION</th>
        <th class="text-center">AVATAR</th>
        <th class="text-center">NAME</th>
        <th class="text-center">EMAIL</th>
        <th class="text-center">PHONE</th>
        <th class="text-center">ROLE</th>       
    </thead>

        <tbody>
            <?php
                while($row = mysqli_fetch_array($result)){
            ?>
            
            <tr class="text-center">
                <td><?php echo $row['id']?></td>
                <td><a href="./detailpengguna.php" style="width: 5em; color:white" class="col btn btn-primary form-control my-2 mx-0" role="button">Detail</a>
                    <a href="./edituser.php" style="width: 5em; color:white" class="col btn btn-warning form-control my-2 mx-0" role="button">Edit</a>
                    <a href="./showtables.php" style="width: 5em; color:white" class="col btn btn-danger form-control my-2 mx-0" role="button">Hapus</a></td>
                    
    
                <td><img src="./0d9c9626bf4e24612c90465fbaa243a0.jpg" width="35" height="40"></td>
                <td><?php echo $row['NAME']?></td>
                <td><?php echo $row['EMAIL']?></td>
                <td><?php echo $row['PHONE']?></td>
                <td><?php echo $row['ROLE']?></td>
            </tr>
        </tbody>

        
<?php } ?>
    
</table>
</div>
       
</body>

<script>
    $(document).ready(function (){
    $('#myTable').DataTable();
    });
</script>

</html>