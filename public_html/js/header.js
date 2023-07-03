const drops = document.querySelectorAll(".dropdown");

const dropList = document.querySelectorAll(
  ".dropdown-menu.profile-notification"
);
const dropMenuUser = document.querySelector(
  ".dropdown-menu.dropdown-menu-right.profile-notification"
);
const dropMenuNotification = document.querySelector(
  ".dropdown-menu.dropdown-menu-right.notification"
);

function dropDownList(evt) {
  if (evt.target === drops[0] || drops[0].contains(evt.target)) {
    dropList[0].classList.add("show");
    return;
  }
  dropList[0].classList.remove("show");
}

function dropDownListMega(evt) {
  if (evt.target === drops[1] || drops[1].contains(evt.target)) {
    dropList[1].classList.add("show");
    return;
  }
  dropList[1].classList.remove("show");
}

function dropDownNotification(evt) {
  if (evt.target === drops[2] || drops[2].contains(evt.target)) {
    dropMenuNotification.classList.add("show");
    return;
  }
  dropMenuNotification.classList.remove("show");
}

function dropDownUser(evt) {
  if (evt.target === drops[3] || drops[3].contains(evt.target)) {
    dropMenuUser.classList.add("show");
    return;
  }
  dropMenuUser.classList.remove("show");
}
document.addEventListener("click", dropDownList);
document.addEventListener("click", dropDownListMega);
document.addEventListener("click", dropDownNotification);
document.addEventListener("click", dropDownUser);

let searchBar = document.querySelector(".search-bar");
console.log(searchBar);
