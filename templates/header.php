<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Singularity</title>
    <link rel="stylesheet" href="style.css" />

    <!-- Favicon -->
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="assets/icons/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="assets/icons/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="assets/icons/favicon-16x16.png"
    />
    <link rel="manifest" href="assets/icons/site.webmanifest" />
    <link
      rel="mask-icon"
      href="assets/icons/safari-pinned-tab.svg"
      color="#000000"
    />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta
      name="msapplication-config"
      content="assets/icons/browserconfig.xml"
    />
    <meta name="theme-color" content="#000000" />

    <link
      rel="preload"
      href="assets/fonts/Rajdhani/Rajdhani-Light.ttf"
      as="font"
      type="font/ttf"
      crossorigin
    />
  </head>
  <body>
    <nav>
      <!-- Logo -->
      <img src="assets/icons/logo.png" alt="Logo" class="nav-logo" />

      <!-- Menu items -->
      <div class="nav-items">
        <label
          for="tab1"
          class="menu-item"
         >
          <img
            src="assets/icons/menu/home.svg"
            alt="Home"
            class="menu-icon"
          />
          <span class="menu-text">HOME</span>
        </label>
        <label
          for="tab2"
          class="menu-item"
          >
          <img
            src="assets/icons/menu/work.svg"
            alt="Work"
            class="menu-icon"
          />
          <span class="menu-text">WORK</span>
        </label>
        <label
          for="tab3"
          class="menu-item"
          >
          <img
            src="assets/icons/menu/learn.svg"
            alt="Learn"
            class="menu-icon"
          />
          <span class="menu-text">LEARN</span>
        </label>
      </div>
      <!-- Toggle sound button -->
      <button
        id="toggle-sound"
        class="toggle-sound-button"
        aria-label="Sound control"
      >
        <img
          id="sound-off"
          src="assets/icons/sound_button/sound-off.svg"
          alt="Sound off"
          class="sound-icon"
        />
        <img
          id="sound-on"
          src="assets/icons/sound_button/sound-on.svg"
          alt="Sound on"
          class="sound-icon hidden"
        />
        <img
          id="sound-off-hover"
          src="assets/icons/sound_button/sound-off-hover.svg"
          alt="Sound off - Hover"
          class="sound-icon hover-icon hidden"
        />
        <img
          id="sound-on-hover"
          src="assets/icons/sound_button/sound-on-hover.svg"
          alt="Sound on - Hover"
          class="sound-icon hover-icon hidden"
        />
      </button>
    </nav>

    <input type="radio" name="tabs" id="tab1" checked />
    <input type="radio" name="tabs" id="tab2" />
    <input type="radio" name="tabs" id="tab3" />
    <input type="radio" name="tabs" id="tab4" />
    <input type="radio" name="tabs" id="tab5" />
    <input type="radio" name="tabs" id="tab6" />
    <div id="contenu">
