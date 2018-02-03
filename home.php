<?php include("config/connect.php") ?>
<html>
<head>
    <?php
    session_start();
    if(empty($_SESSION["name"]))
        header("location: login.php");
    else {
        $name = $_SESSION["name"];
        $id = $_SESSION["id"];
        $text = $_POST["text-blog"];
        $query = $db->prepare("INSERT INTO blogs set text = ? , uid = ? , isActive = ?");
        $exec = $query->execute(array($text, $id, true));
        if ($_GET["exit"] == "yes") {
            session_destroy();
            header("location: login.php");
        }
        if (isset($_GET["delete"])) {
            $query = $db->prepare("UPDATE blogs SET isActive = 0 WHERE bid = ? ");
            $query->execute(array($_GET["delete"]));
        }
    }
    ?>

    <title>Welcome to My Blog Page</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <script src="assets/js/jquery-3.1.1.min.js"></script>
    <script src="assets/js/cookie.js"></script>
    <style>
        .welcome-bar {
            background-color: #e74c3c;
            color: #ecf0f1;
            font-size: 20px;
            padding: 15px 15px 17px 0;
            text-align: right;
        }

        a.exit {
            color: #933327;
            cursor: pointer;
            margin-left: 5px;
        }

        .blog {
            margin-left: 15px;
            margin-right: 15px;
        }

        .blog h1 {
            margin: 10px auto;
        }

        .write-blog {
            display: inline-block;
        }

        .write-blog textarea {
            font-size: 22px;
            padding: 10px;
            resize: none;
            display: block;
        }
        .blogs span > a, button {
            height: 50px;
            width: 130px;
            font-size: 16px;
            color: #ecf0f1;
            background-color: black;
            border: 2px solid;
            padding-left: 10px;
            margin: 10px auto;
            float: right;
            cursor: pointer;
        }

        hr {
            border: 1px solid;
        }
        .blogs {
            display: inline-block;
            width: 900px;
            font-size: 18px;
            font-weight: lighter;
        }
        .blogs p{
            height: 200px;
            margin-bottom: 55px;
            border-left: 5px solid;
            padding-left: 10px;
        }
        .blogs p span{
            margin: 5px 0;
            display: block;
        }
        .logo{
            float: left;
            margin-left: 15px;
            font-size: 22px;
            color: aquamarine;
            cursor: crosshair;
        }
        .logo:hover{
            color: #ecf0f1;
            font-size: 24px;
        }
    </style>
</head>
<body>
<div class="welcome-bar"><span class="logo">△ is real</span>Welcome, <span class="name"></span><?php echo $name;?><a href="?exit=yes" class="exit">çıkış</a></div>
<div class="blog">
    <h1>Write Blog!</h1>
    <div class="write-blog">
        <form action="#" method="post">
            <textarea name="text-blog" id="text-blog" cols="63" rows="11" required></textarea>
            <button>Share</button>
        </form>
    </div>
    <hr>
    <h1>Blogs!</h1>
    <div class="blogs">
       <?php $query = $db->query("select * from blogs WHERE isActive = 1 AND uid = $id",PDO::FETCH_ASSOC);
        foreach($query as $say){
            echo "<p>";
            echo $say["text"];
            $bid = $say["bid"];
            echo "<span><a href=edit.php?edit=$bid>Edit</a><a href=?delete=$bid>Delete</a></span>";
            echo "</p>";
        }
        ?>
    </div>
</div>
<script src="assets/js/main.js"></script>
</body>
</html>