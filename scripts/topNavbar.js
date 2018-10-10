function init(){
	/* Debouncer */
	const debounce = (func, wait = 10, immediate = false) => {
		let timeout;
		return function () {
			let context = this, args = arguments;
			let later = function () {
				timeout = null;
				if (!immediate) func.apply(context, args)
			};
			let callNow = immediate && !timeout;
			clearTimeout(timeout);
			timeout = setTimeout(later, wait);
			if (callNow) func.apply(context, args);
		}
	}

	/* Nav Bar */
	const header = document.querySelector('#gb-app-wrapper');
	const navBar = document.querySelector('.gb-navbar');
	 
	/* Black overlay header */
	const blackHeaderOverlay = document.querySelector('#header-black-overlay');

  
 
 
	//Scroll effect
	const scrolling = (e) => {
		/* Script for the blackHeaderOverlay to change it's opacity */
		const scrollY = window.scrollY;
		const headerHeight = header.scrollHeight;
		if(scrollY < headerHeight){
			blackHeaderOverlay.style.opacity = ((scrollY + 1) /headerHeight )/2
		}
		

		/* Script for the nav to be sticky */

		const isPassed = scrollY >= 10;
		if(isPassed && navBar.classList.contains('gb-background-transparent')){
			navBar.classList.remove('gb-background-transparent');
			navBar.classList.add('gb-background-primary' , 'sticky');
		}else if(!isPassed && navBar.classList.contains('sticky')){
			navBar.classList.remove('gb-background-primary' , 'sticky')
			navBar.classList.add('gb-background-transparent');
		}


		/* Script that autoscroll when half of the sections is in the view */
	 
	}
	scrolling();
	window.addEventListener('scroll' , debounce(scrolling));
 
}
init();