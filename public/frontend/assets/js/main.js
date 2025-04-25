/************************************
 * Template Name:  chatizo
 * Version:  1.0.0
 * Author: SRBThemes
 ***********************************/

"use strict";

//tooltips
const tooltipTriggerList = document.querySelectorAll(
  '[data-bs-toggle="tooltip"]'
);

const tooltipList = [...tooltipTriggerList].map(
  (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
);  

// Rtl layout
var dataRTL = document.getElementById("switchRtl");
var html = document.documentElement;
var rtlCheckbox = document.getElementById("switchRtl");

// Function to update layout based on sessionStorage
function updateLayoutFromSession() {
  var dir = sessionStorage.getItem("dir");
  if (dir) {
    html.setAttribute("dir", dir);
    rtlCheckbox.checked = dir === "rtl";
    // Load appropriate RTL CSS files
    if (dir === "rtl") {
      loadRTLStyles();
    } else {
      loadLTRStyles();
    }
  }
}

// Load RTL CSS files
function loadRTLStyles() {
  document
    .getElementById("bootstrap")
    .setAttribute("href", "assets/css/bootstrap-rtl.min.css");
  document
    .getElementById("bootstrap-icons")
    .setAttribute("href", "assets/css/bootstrap-icons-rtl.min.css");
  document
    .getElementById("main-css")
    .setAttribute("href", "assets/css/main-rtl.min.css");
}

// Load LTR CSS files
function loadLTRStyles() {
  document
    .getElementById("bootstrap")
    .setAttribute("href", "assets/css/bootstrap.min.css");
  document
    .getElementById("bootstrap-icons")
    .setAttribute("href", "assets/css/bootstrap-icons.min.css");
  document
    .getElementById("main-css")
    .setAttribute("href", "assets/css/main.min.css");
}

// Event listener for RTL layout switch
dataRTL.addEventListener("click", () => {
  var dir = html.getAttribute("dir") === "ltr" ? "rtl" : "ltr";
  html.setAttribute("dir", dir);
  rtlCheckbox.checked = dir === "rtl";
  sessionStorage.setItem("dir", dir);
  // Load appropriate styles based on layout direction
  if (dir === "rtl") {
    loadRTLStyles();
  } else {
    loadLTRStyles();
  }
});

// Function to update settings from sessionStorage
function updateSettingsFromSession(key, radioButtons) {
  var value = sessionStorage.getItem(key);
  if (value) {
    radioButtons.forEach(function (radioButton) {
      if (radioButton.value === value) {
        radioButton.checked = true;
      }
    });

    setAttribute(key, value);
  }
}

// Customize Theme Color
var themeRadioButtons = document.querySelectorAll(".themecolorBtn.btn-check");

themeRadioButtons.forEach(function (themeRadioButton) {
  themeRadioButton.addEventListener("click", function () {
    var colorName = themeRadioButton.value;
    setAttribute("data-bs-color", colorName);
  });
});

// Customize Chat BG Color
var chatRadioButtons = document.querySelectorAll(".chatBgBtn.btn-check");
chatRadioButtons.forEach(function (chatRadioButton) {
  chatRadioButton.addEventListener("click", function () {
    var colorName = chatRadioButton.value;
    setAttribute("data-chat-color", colorName);
  });
});

// Customize Chat Image
var imageRadioButtons = document.querySelectorAll(".chatImgBtn.btn-check");
imageRadioButtons.forEach(function (imageRadioButton) {
  imageRadioButton.addEventListener("click", function () {
    var chatImage = imageRadioButton.value;
    setAttribute("data-chat-image", chatImage);
  });
});

function setAttribute(attr, value) {
  html.setAttribute(attr, value);
  sessionStorage.setItem(attr, value);
}

function initFunc() {
  updateSettingsFromSession("data-chat-image", imageRadioButtons);
  updateSettingsFromSession("data-chat-color", chatRadioButtons);
  updateSettingsFromSession("data-bs-color", themeRadioButtons);
  updateLayoutFromSession();
}

initFunc();

const ENV = {
    APP_NAME: 'CHATIZO',
    AUTHOR: 'SRBThemes'
};


// copy clipboard
function copyToClipboard(message) {
  const messageContent = message;
  navigator.clipboard.writeText(messageContent)
            .then(() => {
                console.log('Message copied to clipboard');
            })
            .catch(err => {
                console.error('Could not copy text: ', err);
            });
}





// Share Modal

function shareItem() {
  if (navigator.share) {
      navigator.share({
          title: 'Shared Title',
          text: 'Shared Description',
          url: 'https://example.com'
      })
      .then(() => console.log('Shared successfully'))
      .catch((error) => console.error('Error sharing:', error));
  } else {
      alert('Web Share API not supported in your browser.');
  }
}


Fancybox.bind('[data-fancybox="gallery"]', {
  buttons: [
    "zoom",
    "share",
    "slideShow",
    "fullScreen",
    "download", // Include the download button
    "thumbs",
    "close"
  ],
});


