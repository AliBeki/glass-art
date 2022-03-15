
document.addEventListener('DOMContentLoaded', function() {

	// ### Burger Menu ### 
document.querySelector('.burger').addEventListener('click', function(_e){
	_e.preventDefault();
		var mainnav = document.querySelector('.mainnav');
	mainnav.classList.toggle('mainnav--open');
	var burger_icon = document.querySelector('#burger_icon');
	var close_icon = document.querySelector('#close_icon');
	if(mainnav.classList.contains('mainnav--open')) {
		burger_icon.style.display = "none";
		close_icon.style.display = "block";
	} else {
		burger_icon.style.display = "block";
		close_icon.style.display = "none";
	}
});


	let scrollTop = document.getElementById("scrollTop");
	if (scrollTop) {
		scrollTop.addEventListener('click', function(event) {
			event.preventDefault();

			let scrollPos = window.scrollY;
			let lastTime = 0;

			let scroll = function(time) {
				let timeDelta = time - lastTime;
				lastTime = time;
				scrollPos -=  4 * timeDelta;
				window.scrollTo(0, scrollPos);

				if (scrollPos > 0) {
					window.requestAnimationFrame(scroll);
				}
			};

			window.requestAnimationFrame(function(time) {
				lastTime = time;
			});

			window.requestAnimationFrame(scroll);
		});
	}
});