// script.js

// Selecting necessary elements
const menuItems = document.querySelectorAll(".menu-item");
const toggleSoundButton = document.getElementById("toggle-sound");
const soundOff = document.getElementById("sound-off");
const soundOn = document.getElementById("sound-on");
const soundOffHover = document.getElementById("sound-off-hover");
const soundOnHover = document.getElementById("sound-on-hover");
const backgroundMusic = document.getElementById("background-music");
const navbar = document.querySelector("nav");
const isDesktop = window.innerWidth > 768;
const tabs = document.querySelectorAll('input[name="tabs"]');
const initialTab = document.querySelector('input[name="tabs"]:checked');
const soundLink = document.getElementById("sound-dependent-link");

// Function to check if the music is playing
function isMusicPlaying(audio) {
  return !audio.paused;
}

// Function to update sound icons and the visibility of the sound-dependent link based on state
function updateSoundIcons(isPlaying) {
  if (isPlaying) {
    soundOn.classList.remove("hidden");
    soundOff.classList.add("hidden");
    soundOnHover.classList.remove("hidden");
    soundOffHover.classList.add("hidden");
    
    // Afficher le lien dépendant du son
    if (soundLink) {
      soundLink.classList.remove("hidden");
      soundLink.classList.add("visible");
    }
  } else {
    soundOn.classList.add("hidden");
    soundOff.classList.remove("hidden");
    soundOnHover.classList.add("hidden");
    soundOffHover.classList.remove("hidden");
    
    // Masquer le lien dépendant du son
    if (soundLink) {
      soundLink.classList.remove("visible");
      soundLink.classList.add("hidden");
    }
  }
}

// Event listener for DOM content loaded to animate menu items (only on desktop)
document.addEventListener("DOMContentLoaded", () => {
  const menuItems = document.querySelectorAll("label.menu-item");

  // Only if we are on desktop, too messy in mobile
  if (isDesktop) {
    menuItems.forEach(function (item) {
      let words = item.getAttribute("data-mots").split(",");
      let index = 0;
      let intervalId;
      let initialText = item.textContent;

      // Function to change text on hover
      function changeText() {
        item.style.opacity = 0;
        setTimeout(function () {
          item.textContent = words[index];
          item.style.opacity = 1;
          index = (index + 1) % words.length;
        }, 300);
      }

      // Start changing text on mouse enter
      item.addEventListener("mouseenter", function () {
        intervalId = setInterval(changeText, 1100);
      });

      // Reset text on mouse leave
      item.addEventListener("mouseleave", function () {
        clearInterval(intervalId);
        index = 0;
        item.textContent = initialText;
        item.style.opacity = 1;
      });
    });
  }
});

// Event listener for the sound toggle button
if (
  toggleSoundButton &&
  backgroundMusic &&
  soundOff &&
  soundOn &&
  soundOffHover &&
  soundOnHover
) {
  toggleSoundButton.addEventListener("click", () => {
    if (isMusicPlaying(backgroundMusic)) {
      backgroundMusic.pause();
      updateSoundIcons(false);
      localStorage.setItem("soundEnabled", "false");
      console.log("Background music disabled");
    } else {
      backgroundMusic
        .play()
        .then(() => {
          updateSoundIcons(true);
          localStorage.setItem("soundEnabled", "true");
          console.log("Background music enabled");
        })
        .catch((error) => {
          console.error("Error while playing background music:", error);
        });
    }
  });
} else {
  console.error("One or more required elements for sound control are missing.");
}

// Initialize the sound button state based on localStorage
document.addEventListener("DOMContentLoaded", () => {
  const isSoundEnabled = localStorage.getItem("soundEnabled") === "true";

  if (isSoundEnabled) {
    backgroundMusic
      .play()
      .then(() => {
        updateSoundIcons(true);
        console.log("Background music enabled");
      })
      .catch((error) => {
        console.error("Error while playing background music:", error);
      });
  } else {
    backgroundMusic.pause();
    updateSoundIcons(false);
    console.log("Background music disabled");
  }
});
