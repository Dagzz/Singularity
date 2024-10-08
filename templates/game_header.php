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
      <label for="tab1">
      <img src="assets/icons/logo.png" alt="Logo" class="nav-logo" />
      </label>
      <!-- Menu items -->
      <div class="nav-items">
        <label
          for="tab1"
          class="menu-item"
          data-mots=".... --- -- ., •• ••• ••• ••••, 01001000 01001111,*Two hands forming a 45-degree angle*, Glicinia - Hedera, *Whistle*, Home, Hotel Oscar Mike Echo, Origin, Omphalos, आकाश, Anima Mundi, Alpha, Yggdrasil, Primum Mobile, Aleph, Singularity, Singularity, Singularity, Singularity, Singularity, Singularity"
        >
          <img
            src="assets/icons/menu/home-icon.svg"
            alt="Home"
            class="menu-icon"
          />
          <span class="menu-text">⠓⠕⠍⠑</span>
        </label>
        <label
          for="tab2"
          class="menu-item"
          data-mots=".--  ---  .-.  -.-, ••••• ••• ••••, 01010111 01001111 01010010 01001011, *Hand raised with index middle and ring fingers extended*, Quercus - Triticum - Helianthus, *Whistle*, Work, Whiskey Oscar Romeo Kilo, Poïésis, कर्म, Synthesis, Praxis, Manifestation, Artificium, Ex Nihilo, Labor, Creare, Forge, Inception, Materialization, Generation, Constructio, Create, Create, Create, Create"
        >
          <img
            src="assets/icons/menu/work-icon.svg"
            alt="Work"
            class="menu-icon"
          />
          <span class="menu-text">⠺⠕⠗⠅</span>
        </label>
        <label
          for="tab3"
          class="menu-item"
          data-mots=".-..  .  .-  .-.  -., ••• • • •••••, 01001100 01000101 01000001 01010010 01001110, *Place your non-dominant hand on your forehead*, Iris - Salvia - Myosotis, *Whistle*, Learn, Lima Echo Alpha Romeo November, Studium, Formare, Analusis, ἀγωγή, Recercare, νοῦς, Discover, Discover, Discover, Discover, Discover"
        >
          <img
            src="assets/icons/menu/learn-icon.svg"
            alt="Learn"
            class="menu-icon"
          />
          <span class="menu-text">⠇⠑⠁⠗⠝</span>
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
