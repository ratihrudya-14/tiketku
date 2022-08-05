<html>
    <head>
        <title>TiketKu</title>
        <meta name="description" content="Pembelian tiket secara online">
        <meta name="viewport" content="width=device=width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
        <meta charset="utf-8">
        
        <link rel="shortcut icon" type="image/png" href="../../../../assets/ivg/shortcuticon.png">
        <link rel="stylesheet" type="text/css" href="../../../../engine/web.css">
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
                margin-top: 1em;
            }
            .page .page-c .c .c2 .c2-form {
                background-color: #fff;
                box-shadow: 0px 8px 8px #aaa;
                width: 50%;
                border-radius: 2px;
                padding: 1em;
            }
            @media screen and (max-width: 768px){
                .page .page-c .c .c2 .c2-form {
                    width: 75%;
                }
            }
            @media screen and (max-width: 425px){
                .page .page-c .c .c2 .c2-form {
                    width: 90%;
                }
            }
            .page .page-c .c .c2 .c2-form .c2-form-input {
                background-color: #ddd;
                width: 95%;
                height: 45px;
                margin: 1em 0em;
                border-radius: 2px;
            }
            .page .page-c .c .c2 .c2-form .c2-form-input .c2-form-input-c {
                background: none;
                font-size: 15px;
                color: #000;
                width: 90%;
                height: 100%;
            }
            .page .page-c .c .c2 .c2-form .c2-form-button {
                background-color: #000;
                font-size: 15px;
                color: #fff;
                width: 95%;
                height: 40px;
                border-radius: 2px;
                margin-top: 1em;
            }
        </style>
        <script type="text/javascript" src="../../../../engine/web.js"></script>
        <script type="text/javascript">
            function madiunPage(){
                window.location = "../../madiun";
            }
        </script>
        <?php
            include "../../../../engine/config.php";

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $name = $_POST['name'];
                $nik = $_POST['nik'];
                $region = $_POST['region'];
                $phonenumber = $_POST['phonenumber'];
                $email = $_POST['email'];
                $ticket = $_POST['ticket'];

                $data = mysqli_query($conn, "SELECT * FROM ticket WHERE name='$name' && nik='$nik' && region='$region' && phonenumber='$phonenumber' && email='$email' && ticket='$ticket'");
                $check = mysqli_num_rows($data);
                if($check > 0){
                    header("Location: ");
                } else {
                    mysqli_query($conn, "INSERT INTO ticket VALUES('', '$name', '$nik', '$region', '$phonenumber','$email', '$ticket')");
                    header("Location: ../../@pembayaran/@madiun/jakkmnc");
                }
            }
        ?>
    </head>
    <body class="page" id="page"><center><div class="page-c" id="page-c">
        <div class="c" id="c">
            <div class="c1" id="c1">
                <div class="c1-c c1-c-left" id="c1-c c1-c-left">
                    <h1 class="c1-c-text" id="c1-c-text">Madiun</h1>
                </div>
                <div class="c1-c c1-c-right" id="c1-c c1-c-right">
                    <button class="c1-c-button" id="c1-c-button" onclick="madiunPage()">KEMBALI</button>
                </div>
            </div>
            <div class="c2" id="c2">
                <div class="c2-form" id="c2-form">
                    <form action="" method="post">
                        <div class="c2-form-input" id="c2-form-input">
                            <input class="c2-form-input-c" id="c2-form-input-c" type="text" placeholder="Nama Lengkap" name="name" autofocus autocomplete="off" required>
                        </div>
                        <div class="c2-form-input" id="c2-form-input">
                            <input class="c2-form-input-c" id="c2-form-input-c" type="number" placeholder="NIK" name="nik" autofocus autocomplete="off" required>
                        </div>
                        <div class="c2-form-input" id="c2-form-input">
                            <input class="c2-form-input-c" id="c2-form-input-c" type="text" placeholder="Asal" name="region" autofocus autocomplete="off" required>
                        </div>
                        <div class="c2-form-input" id="c2-form-input">
                            <input class="c2-form-input-c" id="c2-form-input-c" type="number" placeholder="Nomor Telepon" name="phonenumber" autofocus autocomplete="off" required>
                        </div>
                        <div class="c2-form-input" id="c2-form-input">
                            <input class="c2-form-input-c" id="c2-form-input-c" type="email" placeholder="Alamat Surel" name="email" autofocus autocomplete="off" required>
                        </div>
                        <div class="c2-form-input" id="c2-form-input">
                            <input class="c2-form-input-c" id="c2-form-input-c" type="text" placeholder="..." value="MNJAKKC" readonly name="ticket" autofocus autocomplete="off" required>
                        </div>
                        <button class="c2-form-button" id="c2-form-button" type="submit" name="submit">Lanjut</button>
                    </form>
                </div>
            </div>
        </div>
    </div></center></body>
</html>