import setupActiveMenu from "./modules/sidebar.js";
import initModal from "./modules/modal.js";

setupActiveMenu();
initModal();

document.addEventListener("DOMContentLoaded", () => {
  setupActiveMenu();
});
