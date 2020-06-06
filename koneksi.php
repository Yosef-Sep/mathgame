<?php
$con= mysqli_connect("localhost", "root", "", "utsmath")or die(mysqli_error());
mysqli_select_db($con, "utsmath")or die(mysqli_error($con));
?>