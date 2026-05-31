import setupActiveMenu from "./modules/sidebar.js";
import initModal from "./modules/modal.js";
import sidebarToggle from "./modules/sidebarToggle.js";
import inputSearchTest from "./modules/inputSearch.js";

document.addEventListener("DOMContentLoaded", () => {
  setupActiveMenu();
  initModal();
  sidebarToggle();
  inputSearchTest();
});
