<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"> </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="struktur.php">Structure</a></li>
                <!--li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Struktur <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="struktur.php">Site Structure</a></li>
                        <li><a href="#">Dependencies</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Php Strukture</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Sass Archivsstrukture </a></li>
                    </ul>
                </li-->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Elements <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="colors.php">Colors</a></li>
                        <li><a href="fonts.php">Fonts</a></li>
                        <li><a href="animated.php">Animation</a></li>
                        <li><a href="backgrounds.php">Backgrounds</a></li>
                        <li><a href="img-effects.php">Images / Album</a></li>
                        <li><a href="bg-video.php">Videos</a></li>
                        <li><a href="bg-map.php">Maps</a></li>
                        <li><a href="#">Forms</a></li>
                        <li><a href="#">Sound</a></li>
                    </ul>
                </li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><?php include 'version.php'; ?></a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>