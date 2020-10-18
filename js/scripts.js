import "../style/app.sass";
import "jquery";

// Modules and classes

import mjbPreLoader from "./modules/Preloader";
import MobileMenu from "./modules/MobileMenu";

// Initiate new modules and classes

let MJBPreLoader = new mjbPreLoader();
let mobileMenu = new MobileMenu();

// Allow new JS and CSS to load in browser without a traditional page refresh
if (module.hot) {
	module.hot.accept();
}