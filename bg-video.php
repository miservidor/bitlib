<!DOCTYPE html>
<html lang="de">

<head>
    <title>Web Site Title</title>
    <?php include 'headcode.php';?>
</head>

<body class="main" ng-app="app">
    <?php include 'sup.php'; ?>

    <div class="franse weiss bg-fade" ng-controller="VideosCtrl">
        <video autoplay loop id="bgvid">
             <source src="images/bg-video/rally.mp4" type="video/mp4">
         </video>
        <div class="row">
            <div class="col-sm-6">
                <h1>bg-video Html5</h1>
                <xmp>
                    <video autoplay loop id="bgvid">
             <source data-ng-src="images/bg-video/{{ video }}" type="video/mp4">
         </video>
                </xmp>
            </div>
            <div class="col-sm-6">
                <h1>De finibus bonorum et malorum</h1> Lorem ipsum dolor sit amet, consectetaur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis saute irure dolor in reprehenderit.{{video}}
                <label for="Videos_Disponibles"> Videos Disponibles: </label><br>
                <select name="video" ng-model="video">
      <option value="notte_2.mp4">notte_2.mp4</option>
      <option value="notte_4.mp4">notte_4.mp4</option>
      <option value="giorno_1.mp4">giorno_1.mp4</option>
      <option value="giorno_3.mp4">giorno_3.mp4</option>
      <option value="giorno_5.mp4">giorno_5.mp4</option>
    </select>
            </div>
        </div>
    </div>


    <?php include 'footer.php';?>
    <?php include 'footercode.php';?>
</body>

</html>