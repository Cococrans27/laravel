// HOVER NAVBAR==================================
const sticky1 = document.querySelector("header");
window.addEventListener("scroll", function () {
  sticky1.classList.toggle("sticky", window.scrollY > 100);
});
// MENU BUTTON SCRIPT============================
let menu = document.querySelector(".bar-button");
let navlist = document.querySelector(".navlist");

menu.onclick = () => {
  menu.classList.toggle("barOpen");
  navlist.classList.toggle("open");
};
window.onscroll = () => {
  menu.classList.remove("barOpen");
  navlist.classList.remove("open");
};

// ACTIVE LINK NAVBAR============================
const sections = document.querySelectorAll("section[id]");

window.addEventListener("scroll", navHighlighter);
function navHighlighter() {
  let scrollY = window.pageYOffset;
  sections.forEach((current) => {
    const sectionHeight = current.offsetHeight;
    const sectionTop = current.offsetTop - 50;
    sectionId = current.getAttribute("id");

    if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
      document.querySelector(".navlist a[href*=" + sectionId + "]").classList.add("active");
    } else {
      document.querySelector(".navlist a[href*=" + sectionId + "]").classList.remove("active");
    }
  });
}

window.onload = function () {
  var alertOverlay = document.getElementById("alert-overlay");
  alertOverlay.classList.add("show");
};

function closeAlert() {
  var alertOverlay = document.getElementById("alert-overlay");
  alertOverlay.classList.remove("show");
}
// NIGHT LIGHT BUTTON =========================================
const themeMode = document.getElementById("light-dark-btn");
themeMode.onclick = function () {
  document.body.classList.toggle("dark-theme");
  if (document.body.classList.contains("dark-theme")) {
    themeMode.classList.toggle("bxs-sun");
    themeMode.classList.remove("bxs-moon");
  } else {
    themeMode.classList.toggle("bxs-moon");
    themeMode.classList.remove("bxs-sun");
  }
};
// TEXT TYPING ANIMATION=======================================
var typingEffect = new Typed(".multiText", {
  strings: ["Junior Penetration Tester", "Bug Bounty Hunter"],
  loop: true,
  typeSpeed: 50,
  backSpeed: 40,
  cursorChar: "|",
});

// PORTFOLIO ACTIVE============================================
let imageList = document.getElementById("image-list");
let fotoButton = document.getElementById("btn-foto");
let sertifikatButton = document.getElementById("btn-sertifikat");
let projekButton = document.getElementById("btn-projek");
let semuaButton = document.getElementById("btn-semua");

function showImagesByCategory(category) {
  let images = imageList.getElementsByTagName("img");
  for (let i = 0; i < images.length; i++) {
    if (images[i].getAttribute("data-kategori") === category || category === "semua") {
      images[i].classList.add("active");
    } else {
      images[i].classList.remove("active");
    }
  }

  // set active button
  let buttons = document.getElementsByClassName("btn-list");
  for (let i = 0; i < buttons.length; i++) {
    if (buttons[i].getAttribute("id") === "btn-" + category) {
      buttons[i].classList.add("active");
    } else {
      buttons[i].classList.remove("active");
    }
  }
}

fotoButton.addEventListener("click", function () {
  showImagesByCategory("foto");
});

sertifikatButton.addEventListener("click", function () {
  showImagesByCategory("sertifikat");
});
projekButton.addEventListener("click", function () {
  showImagesByCategory("projek");
});

semuaButton.addEventListener("click", function () {
  showImagesByCategory("semua");
  // set active button
  let buttons = document.getElementsByClassName("btn-list");
  for (let i = 0; i < buttons.length; i++) {
    buttons[i].classList.remove("active");
  }
  semuaButton.classList.add("active");
});

// show all images by default
showImagesByCategory("semua");
semuaButton.classList.add("active");

// BACK TO TOP======================================
const backToTopBtn = document.querySelector("#back-to-top-btn");

window.addEventListener("scroll", () => {
  if (window.pageYOffset > 300) {
    backToTopBtn.classList.add("show");
  } else {
    backToTopBtn.classList.remove("show");
  }
});

backToTopBtn.addEventListener("click", (event) => {
  event.preventDefault();
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});
