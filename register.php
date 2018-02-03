
<html>
<head>
    <title>Register Page</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
</head>
<body>
<?php
/* $connect = mysql_connect("127.0.0.1","root","")or die (mysql_error());
mysql_select_db("deneme",$connect) or die (mysql_error()); */
include("config/connect.php");

$name = $_POST["name"];
$username = $_POST["username"];
$pw = $_POST["password"];
$mail = $_POST["mail"];
    $query = $db->prepare("INSERT INTO Users set name = ?, username = ? , password = ?, email = ?" );
    $insert = $query->execute(array($name,$username,$pw,$mail));
if($insert){
    //$last_id = $db->lastInsertId();
    header("location: login.php");
}
  /*  $query = $db->query("select * from Users ",PDO::FETCH_ASSOC);
            foreach($query as $say) {
                echo $say["dene"];
                echo "<span style='padding-left:15px;'></span>";
                echo $say["denem"];
                echo " ------- ";
                echo $say["deneme"];
                echo " ------- ";
                echo $say["email"];
                    echo "<br>";
            }
/*       if($query->rowCount()){
            foreach ($query as $row){
                print_r($row);
                                    }
                               }
*/
?>
<div class="container">
    <h1>Register</h1>
    <form action="" method="post">
        <input type="text" name="name" id="name" placeholder="Name and Surname" required>
        <input type="text" name="username" id="username" placeholder="Username" required>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <input type="email" name="mail" id="mail" placeholder="E-Mail" required>
        <input type="submit" value="Sign Up">
    </form>
</div>
</body>
</html>