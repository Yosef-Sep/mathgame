<?php
session_start();
if($_GET['result'] == 'success'){
    $result = "Hallo ".$_SESSION['name']." Selamat jawaban Anda benar…";
} else if($_GET['result'] == 'failed'){
    $result = "Hallo ".$_SESSION['name']." Sayang jawaban Anda salah… tetap semangat ya !!!";
}
if(isset($_GET['submit'])){
	header('Location: soal.php');
}
?>
<html>
<head>
    <title> Mathematics Game | Soal </title>
    <link rel="stylesheet" type="text/css" href="style.css">   
</head>
    <body>
    <div class="math-box">
        <h1>Mathematics Game</h1>
            <form method="GET">
           		<span><?php echo $result; ?></span><br>
           		<span>Lives : <?php echo $_SESSION['lives']; ?> | Score : <?php echo $_SESSION['score']; ?></span>
            	<input type="submit" name="submit" value="SUBMIT">
            </form>
        </div>
    </body>
</html>
