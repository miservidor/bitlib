<!DOCTYPE html>
<html lang="de">

<head>
    <title>Web Site Title</title>
    <?php include 'headcode.php';?>
</head>

<body class="main" ng-app="app">
    <?php include 'sup.php'; ?>

<div id="muteYouTubeVideoPlayer"></div>
 
<script async src="https://www.youtube.com/iframe_api"></script>
<script>
 function onYouTubeIframeAPIReady() {
  var player;
  player = new YT.Player('muteYouTubeVideoPlayer', {
    videoId: '3Ln_F-LTsy8', // YouTube Video ID
    width: 1280,               // Player width (in px)
    height: 720,              // Player height (in px)
    playerVars: {
      autoplay: 1,        // Auto-play the video on load
      controls: 0,        // Show pause/play buttons in player
      showinfo: 0,        // Hide the video title
      modestbranding: 1,  // Hide the Youtube Logo
      loop: 1,            // Run the video in a loop
      fs: 0,              // Hide the full screen button
      cc_load_policty: 0, // Hide closed captions
      iv_load_policy: 3,  // Hide the Video Annotations
      autohide: 1         // Hide video controls when playing
    },
    events: {
      onReady: function(e) {
        e.target.mute();
      }
    }
  });
 }
 
 // Written by @labnol 
</script>

    <?php include 'footer.php';?>
    <?php include 'footercode.php';?>
</body>

</html>