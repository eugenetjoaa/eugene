<!BOCTYPE html>
<html>
  <head>
    <title>hasil login</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
  
<?php
$nama = @_POST["username'];
$email = $_POST["email"];
?>
<form action="tampil.php" method="POST">
<h2>selamat anda berhasil login <h2>
<div class="imgcontainer">
    <img src="icon.png" alt="avatar" class="avatar">
</div>

<div class="container">
    <label><b>Password : <?php echp $email;?></b></label>
</div>

<div class="container" style="background-color:#flflfl">
               
</div>
</form>
          
</body>
</html>
