let menu = document.querySelector(".burger");
const menuItem = document.querySelector("#menu-item-390");
let nav = document.querySelector(".nav");
let b1 = document.querySelector(".b1");
let b2 = document.querySelector(".b2");
let hCaption = document.querySelector(".header__caption");
const pbHover = document.querySelector(".show-pb");
const pb = document.querySelector(".pb");
const body = document.querySelector("body");
const menuItems = document.querySelectorAll(".menu-item"); 

menu.addEventListener("click", () => {
  nav.classList.toggle("show");
  b1.classList.toggle("black-bg");
  b2.classList.toggle("black-bg");
  hCaption.classList.toggle("f-black");
  b1.classList.toggle("active-01");
  b2.classList.toggle("active-02");
});

menuItem.addEventListener("click", () => {
  nav.classList.toggle("show");
});

menuItems.forEach(menuItemSingle => {
  menuItemSingle.addEventListener("click", () => {
    nav.classList.remove("show");
    b1.classList.toggle("black-bg");
    b2.classList.toggle("black-bg");
    hCaption.classList.toggle("f-black");
    b1.classList.toggle("active-01");
    b2.classList.toggle("active-02");
  })
})

//Image Move

const movingImgs = document.querySelectorAll(".work-img");
if (movingImgs) {
  document.addEventListener("mousemove", e => {
    movingImgs.forEach(movingImg => {
      // movingImg.setAttribute("style", "transform : translate(calc(" + e.clientX + "px - ((1/3 * 100% - (1 - 1/3) * var(--base)) / 2), " + e.clientY + "px)");
      movingImg.setAttribute("style", "transform: translate( calc(" + e.clientX + "px - 50%), calc(" + e.clientY + "px - 50%)");
    });
  });
}

//Cursor Move

const cursor = document.querySelector(".cursor");
const cursorInner = document.querySelector(".cursor__inner");

const allLinks = document.querySelectorAll("a");

if (cursor || cursorInner) {
  document.addEventListener("mousemove", e => {
    cursor.style.transform = "translate(calc(" + e.clientX + "px - 50%), calc(" + e.clientY + "px - 50%))";
    // cursorInner.style.transform = "translate(calc(" + e.clientX + "px - 0.25rem), calc(" + e.clientY + "px - 0.25rem))";
  });

  allLinks.forEach(link => {
    link.addEventListener("mouseenter", e => {
      // cursor.classList.add("hover");
      cursorInner.classList.add("maximize");
    });
    link.addEventListener("mouseleave", e => {
      // cursor.classList.remove("hover");
      cursorInner.classList.remove("maximize");
    });
  });

  menu.addEventListener("mouseenter", e => {
    cursorInner.classList.add("maximize");
  });
  menu.addEventListener("mouseleave", e => {
    cursorInner.classList.remove("maximize");
  });

  // document.addEventListener("click", e => {
  //   cursorInner.classList.toggle("shrinkClick");
  // });
}

// Mobile Checker
if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
  body.classList.add("is_mobile");
} else {
  body.classList.add("is_not_mobile");
}
