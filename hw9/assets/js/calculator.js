// JavaScript Document
var num1=document.getElementById('num1');
var num2=document.getElementById('num2');
var calcFunc=document.getElementById('calcFunc');
var results=document.getElementById('results');
var answer;

function calculate(){
	switch(calcFunc.value){
			case "add":
			answer=parseInt(num1.value)+parseInt(num2.value);
			break;
		case "subtract":
			answer=num1.value-num2.value;
			break;
		case "multiply":
			answer=num1.value*num2.value;
			break;
		case "divide":
			if(num2.value == 0)
				answer="DNE, Can't divide by 0";
			else
				answer=num1.value/num2.value;
			break;
	}
	results.innerHTML='<h3>Result is: '+answer+'<h3>';	
}

var calc=document.getElementById('calcExec');
calc.addEventListener('click',calculate);