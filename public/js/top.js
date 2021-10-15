const backtotop = document.querySelector("#myBtn");

window.addEventListener("Scroll", scrollFunction);

function scrollFunction(){
	if(window.pageYOffset > 300){

		if (!backtotop.classList.contains("btnEntrance")) {
		backtotop.classList.remove("btnExit");
		backtotop.classList.add("btnEntrance");
		backtotop.style.display = "block";
		}
	}
	else{

		if(backtotop.classList.contains("btnEntrance")){
			backtotop.classList.remove("btnEntrance");
		backtotop.classList.add("btnExit");
		setTimeout(function(){
			backtotop.style.display = "none";
			}, 250);
		
		}
	}
}

bactotop.addEventListener("click", smoothScrollBackToTop);

/*function backToTop(){
	window.scrollTo(0, 0);
}*/
function smoothScrollBackToTop(){
	const targePosition = 0;
	const startPosition = window.pageYOffset;
	const distance = targePosition - startPosition;
	const duration = 750;
	let start = null;

	window.requestAnimationFrame(step);

	function step(timestamp){
		if (!start) start = timestamp;
		const progress = timestamp - start;
		window.scrollTo(0, eaeInOutCubic(progress, startPosition, distance, duration));
	}
}

	function easeInOutCubic(t, b, c, d){
		t /= d/2;
		if (t < 1) return c/2*t*t*t + b;
		t -= 2;
		return c/2*(t*t*t + 2) + b;
	}