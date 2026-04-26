export default function sidebarToggle() {
  const sidebar = document.querySelector(".sidebar-menu");

  // 1. Ao carregar, verifica se existe o estado 'collapsed' no LocalStorage
  const isCollapsed = localStorage.getItem("sidebarState") === "collapsed";

  // 2. Se estiver salvo como colapsado, aplica a classe imediatamente
  if (isCollapsed && sidebar) {
    sidebar.classList.add("collapsed");
  }

  document.addEventListener("click", function (event) {
    const btn = event.target.closest("#toggle-sidebar");

    if (btn) {
      if (sidebar) {
        sidebar.classList.toggle("collapsed");

        // 3. Salva o novo estado no LocalStorage
        if (sidebar.classList.contains("collapsed")) {
          localStorage.setItem("sidebarState", "collapsed");
        } else {
          localStorage.setItem("sidebarState", "expanded");
        }
      }
    }
  });
}
