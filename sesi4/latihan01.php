<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>from data</title>
</head>
<body>

 <?php
 if(isset($_GET["txUSER"])){
 $user = $_GET["txUSER"];
 
     if ($user==""){

    echo"<div style='color:red; padding:5px; '>User name belum diisikan</div>";

}
 }
 ?>

    <from action="latihan01.php" method="GET"> <!-- get untuk merequest,data yang dimasukan ke from akan dimunculkan di address bar-->
       <div>
        user name
        <input type="text" id="txUSER" name="txUSER">
       </div>
       <div>
        password
        <input type="password"id ="txPASSKEY" name="txPASSKEY">
        </div>

        <div>
        <button type="submit"> login </button>
        <a href="daftar.php"> Daftar </button>
        </div>

   </from>

</body>
</html>
