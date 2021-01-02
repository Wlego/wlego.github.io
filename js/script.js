
/* var arr=new Array("srr",1.23,7,false);
for(var i=0; i<arr.length; i++)
	document.write(arr[i]+"<br />");
arr=new Array();
for (i=0;i<=10;i++){
	arr[i]=i*3;
	document.write(arr[i]+"<br />");
} */ 



/* function open_now(){var myWin;
myWin=window.open("","displayWin","width=400,height=300,resizable=yes,
menubar=no,location=no,alwaysRaised=yes");
var text="<html><head><title>Test</title></head>"
+"<body bgcolor=white><h1>Please resize me</h1></body>"
+"</html>";
myWin.document.write(text);
myWin.captureEvents(Event.RESIZE);
myWin.onresize=alert_me;}


function alert_me(){alert("You resized me! \nNow my outer width: " + this.outerWidth +
"\n and my outer height: " +this.outerHeight);this.focus();} */

var s=0;
var i=0;
var result=0;
					
					
function time(){
	var x=document.getElementById("pole").value;
	var z=document.getElementById("pole1").value;
	var y=document.getElementById("pip");
	var l=x.length;
	var l1=z.length;
	if (x==""){
		y.innerHTML="Начнем вычисления дружище?";
		}
	else {if (l>0)
			{y.innerHTML="продолжим!";
					setTimeout("time()",5000);
				if ((l1==l1) && ((i%20000)==0))
					{y.innerHTML="Не спи дружище!";
					/* document.getElementById("pole1").value=x.length; */
					}
				}
		}
	i+=1000;
}


// function calcu() {
	// var x = document.getElementById("pole").value;
	 // with (Math){l=x} 
	// l = eval(x);
	// y.value=l;
	// document.getElementById("pole1").value = l;
// }


// function calcu(){
	// var x = document.getElementById("pole").value;
	// var l=0;
	// for (l!=-1){
		// document.getElementById("pole1").value = l;
		// l=x.indexOf("sin",l);
		// }
	// }
// } 
	

function calcu() {
	var x = document.getElementById("pole").value;
	var l=0;
	var t=0;
	if (x.indexOf("sin")!=-1) {
		l=x.indexOf("sin");
		while(l!=-1){		
		t=l+4;
		var l1=x.indexOf(")",t);
		var y=x.substring(t,l1);
		y=eval(y);
		y=Math.sin(y);
		r=x.substring(0,l);
		r=r+y;
		l=r.indexOf("sin",l+1);
		}
		r=eval(r);
		document.getElementById("pole1").value = r;	
	}	
}

function calcu_sin(l) {
	var x = document.getElementById("pole").value;
	l = eval(x);
	l = Math.sin(l);
	document.getElementById("pole1").value = l;
}

function calcu_cos() {
	var x = document.getElementById("pole").value;
	l = eval(x);
	l = Math.cos(l);
	document.getElementById("pole1").value = l;
}

function calcu_tan() {
	var x = document.getElementById("pole").value;
	l = eval(x);
	l = Math.tan(l);
	document.getElementById("pole1").value = l;
}

function calcu_ctan() {
	var x = document.getElementById("pole").value;
	l = eval(x);
	l = Math.ctan(l);
	document.getElementById("pole1").value = l;
}
function calcu_asin() {
	var x = document.getElementById("pole").value;
	l = eval(x);
	l = Math.asin(l);
	document.getElementById("pole1").value = l;
}

function calcu_acos() {
	var x = document.getElementById("pole").value;
	l = eval(x);
	l = Math.acos(l);
	document.getElementById("pole1").value = l;
}

function calcu_atan() {
	var x = document.getElementById("pole").value;
	l = eval(x);
	l = Math.atan(l);
	document.getElementById("pole1").value = l;
}

function calcu_actan() {
	var x = document.getElementById("pole").value;
	l = eval(x);
	l = Math.sin(l);
	document.getElementById("pole1").value = l;
}