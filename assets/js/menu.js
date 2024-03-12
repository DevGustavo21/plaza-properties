console.log('hola')

document.addEventListener("DOMContentLoaded", function () {
  const menuItems = document.querySelectorAll(".menu-item-has-children");

  if (window.innerWidth >= 768) {
    // Functionality for desktop devices
    menuItems.forEach(function (item) {
      let timer;

      item.addEventListener("mouseenter", function () {
        const subMenu = this.querySelector(".sub-menu");
        if (subMenu) {
          subMenu.style.display = "flex";
        }
      });

      item.addEventListener("mouseleave", function () {
        const subMenu = this.querySelector(".sub-menu");
        if (subMenu) {
          timer = setTimeout(function () {
            subMenu.style.display = "none";
          }, 300);
        }
      });

      item.addEventListener("mouseenter", function () {
        clearTimeout(timer);
      });
    });
  } else {
    // Functionality for mobile devices
    menuItems.forEach(function (item) {
      item.addEventListener("click", function () {
        const subMenu = this.querySelector(".sub-menu");

        if (subMenu) {
          if (
            subMenu.style.display === "none" ||
            subMenu.style.display === ""
          ) {
            subMenu.style.display = "flex";
          } else {
            subMenu.style.display = "none";
          }
        }
      });
    });
  }
});

const openBtn = document.querySelector(".btn-open");
const closeBtn = document.querySelector(".btn-close");
const menu = document.querySelector(".navigation");

// Evento para el botón de cierre
openBtn.addEventListener("click", () => {
  menu.style.display = "block";
  closeBtn.style.display = "flex";
  openBtn.style.display = "none";
});

// Evento para el botón de apertura
closeBtn.addEventListener("click", () => {
  menu.style.display = "none";
  closeBtn.style.display = "none";
  openBtn.style.display = "flex";
});
