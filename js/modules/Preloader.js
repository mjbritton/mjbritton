import $ from 'jquery';

class mjbPreLoader {
	constructor() {
		if (sessionStorage.getItem('dontLoad') == null) {
			window.addEventListener('load', function() {
				const loader = document.querySelector('.loader');
				sessionStorage.setItem('dontLoad', 'true');
				loader.className += ' loader--fade'; // class "loader hidden"
			});
		} else {
			const loader = document.querySelector('.loader');
			loader.className += ' loader--hidden';
		}
	}
}

export default mjbPreLoader;
