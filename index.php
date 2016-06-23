<!DOCTYPE html>
<html lang="de">

<head>
    <title>Web Site Title</title>
    <?php include 'headcode.php';?>
</head>

<body ng-app="app" >
    <?php include 'sup.php'; ?>


    <div class="franse bg-fade weiss fullscreen" ng-controller="VideosCtrl">

        <div class="row">
            <div class="col-sm-6">
                <video autoplay loop id="bgvid">
             <source src="images/bg-video/notte_4.mp4" type="video/mp4">
         </video>
                <h1>BENZINGER LIBRARY</h1>
                <p> The main purpose of this web, is keep in a unique place, all the scripts, technologies and graphics collections for make easy the understanding at moment of start a project. <br>Here can find every elements and code for a correct web design,
                    under the Benzinger directives.<br> </p>
                        
                    
            </div>
            <div class="col-sm-6">

            </div>
        </div>
        <div class="row">
            <div class="col-sm-6"><a href="struktur.php"><button type="button" class="btn btn-primary btn-lg">Go to Structure</button></a></div>
            <div class="col-sm-6"></div>
        </div>
    </div>
    <div class="franse bg-weiss">
        <div class="row">
            <div class="col-sm-6">

            </div>
            <div class="col-sm-6">
            </div>
        </div>
    </div>
    <?php include 'footer.php';?>
    <?php include 'footercode.php';?>
</body>

</html>