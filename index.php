<?php

session_start();

// Travel Logic
// List of video background available
$videos = [
    '1.mp4',
    '2.mp4',
    '3.mp4',
    '4.mp4',
    '5.mp4',
    '6.mp4'
];

// List of backup images available
$images = [
    '1.png',
    '2.png',
    '3.png',
    '4.png',
    '5.png',
    '6.png'
];

// List of audio files available
$audios = [
    'ES_Fractals - Of Water.mp3',
    'ES_Kepler\'s Hope - Year of the Deer.mp3',
    'ES_Fractals - Of Water.mp3',
    'ES_Fractals - Of Water.mp3',
    'ES_Fractals - Of Water.mp3',
    'ES_Fractals - Of Water.mp3'
];

if (!isset($_SESSION['media_index'])) {
    $_SESSION['media_index'] = 0;
}

// Change Media/Audio after each click on 'travel'
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'next_media') {
    $_SESSION['media_index'] = ($_SESSION['media_index'] + 1) % count($videos);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

$currentVideo = $videos[$_SESSION['media_index']];
$currentImage = $images[$_SESSION['media_index']];
$currentAudio = $audios[$_SESSION['media_index']];


// Form logic for mode selection
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['mode'])) {
    $mode = $_POST['mode'];
    // Cookie
    setcookie('selectedMode', $mode, time() + (900), "/");
    // Redirect
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Take the selected mode
$selectedMode = isset($_COOKIE['selectedMode']) ? $_COOKIE['selectedMode'] : null;

// Game or Normal ?
if (!$selectedMode) {
    include 'templates/modal.php';
}

//Header
if ($selectedMode === 'game') {
    include 'templates/game_header.php';
} else {
    include 'templates/header.php';
}

?> 

<!-- Background Video-->
<video autoplay muted loop playsinline class="background">
      <source src="assets/videos/background/<?php echo htmlspecialchars($currentVideo); ?>" type="video/mp4" />
      <img
        src="assets/images/background/<?php echo htmlspecialchars($currentImage); ?>"
        alt="background_img"
        class="background"
      />
  </video>
  
  <!-- Background Music -->
  <audio
    id="background-music"
    src="assets/sounds/musics/<?php echo htmlspecialchars($currentAudio); ?>"
    loop
  ></audio>

<?php
// Content
if ($selectedMode === 'game') {
    include 'pages/game.php';
} else {
    include 'pages/normal.php';
}

// Foo(fight)ter
include 'templates/footer.php';

?>