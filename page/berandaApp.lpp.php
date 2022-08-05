<html>
    <head>
        <title>TiketKu</title>
        <meta name="description" content="Pembelian tiket secara online">
        <meta name="viewport" content="width=device=width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
        <meta charset="utf-8">
        
        <link rel="shortcut icon" type="image/png" href="../assets/ivg/shortcuticon.png">
        <link rel="stylesheet" type="text/css" href="../engine/web.css">
        <style type="text/css">
            .page {
                background: #fff;
                color: #000;
            }
            .page .page-c {
                width: 100%;
                height: 100%;
            }
            .page .page-c .c {
                width: 95%;
                padding: 2em 0em;
                position: relative;
                overflow-x: hidden;
                overflow-y: auto;
                -ms-overflow-style: none;
                scrollbar-width: none;
            }
            .page .page-c .c::-webkit-scrollbar {
                display: none;
            }
            @media screen and (max-width: 425px){
                .page .page-c .c {
                width: 90%;
                }
            }
            .page .page-c .c .c1 {
                width: 100%;
                margin-bottom: 60px;
            }
            .page .page-c .c .c1 .c1-c {
                position: relative;
                display: inline;
            }
            .page .page-c .c .c1 .c1-c-left {
                float: left;
            }
            .page .page-c .c .c1 .c1-c-right {
                float: right;
            }
            .page .page-c .c .c1 .c1-c .c1-c-text {
                color: #000;
                font-size: 30px;
                position: relative;
            }
            @media screen and (max-width: 425px){
                .page .page-c .c .c1 .c1-c .c1-c-text {
                    font-size: 28px;
                }
            }
            .page .page-c .c .c1 .c1-c .c1-c-button {
                background-color: #000;
                color: #fff;
                width: 150px;
                height: 35px;
                border-radius: 2px;
                margin: 0em 0.2em;
                cursor: pointer;
            }
            @media screen and (max-width: 425px){
                .page .page-c .c .c1 .c1-c .c1-c-button {
                    width: 150px;
                    height: 30px;
                }
            }
            .page .page-c .c .c2 {
                width: 100%;
            }
            .page .page-c .c .c2 .c2-1 {
                position: relative;
            }
            .page .page-c .c .c2 .c2-1 .c2-1-text {
                color: #000;
                text-align: left;
                font-size: 20px;
            }
            .page .page-c .c .c2 .c2-2 {
                position: relative;
            }
            .page .page-c .c .c2 .c2-2 .c2-2-post {
                width: 100%;
                height: 120px;
                border-radius: 2px;
                margin: 1em 0em;
                display: inline-block;
                cursor: pointer;
            }
            .page .page-c .c .c2 .c2-2 .c2-2-post .c2-2-post-text {
                color: #fff;
                font-size: 22px;
                top: 50%;
                transform: translateY(-50%);
                position: relative;
            }
        </style>
        <script type="text/javascript" src="../engine/web.js"></script>
        <script type="text/javascript">
            function tentangtiketkuPage(){
                window.location = "tentang-tiketku";
            }
            function surabayaPage(){
                window.location = "@beranda/surabaya";
            }
            function madiunPage(){
                window.location = "@beranda/madiun";
            }
            function yogyakartaPage(){
                window.location = "@beranda/yogyakarta";
            }
            function semarangPage(){
                window.location = "@beranda/semarang";
            }
            function jakartaPage(){
                window.location = "@beranda/jakarta";
            }
        </script>
    </head>
    <body class="page" id="page"><center><div class="page-c" id="page-c">
        <div class="c" id="c">
            <div class="c1" id="c1">
                <div class="c1-c c1-c-left" id="c1-c c1-c-left">
                    <h1 class="c1-c-text" id="c1-c-text">TiketKu</h1>
                </div>
                <div class="c1-c c1-c-right" id="c1-c c1-c-right">
                    <button class="c1-c-button" id="c1-c-button" onclick="tentangtiketkuPage()">TENTANG TiketKu</button>
                </div>
            </div>
            <div class="c2" id="c2">
                <div class="c2-1" id="c2-1">
                    <h1 class="c2-1-text" id="c2-1-text">Pilih Tujuan:</h1>
                </div>
                <div class="c2-2" id="c2-2">
                    <div class="c2-2-post" id="c2-2-post" style="background: url('../assets/ivg/surabaya.jpg') no-repeat; background-size: 100%; background-position-y: 30%;" onclick="surabayaPage()">
                        <p class="c2-2-post-text" id="c2-2-post-text">Surabaya</p>
                    </div>
                    <div class="c2-2-post" id="c2-2-post" style="background: url('../assets/ivg/madiun.jpg') no-repeat; background-size: 100%; background-position-y: 40%;" onclick="madiunPage()">
                        <p class="c2-2-post-text" id="c2-2-post-text">Madiun</p>
                    </div>
                    <div class="c2-2-post" id="c2-2-post" style="background: url('../assets/ivg/yogyakarta.jpg') no-repeat; background-size: 100%; background-position-y: 20%;" onclick="yogyakartaPage()">
                        <p class="c2-2-post-text" id="c2-2-post-text">Yogyakarta</p>
                    </div>
                    <div class="c2-2-post" id="c2-2-post" style="background: url('../assets/ivg/semarang.jpg') no-repeat; background-size: 100%; background-position-y: 60%;" onclick="semarangPage()">
                        <p class="c2-2-post-text" id="c2-2-post-text">Semarang</p>
                    </div>
                    <div class="c2-2-post" id="c2-2-post" style="background: url('../assets/ivg/jakarta.jpg') no-repeat; background-size: 100%; background-position-y: 70%;" onclick="jakartaPage()">
                        <p class="c2-2-post-text" id="c2-2-post-text">Jakarta</p>
                    </div>
                </div>
            </div>
        </div>
    </div></center></body>
</html>