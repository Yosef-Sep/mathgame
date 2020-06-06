<?php
session_start();
if(isset($_POST['submit']))
{
    $_SESSION['nama'] = $_POST['nama'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['loggedin'] = 1;
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Game</title>
	<link rel="stylesheet" type="text/css" href="formStyle.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js""></script>
    <script src=" https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">
        <h1>Masuk Ke Game</h1>
        <form action="" method="post">
            <input type="text" class="form-control mb-4" name="nama" required placeholder="Nama Anda">
            <input type="email" class="form-control mb-4" name="email" required placeholder="Email Anda">
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
        
    </div>
</body>

</html>