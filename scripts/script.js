function changeTextFunc() {

		document.getElementById("changeText").innerHTML = "Changed.";
}
function output() {
	window.alert(5+6);
	//document.write(5+6); //Only used for testing
}
function leftClick() {

	document.getElementById('img1').src='img/1.jpg';
}
function rightClick() {

	document.getElementById('img1').src='img/2.jpg';
}
function dateFunc() {

		document.getElementById("demo").innerHTML = Date();
}
function fontFunc() {

	document.getElementById('font').style.fontSize = '75px';
}
function hideFunc() {

	document.getElementById('hide').style.display='none';
}
function usingInnerHTML() {

	document.getElementById("usingInnerHTML").innerHTML = "Added on " + 5 + 6;
}
//Useful for console logs
console.log( 5 + 6 );


function variables() {
	var x = 1;
	var y = 2;
	var z = x + y;
	document.getElementById("variables").innerHTML = "Variable:" + z;
}

//COMMON HTML EVENTS

function onChange() {

}
function onClick() {

}

function onMouseOver() {

}
function onMouseOut() {

}
function onKeyDown() {
	
}
function onLoad() {

}
