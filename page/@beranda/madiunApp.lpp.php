<html>
    <head>
        <title>TiketKu</title>
        <meta name="description" content="Pembelian tiket secara online">
        <meta name="viewport" content="width=device=width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
        <meta charset="utf-8">
        
        <link rel="shortcut icon" type="image/png" href="../../assets/ivg/shortcuticon.png">
        <link rel="stylesheet" type="text/css" href="../../engine/web.css">
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
            .page .page-c .c .c2 .c2-1 {
                position: relative;
            }
            .page .page-c .c .c2 .c2-1 .c2-1-banner {
                background: url('../../assets/ivg/madiun.jpg') no-repeat;
                background-size: 100%;
                background-position-y: 50%;
                width: 100%;
                height: 150px;
                border-radius: 2px;
            }
            .page .page-c .c .c2 .c2-2 {
                margin-top: 1em;
                position: relative;
            }
            .page .page-c .c .c2 .c2-2 .c2-2-post {
                background-color: #fff;
                box-shadow: 0px 5px 5px #aaa;
                width: 90%;
                border-radius: 2px;
                margin: 1.5em 0em;
                padding: 1em;
                cursor: pointer;
            }
            @media screen and (max-width: 768px){
                .page .page-c .c .c2 .c2-2 .c2-2-post {
                    width: 80%;
                }
            }
            @media screen and (max-width: 425px){
                .page .page-c .c .c2 .c2-2 .c2-2-post {
                    width: 70%;
                }
            }
            .page .page-c .c .c2 .c2-2 .c2-2-post .c2-2-post-c {
                display: block;
            }
            .page .page-c .c .c2 .c2-2 .c2-2-post .c2-2-post-c .c2-2-post-c-text {
                background-color: #ccc;
                color: #000;
                font-size: 15px;
                border-radius: 2px;
                margin-bottom: 0.8em;
                padding: 0.5em;
            }
            .page .page-c .c .c2 .c2-2 .c2-2-post .c2-2-post-c .c2-2-post-c-time {
                color: #000;
                font-size: 15px;
                margin-bottom: 0.8em;
            }
            .page .page-c .c .c2 .c2-2 .c2-2-post .c2-2-post-c .c2-2-post-c-price {
                color: #000;
                font-size: 15px;
            }
        </style>
        <script type="text/javascript" src="../../engine/web.js"></script>
        <script type="text/javascript">
            function berandaPage(){
                window.location = "../beranda";
            }
            
            function sbmncPage(){
                window.location = "@formulir/@madiun/sbmnc";
            }
            function jakkmncPage(){
                window.location = "@formulir/@madiun/jakkmnc";
            }
            function ykmncPage(){
                window.location = "@formulir/@madiun/ykmnc";
            }
            function ykmnpPage(){
                window.location = "@formulir/@madiun/ykmnp";
            }
            function ykmnaaPage(){
                window.location = "@formulir/@madiun/ykmnaa";
            }
            function smcmncPage(){
                window.location = "@formulir/@madiun/smcmnc";
            }
        </script>
        <?php
            date_default_timezone_set('Asia/Jakarta');
            $date = date("d M Y");
            $h = date("h");

            //SURABAYA
            $sbhc = $h+3;
            $sbtime = "$sbhc:00";

            //JAKARTA
            $jakkhc = $h+18;
            $jakktime = "$jakkhc:00";

            //YOGYAKARTA
            $ykhc = $h+1;
            $yktime = "$ykhc:00";

            //SEMARANG
            $smchc = $h+11;
            $smctime = "$smchc:00";
        ?>
    </head>
    <body class="page" id="page"><center><div class="page-c" id="page-c">
        <div class="c" id="c">
            <div class="c1" id="c1">
                <div class="c1-c c1-c-left" id="c1-c c1-c-left">
                    <h1 class="c1-c-text" id="c1-c-text">Madiun</h1>
                </div>
                <div class="c1-c c1-c-right" id="c1-c c1-c-right">
                    <button class="c1-c-button" id="c1-c-button" onclick="berandaPage()">KEMBALI</button>
                </div>
            </div>
            <div class="c2" id="c2">
                <div class="c2-1" id="c2-1">
                    <div class="c2-1-banner" id="c2-1-banner"></div>
                </div>
                <div class="c2-2" id="c2-2">
                    <div class="c2-2-post" id="c2-2-post" onclick="sbmncPage()">
                        <div class="c2-2-post-c" id="c2-2-post-c">
                            <p class="c2-2-post-c-text" id="c2-2-post-c-text"><strong>Surabaya (SB)</strong> ke <strong>Madiun (MN)</strong></p>
                        </div>
                        <div class="c2-2-post-c" id="c2-2-post-c">
                            <p class="c2-2-post-c-time" id="c2-2-post-c-time"><strong><?php echo "$date"; ?></strong><br><?php echo "$sbtime";?> WIB</p>
                        </div>
                        <div class="c2-2-post-c" id="c2-2-post-c">
                            <p class="c2-2-post-c-price" id="c2-2-post-c-price"><strong>Ekonomi (C)</strong><br>Rp. 88,000</p>
                        </div>
                    </div>
                    <div class="c2-2-post" id="c2-2-post" onclick="jakkmncPage()">
                        <div class="c2-2-post-c" id="c2-2-post-c">
                            <p class="c2-2-post-c-text" id="c2-2-post-c-text"><strong>Jakarta (JAKK)</strong> ke <strong>Madiun (MN)</strong></p>
                        </div>
                        <div class="c2-2-post-c" id="c2-2-post-c">
                            <p class="c2-2-post-c-time" id="c2-2-post-c-time"><strong><?php echo "$date"; ?></strong><br><?php echo "$jakktime";?> WIB</p>
                        </div>
                        <div class="c2-2-post-c" id="c2-2-post-c">
                            <p class="c2-2-post-c-price" id="c2-2-post-c-price"><strong>Ekonomi (C)</strong><br>Rp. 455,000</p>
                        </div>
                    </div>
                    <div class="c2-2-post" id="c2-2-post" onclick="ykmncPage()">
                        <div class="c2-2-post-c" id="c2-2-post-c">
                            <p class="c2-2-post-c-text" id="c2-2-post-c-text"><strong>Yogyakarta (YK)</strong> ke <strong>Madiun (MN)</strong></p>
                        </div>
                        <div class="c2-2-post-c" id="c2-2-post-c">
                            <p class="c2-2-post-c-time" id="c2-2-post-c-time"><strong><?php echo "$date"; ?></strong><br><?php echo "$yktime";?> WIB</p>
                        </div>
                        <div class="c2-2-post-c" id="c2-2-post-c">
                            <p class="c2-2-post-c-price" id="c2-2-post-c-price"><strong>Ekonomi (C)</strong><br>Rp. 130,000</p>
                        </div>
                    </div>
                    <div class="c2-2-post" id="c2-2-post" onclick="ykmnpPage()">
                        <div class="c2-2-post-c" id="c2-2-post-c">
                            <p class="c2-2-post-c-text" id="c2-2-post-c-text"><strong>Yogyakarta (YK)</strong> ke <strong>Madiun (MN)</strong></p>
                        </div>
                        <div class="c2-2-post-c" id="c2-2-post-c">
                            <p class="c2-2-post-c-time" id="c2-2-post-c-time"><strong><?php echo "$date"; ?></strong><br><?php echo "$yktime";?> WIB</p>
                        </div>
                        <div class="c2-2-post-c" id="c2-2-post-c">
                            <p class="c2-2-post-c-price" id="c2-2-post-c-price"><strong>Ekonomi (P)</strong><br>Rp. 120,000</p>
                        </div>
                    </div>
                    <div class="c2-2-post" id="c2-2-post" onclick="ykmnaaPage()">
                        <div class="c2-2-post-c" id="c2-2-post-c">
                            <p class="c2-2-post-c-text" id="c2-2-post-c-text"><strong>Yogyakarta (YK)</strong> ke <strong>Madiun (MN)</strong></p>
                        </div>
                        <div class="c2-2-post-c" id="c2-2-post-c">
                            <p class="c2-2-post-c-time" id="c2-2-post-c-time"><strong><?php echo "$date"; ?></strong><br><?php echo "$yktime";?> WIB</p>
                        </div>
                        <div class="c2-2-post-c" id="c2-2-post-c">
                            <p class="c2-2-post-c-price" id="c2-2-post-c-price"><strong>Eksekutif (AA)</strong><br>Rp. 180,000</p>
                        </div>
                    </div>
                    <div class="c2-2-post" id="c2-2-post" onclick="smcmncPage()">
                        <div class="c2-2-post-c" id="c2-2-post-c">
                            <p class="c2-2-post-c-text" id="c2-2-post-c-text"><strong>Semarang (SMC)</strong> ke <strong>Madiun (MN)</strong></p>
                        </div>
                        <div class="c2-2-post-c" id="c2-2-post-c">
                            <p class="c2-2-post-c-time" id="c2-2-post-c-time"><strong><?php echo "$date"; ?></strong><br><?php echo "$smctime";?> WIB</p>
                        </div>
                        <div class="c2-2-post-c" id="c2-2-post-c">
                            <p class="c2-2-post-c-price" id="c2-2-post-c-price"><strong>Ekonomi (C)</strong><br>Rp. 280,000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></center></body>
</html>