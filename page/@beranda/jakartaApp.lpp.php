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
                background: url('../../assets/ivg/jakarta.jpg') no-repeat;
                background-size: 100%;
                background-position-y: 70%;
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
            
            function sbjakkcPage(){
                window.location = "@formulir/@jakarta/sbjakkc";
            }
            function mnjakkcPage(){
                window.location = "@formulir/@jakarta/mnjakkc";
            }
            function ykjakkcPage(){
                window.location = "@formulir/@jakarta/ykjakkc";
            }
            function ykjakkaacPage(){
                window.location = "@formulir/@jakarta/ykjakkaac";
            }
            function smcjakkcPage(){
                window.location = "@formulir/@jakarta/smcjakkc";
            }
            function smcjakkacPage(){
                window.location = "@formulir/@jakarta/smcjakkac";
            }
        </script>
        <?php
            date_default_timezone_set('Asia/Jakarta');
            $date = date("d M Y");
            $h = date("h");

            //SURABAYA
            $sbhc = $h+20;
            $sbtime = "$sbhc:00";

            //MADIUN
            $mnhc = $h+18;
            $mntime = "$mnhc:00";

            //YOGYAKARTA
            $ykhc = $h+16;
            $yktime = "$ykhc:00";

            //SEMARANG
            $smchc = $h+17;
            $smctime = "$smchc:00";
        ?>
    </head>
    <body class="page" id="page"><center><div class="page-c" id="page-c">
        <div class="c" id="c">
            <div class="c1" id="c1">
                <div class="c1-c c1-c-left" id="c1-c c1-c-left">
                    <h1 class="c1-c-text" id="c1-c-text">Jakarta</h1>
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
                    <div class="c2-2-post" id="c2-2-post" onclick="sbjakkcPage()">
                        <div class="c2-2-post-c" id="c2-2-post-c">
                            <p class="c2-2-post-c-text" id="c2-2-post-c-text"><strong>Surabaya (SB)</strong> ke <strong>Jakarta (JAKK)</strong></p>
                        </div>
                        <div class="c2-2-post-c" id="c2-2-post-c">
                            <p class="c2-2-post-c-time" id="c2-2-post-c-time"><strong><?php echo "$date"; ?></strong><br><?php echo "$sbtime";?> WIB</p>
                        </div>
                        <div class="c2-2-post-c" id="c2-2-post-c">
                            <p class="c2-2-post-c-price" id="c2-2-post-c-price"><strong>Ekonomi (C)</strong><br>Rp. 650,000</p>
                        </div>
                    </div>
                    <div class="c2-2-post" id="c2-2-post" onclick="mnjakkcPage()">
                        <div class="c2-2-post-c" id="c2-2-post-c">
                            <p class="c2-2-post-c-text" id="c2-2-post-c-text"><strong>Madiun (MN)</strong> ke <strong>Jakarta (JAKK)</strong></p>
                        </div>
                        <div class="c2-2-post-c" id="c2-2-post-c">
                            <p class="c2-2-post-c-time" id="c2-2-post-c-time"><strong><?php echo "$date"; ?></strong><br><?php echo "$mntime";?> WIB</p>
                        </div>
                        <div class="c2-2-post-c" id="c2-2-post-c">
                            <p class="c2-2-post-c-price" id="c2-2-post-c-price"><strong>Ekonomi (C)</strong><br>Rp. 455,000</p>
                        </div>
                    </div>
                    <div class="c2-2-post" id="c2-2-post" onclick="ykjakkcPage()">
                        <div class="c2-2-post-c" id="c2-2-post-c">
                            <p class="c2-2-post-c-text" id="c2-2-post-c-text"><strong>Yogyakarta (YK)</strong> ke <strong>Jakarta (JAKK)</strong></p>
                        </div>
                        <div class="c2-2-post-c" id="c2-2-post-c">
                            <p class="c2-2-post-c-time" id="c2-2-post-c-time"><strong><?php echo "$date"; ?></strong><br><?php echo "$yktime";?> WIB</p>
                        </div>
                        <div class="c2-2-post-c" id="c2-2-post-c">
                            <p class="c2-2-post-c-price" id="c2-2-post-c-price"><strong>Ekonomi (C)</strong><br>Rp. 295,000</p>
                        </div>
                    </div>
                    <div class="c2-2-post" id="c2-2-post" onclick="ykjakkaacPage()">
                        <div class="c2-2-post-c" id="c2-2-post-c">
                            <p class="c2-2-post-c-text" id="c2-2-post-c-text"><strong>Yogyakarta (YK)</strong> ke <strong>Jakarta (JAKK)</strong></p>
                        </div>
                        <div class="c2-2-post-c" id="c2-2-post-c">
                            <p class="c2-2-post-c-time" id="c2-2-post-c-time"><strong><?php echo "$date"; ?></strong><br><?php echo "$yktime";?> WIB</p>
                        </div>
                        <div class="c2-2-post-c" id="c2-2-post-c">
                            <p class="c2-2-post-c-price" id="c2-2-post-c-price"><strong>Eksekutif (AA) + Ekonomi (C)</strong><br>Rp. 600,000</p>
                        </div>
                    </div>
                    <div class="c2-2-post" id="c2-2-post" onclick="smcjakkcPage()">
                        <div class="c2-2-post-c" id="c2-2-post-c">
                            <p class="c2-2-post-c-text" id="c2-2-post-c-text"><strong>Semarang (SMC)</strong> ke <strong>Jakarta (JAKK)</strong></p>
                        </div>
                        <div class="c2-2-post-c" id="c2-2-post-c">
                            <p class="c2-2-post-c-time" id="c2-2-post-c-time"><strong><?php echo "$date"; ?></strong><br><?php echo "$smctime";?> WIB</p>
                        </div>
                        <div class="c2-2-post-c" id="c2-2-post-c">
                            <p class="c2-2-post-c-price" id="c2-2-post-c-price"><strong>Ekonomi (C)</strong><br>Rp. 340,000</p>
                        </div>
                    </div>
                    <div class="c2-2-post" id="c2-2-post" onclick="smcjakkacPage()">
                        <div class="c2-2-post-c" id="c2-2-post-c">
                            <p class="c2-2-post-c-text" id="c2-2-post-c-text"><strong>Semarang (SMC)</strong> ke <strong>Jakarta (JAKK)</strong></p>
                        </div>
                        <div class="c2-2-post-c" id="c2-2-post-c">
                            <p class="c2-2-post-c-time" id="c2-2-post-c-time"><strong><?php echo "$date"; ?></strong><br><?php echo "$smctime";?> WIB</p>
                        </div>
                        <div class="c2-2-post-c" id="c2-2-post-c">
                            <p class="c2-2-post-c-price" id="c2-2-post-c-price"><strong>Eksekutif (A) + Ekonomi (C)</strong><br>Rp. 400,000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></center></body>
</html>