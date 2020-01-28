/* For header position:fixed; while scrolling*/
window.onscroll = function showHeader() {
  var header = document.querySelector(".header");

  if (window.pageYOffset) {
    header.classList.add("header_fixed");
  } else {
    header.classList.remove("header_fixed");
  }
};
