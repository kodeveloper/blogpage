<html>
<head>
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
        button {
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
    </style>
</head>
<body>
<div class="welcome-bar">Welcome, <span class="name">Teğberk Demiröz</span>! <a class="exit"> exit ⟶</a></div>
<div class="blog">
    <h1>Write Blog!</h1>
    <div class="write-blog">
        <form action="#" method="get">
            <textarea name="text-blog" id="text-blog" cols="63" rows="11"></textarea>
            <button>Share</button>
        </form>
    </div>
    <hr>
    <h1>Blogs!</h1>
    <div class="blogs">
        <p>
            Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir
            matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı
            1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını
            sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960'larda Lorem
            Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi
            Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.
            <span><button class="edit">Edit</button><button>Delete</button></span>
        </p>
        <p>
            Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir
            matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı
            1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını
            sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960'larda Lorem
            Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi
            Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.
            <span><button class="edit">Edit</button><button>Delete</button></span>
        </p>
        <p>
            Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir
            matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı
            1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını
            sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960'larda Lorem
            Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi
            Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.
            <span><button class="edit">Edit</button><button>Delete</button></span>
        </p>
    </div>
</div>
<script src="assets/js/main.js"></script>
</body>
</html>