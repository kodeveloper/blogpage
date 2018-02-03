<?php include("config/connect.php"); ?>
<html>
<head>
    <title>Welcome to My Blog Page</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <script src="assets/js/jquery-3.1.1.min.js"></script>
    <script src="assets/js/cookie.js"></script>
    <style>
        form {
            display: block;
            margin: 10px 0 0 30px;
        }
        textarea {
            font-size: 22px;
            padding: 10px;
            resize: none;
            display: inherit;
        }
        button, input[type="reset"]{
            height: 50px;
            width: 130px;
            font-size: 16px;
            color: #ecf0f1;
            background-color: black;
            border: 2px solid;
            padding-left: 10px;
            margin: 10px auto;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form action="" method="get">
        <h1><?php echo $_GET["edit"]; ?>. blog editing</h1>
        <?php $blogid = $_GET["edit"];
        echo '<input type="hidden" name="hd-edit" value="'.$blogid.'">'; ?>
        <textarea name="edit-blog" id="edit-blog" cols="63" rows="11" required><?php
                $query = $db->prepare("select text from blogs where bid = ?");
                $query->execute(array($blogid));
                $text = $query->fetch();
                $text = $text["text"];
                echo $text;
                    if(isset($_GET["edit-blog"])){
                        echo $_GET["edit-blog"];
                        $query = $db->prepare("UPDATE blogs SET text = ? WHERE bid = ? ");
                        $query->execute(array($_GET["edit-blog"],$_GET["hd-edit"]));
                        header("location: home.php");

                    }
            ?></textarea>
        <button>OK</button>
        <input type="reset" style="background-color: red;" value="Return">
    </form>
<script src="assets/js/main.js"></script>
</body>
</html>