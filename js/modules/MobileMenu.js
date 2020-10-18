class MobileMenu {
  constructor() {
    this.menuIcon = document.querySelector(".menu-btn")
    this.menuContent = document.querySelector(".mobile-nav")
    this.events()
  }

  events() {
    this.menuIcon.addEventListener("click", () => this.toggleTheMenu())
  }

  toggleTheMenu() {
    this.menuIcon.classList.toggle("open")
    this.menuContent.classList.toggle("mobile-nav--open")
  }
}

export default MobileMenu;