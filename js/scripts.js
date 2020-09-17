import "../style/app.sass";
import "jquery";

// Modules and classes

import mjbPreLoader from "./modules/Preloader";

// Initiate new modules and classes

const MJBPreLoader = new mjbPreLoader();

// Allow new JS and CSS to load in browser without a traditional page refresh
if (module.hot) {
	module.hot.accept();
}