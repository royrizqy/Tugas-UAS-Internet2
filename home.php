<?php

@session_start();

include "koneksi.php";

if (@$_SESSION['admin'] || @$_SESSION['accounting']) {
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/bootstrap-datetimepicker.min.css">

    </head>

    <body>
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown active">
                            <a href="index.php" class="dropdown" data-toggle="dropdown">Manajemen Keuangan</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jurnal <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="jurnalpenerimaan.php">Jurnal Penerimaan Kas</a></li>
                                <li><a href="jurnalpengeluaran.php">Jurnal Pengeluaran Kas</a></li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="jurnalUmum.php" class="dropdown-toggle">Jurnal Umum </a>
                        </li>
                        <li class="">
                            <a href="logout.php" class="dropdown-toggle">Keluar </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="panel panel-default" style="padding-top: 100px">
            <div class="panel-heading">
                <h2>
                    <marquee>Selamat Datang
                </h2>
            </div>

        </div>
        <script type="text/javascript" src="./jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
        <script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
    </body>

    </html>
<?php
} else {
    header("location:index.php");
}
?>