<?php
// Form logic
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

if ($selectedMode === 'game') {
    include 'templates/game_header.php';
    include 'pages/game.php';
} else {
    include 'templates/header.php';
    include 'pages/normal.php';
}

// Travel State?
// <!-- Video Music -->
// <video autoplay muted loop playsinline class="background">
//       <source src="assets/videos/background.mp4" type="video/mp4" />
//       <img
//         src="assets/images/background.png"
//         alt="background_img"
//         class="background"
//       />
//     </video>

//     <!-- Background Music -->
//   <audio
//     id="background-music"
//     src="assets/sounds/musics/ES_Fractals - Of Water.mp3"
//     loop
//   ></audio>


// Foo(fight)ter
include 'templates/footer.php';
