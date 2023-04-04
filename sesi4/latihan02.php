<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form data</title>
</head>
<body>

<?php
if(isset($_POST["txUSER"])){
    $usr = $_POST ["txUSER"];
    if($usr==""){
        echo "<div><h3 style='color:red;padding:5px;'>User Name/password salah</h3></div>";  
    }

}
 
if(isset($_POST["txUSER"])){
    $usr = $_POST ["txUSER"];
    if($usr==""){
        echo "<div><h3 style='color:red;padding:5px;'>User Name/password salah</h3></div>";  
    }

}

?>





    

    <form action="latihan02.php" method="POST">
        <div>
            user namespace
            <input type="text" id="txUSER" name="txUSER" required>
        </div>

        <div>
            password
            <input type="password" id="txPASKEY" name="txPASKEY">
        </div>

        <div>   
            <button type="submit"> login </button>
            <a href="daftar.php"> daftar </button>
        </div>
    </form>

</body>
</html>