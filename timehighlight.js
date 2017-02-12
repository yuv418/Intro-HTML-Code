function highlight(){
var today = new Date().getDate()
var tds = document.getElementsByTagName('td'); 
for (i = 0; i < tds.length; i++){
	if (tds[i].innerHTML == today.toString()){
		tds[i].style = 'background-color:#00cc33'
		
	}
	
	
}
}
