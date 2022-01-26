<link rel="shortcut icon" href="smk.ico">
<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">

    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="">Sistem Informasi Pendataan Siswa SMK Swasta Amal Bakti</a>
        </div>
        <div id="navbarSupportedContent" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class=""><a href="?page=utama">Home</a></li>

                <?php if(isset($_SESSION['level']) && $_SESSION['level']==1) { ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Master Data <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=datasiswa&actions=tampil">Data Siswa</a></li>
                        <li><a href="?page=pendataan&actions=tampil">Pendataan</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reports <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=datasiswa&actions=report">Laporan Data Siswa</a></li>
						            <li><a href="?page=pendataan&actions=report">Laporan Pendataan</a></li>
                    </ul>
                </li>
                <li><a href="?page=user&actions=tampil">User</a></li>


                <?php } ?>

                  <?php if(isset($_SESSION['level']) && $_SESSION['level']==2) { ?>
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Data Siswa<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=datauntuk&actions=tampil">Data Siswa</a></li>
                                    <li><a href="?page=pendataanuntuk&actions=siswa">Pendataan</a></li>
                    </ul>
                </li>

                <?php } ?>


                <li><a href="?page=about&actions=tampil">About</a></li>
                <li><a href="?page=kontak&actions=tampil">Contact</a></li>
            

                    <?php if (isset($_SESSION['username'])) { ?>
                    <li><a href="logout.php">Logout</a></li>
                <?php } ?>

            </ul>
        </div>
    </div>
</nav>
