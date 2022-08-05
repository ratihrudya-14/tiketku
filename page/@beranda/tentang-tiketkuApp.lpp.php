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
                width: 100px;
                height: 35px;
                border-radius: 2px;
                cursor: pointer;
            }
            @media screen and (max-width: 425px){
                .page .page-c .c .c1 .c1-c .c1-c-button {
                    width: 80px;
                    height: 30px;
                }
            }
            .page .page-c .c .c2 {
                width: 100%;
            }
            .page .page-c .c .c2 .c2-text {
                color: #000;
                text-align: left;
                font-size: 15px;
            }
        </style>
        <script type="text/javascript" src="../engine/web.js"></script>
        <script type="text/javascript">
            function berandaPage(){
                window.location = "beranda";
            }
            
        </script>
    </head>
    <body class="page" id="page"><center><div class="page-c" id="page-c">
        <div class="c" id="c">
            <div class="c1" id="c1">
                <div class="c1-c c1-c-left" id="c1-c c1-c-left">
                    <h1 class="c1-c-text" id="c1-c-text">TENTANG TiketKU</h1>
                </div>
                <div class="c1-c c1-c-right" id="c1-c c1-c-right">
                    <button class="c1-c-button" id="c1-c-button" onclick="berandaPage()">KEMBALI</button>
                </div>
            </div>
            <div class="c2" id="c2">
                <p class="c2-text" id="c2-text">TiketKu adalah sebuah layanan yang menyediakan tiket kereta untuk kota Surabaya, Madiun, Yogyakarta, Semarang, dan Jakarta. Dengan TiketKu pembelian tiket akan menjadi mudah dan tidak perlu mengantre lagi di loket pembelian tiket kereta.</p>
            </div>
        </div>
    </div></center></body>
</html>