//Adjust media when screen less than some pixels
function mediaFunction() {
	document.getElementsByClassName("topnav")[0].classList.toggle("responsive");
}

//Remove the side navigation when click on other spaces
window.onclick = function(event) {
	if(!event.target.matches('.iconbtn')) {
		
		var list = document.getElementsByClassName('topnav');
		
		for (var i = 0; i < list.length; i++) {		
			if (list[i].classList.contains('responsive')) {
				list[i].classList.remove('responsive');			
			}
		}
	}
}