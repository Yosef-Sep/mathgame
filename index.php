<?php
session_start();

if(!isset($_SESSION['loggedin'])){
    header('Location: login.php');
}else{
    $nama = $_SESSION['nama'];
    $_SESSION['skor'] = 0;
    $_SESSION['lives'] = 5;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HELLO <?php echo $nama ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">  

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src=" https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">
        <h1 class="display-1">Hello <?php echo $nama ?></h1>
        <h1 class="display-5">Selamat datang di Game ini</h1>
        <a href="mulaigame.php" class="btn btn-primary">Mulai</a>
        <a href="logout.php" class="btn btn-danger">Logout</a>
        <hr>
        <h2>Hall of Fame</h2>
        <table class='table table-dark'>
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama</td>
                    <td>Email</td>
                    <td>Skor</td>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $query= mysqli_query($con, "select * from tbpemain order by skor desc limit 10");
                $no = 0;
				if ($query === FALSE) {die(mysqli_error($con));}
                while($dt = mysqli_fetch_array($query)){
                    $no += 1;
                    echo "<tr>";
                    echo "<td>$no</td>";
                    echo "<td>".$dt['nama']."</td>";
                    echo "<td>".$dt['email']."</td>";
                    echo "<td>".$dt['skor']."</td>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>