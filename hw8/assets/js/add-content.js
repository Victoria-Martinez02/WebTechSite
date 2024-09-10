var today = new Date();
var hourNow = today.getHours();
var greeting;
var eltag = document.getElementById("greeting");

switch(hourNow){
	case 23:
	case 22:
	case 21:
	case 20:
	case 19:
		greeting = 'Good evening!';
		break;
	case 18:
	case 17:
	case 16:
	case 15:
	case 14:
	case 13:
		greeting = 'Good Afternoon!';
		break;
	case 12:
	case 11:
	case 10:
	case 9:
	case 8:
	case 7:
	case 6:
	case 5:
	case 4:
	case 3:
	case 2:
	case 1:
	case 0:
		greeting = 'Good Morning!';
		break;
	default:
		greeting = "Welcome!";
		break;
}

eltag.innerHTML = '<h3>' + greeting + '</h3>'