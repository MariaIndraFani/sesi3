<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>from data</title>
</head>
<body> <!--data yang akan dimunculkan pada address bar,tetapi lewat documentnya sendiri-->
<?php
    if(isset($_POST["txUSER"])){
         $user = $_POST["txUSER"];
    
        if ($user==""){
            echo"<div yle='color:red; padding:5px; '>User name atau password salah</div>";


         }

    }

?>


    <from action="latihan02.php" method="POST"> <!--menggunakan post maka pada address bar tidak akan kelihatan username pada passnya-->
       <div>
        user name
        <input type="text" id="txUSER" name="txUSER" required>
       </div>
       <div>
        password
        <input type="password"id ="txPASSKEY" name="txPASSKEY">
        </div>

        <div>
        <button type="submit">login</button>
        <a href="daftar.php">Daftar</button>
        </div>

    </from>

</body>
</html>