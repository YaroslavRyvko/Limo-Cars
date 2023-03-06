export function initMobileMenu() {

  // Header  menu mobile

  let header_navigation_mobile = document.querySelector('.header__navigation-mobile');
  let header_menu_mobile = document.querySelector('.header-menu-mobile');
  let menu_btn = document.querySelector('.navigation-btn');
  let body = document.querySelector('body');

  menu_btn.addEventListener('click', toggleNav);

  function toggleNav() {
    header_navigation_mobile.classList.toggle('active');
    menu_btn.classList.toggle('active');
    body.classList.toggle('scroll-disabled');
  }

  let parent_items = header_menu_mobile.children;
  header_menu_mobile.addEventListener('click', function (event) {
    if (event.target.parentElement.classList.contains('active')) {
      Array.from(parent_items).forEach(item => {
        item.style.display = "block";
      })
      event.target.parentElement.classList.remove('active');
      header_menu_mobile.classList.remove('extended');
      return;
    }
    if (event.target.parentElement.classList.contains('menu-item-has-children')) {
      Array.from(parent_items).forEach(item => {
        item.style.display = "none";
      })
      event.target.parentElement.style.display = "block";
      event.target.parentElement.classList.add('active');
      header_menu_mobile.classList.add('extended');
    }

  })


  window.onscroll = function () {
    showOnScroll()
  };

  let header = document.querySelector(".header");
  let sticky = header.offsetTop;

  function showOnScroll() {
    if (window.pageYOffset > sticky + 75) {
      header.classList.add("fixed");
    } else {
      header.classList.remove("fixed");
    }
  }


  // Footer  menu mobile

  let footerMenu = document.querySelector('.footer-menu');
  let acc = footerMenu.querySelectorAll('.menu-item-has-children')
  for (let i = 0; i < acc.length; i++) {
    acc[i].firstChild.addEventListener("click", function () {
      this.classList.toggle("active");
      this.parentElement.classList.toggle("active");
      let panel = this.nextElementSibling;
      if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      }
    });
  }
}