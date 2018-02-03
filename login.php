<?php include("config/connect.php") ?>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
</head>
<body>
<?php
if($_POST){
    $username = $_POST["id"];
    $pw = $_POST["password"];
        if(empty($username) || empty($pw)){
            echo "Boş alan bırakmayın";
        }else{
            $uyegiris = $db ->prepare("SELECT * FROM Users WHERE username = ? AND password = ? ");
            $uyegiris ->execute(array($username, $pw));
            $exec = $uyegiris->fetch();
            if($exec){
                session_start();
                $_SESSION["username"] = $exec["username"] ;
                $_SESSION["name"] = $exec["name"] ;
                $_SESSION["id"] = $exec["uid"];
                //echo $_SESSION["name"];
                header("location: home.php" );
            }
            else
                echo "hata";
            //$_SESSION["name"] = $name;
        }
}


?>
<div class="container">
    <h1>Login</h1>
    <form action="" method="post">
        <input type="text" name="id" id="id" placeholder="Username" required>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <input type="submit" value="Sign In">
    </form>
</div>
</body>
</html>