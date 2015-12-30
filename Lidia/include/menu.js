addEventListener('load', menuToggle, false);

function menuToggle(){
	if(document.getElementById('na').style.left == '-100%'){
		document.getElementById('na').style.left = '0';
	} else {
		document.getElementById('na').style.left = '-100%';
	}
}

