import $ from 'jquery';

class mjbPreLoader {
	constructor() {
		window.addEventListener('load', function() {
			const loader = document.querySelector('.loader');
			loader.className += ' loader--hidden'; // class "loader hidden"
		});
	}
}

export default mjbPreLoader;
