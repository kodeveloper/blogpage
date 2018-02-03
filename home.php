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
            text-decoration: none;
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
        .blog button {
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
        .blogs span > a {
            padding: 5px 0;
            width: 130px;
            font-size: 16px;
            color: #ecf0f1;
            background-color: black;
            margin: 10px auto;
            float: right;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            border-right: 3px solid #ecf0f1;
        }
        hr {
            border: 1px solid;
        }
        .blogs {
            display: inline-block;
            font-size: 18px;
            font-weight: lighter;
        }
        .blogs p{
            height: 200px;
            border-left: 5px solid;
            padding-left: 10px;
        }
        .blogs > span{
            margin-bottom: 10px;
            display: inline-block;
            margin-top: -30px;
        }
        .writer {
            display: block;
            background: #000;
            color: #fff;
            font-size: 15px;
            padding: 7px;
            margin-left: -10px;
            margin-bottom: 10px;
            letter-spacing: 2px;
            width: 400px;
        }
        .writer .date{
            float: right;
            border-left: 3px solid #ecf0f1;
            display: block;
            margin-top: -7px;
            line-height: 35px;
            padding: 0 10px 0 15px;
            font-size: 13px;
        }
        .logo{
            float: left;
            margin-left: 15px;
            font-size: 22px;
            color: aquamarine;
            cursor: crosshair;
        }
        .search{
            float: right;
            background-color: #e84b3c;
            width: 230px;
            padding: 20px;
            color: white;
            font-size: 20px;
        }
        .search form { height: 20px; }
        .search input[type=text]{
            width: 230px;
            height: 40px;
            font-size: 16px;
            padding-left: 5px;
        }
    </style>
</head>
    <body>
    <div class="welcome-bar"><span class="logo">△ is real</span>Welcome, <span class="name"></span><?php echo $name;?><a href="?exit=yes" class="exit">exit →</a></div>
    <span class="search">
        <form action="" method="get">
            <input type="text" id="search" name="search" placeholder="Search">
        </form>
    </span>
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
                echo "<span class='writer'>Oğuzhan Demiröz <span class='date'>16 Jan 2018</span></span>";
                echo $say["text"];
                $bid = $say["bid"];
                echo "</p><span><a href=edit.php?edit=$bid>Edit</a><a href=?delete=$bid>Delete</a></span>";
            }
            ?>
        </div>
    </div>
    <script src="assets/js/main.js"></script>
</body>
</html>